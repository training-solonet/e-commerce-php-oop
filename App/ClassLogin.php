<?php


// require_once('../Config/ClassDatabase.php');
// use DataBase\DataBase;

// Class Query
class Query extends DataBase
{

    protected $sql;
    protected $result;


    // Method Register
    public function SQLRegister($username, $password)
    {
        // $password = md5($password);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->sql = "INSERT INTO user(username, password) VALUES ( '$username', '$password')";
        $this->result = $this->dbConn()->query($this->sql);
        return $this->result;
        // return $this->getResult();
    }

    // public function getResult()
    // {
    //     $this->result = $this->dbConn()->query($this->sql);
    //     return $this;
    // }

    // public function FetchArray()
    // {
    //     $row = $this->result->fetch_array();
    //     return $row;
    // }
}

// Class Register
class Register extends Query
{

    protected $username;
    protected $password;
    protected $Cpassword;
    public $message;
    protected $result;

    public function __construct($username, $password, $Cpassword)
    {
        $this->username = $username;
        $this->password = $password;
        $this->Cpassword = $Cpassword;

        return $this->validateData();
    }

    public function validateData()
    {
        if (empty($this->username) || empty($this->password) || empty($this->Cpassword)) {
            $this->message = 'Semua data dibutuhkan!.';
            return $this->message;
        } elseif ($this->password !== $this->Cpassword) {
            $this->message = 'Konfirmasi password anda salah!.';
            return $this->message;
        } else {
            return $this->Register();
        }
    }

    public function SQLValidateUsername($username)
    {
        $this->sql = "SELECT * FROM user WHERE username = '$username'";
        $this->result = $this->dbConn()->query($this->sql);
        return $this->result;
    }

    public function Register()
    {
        $row = $this->SQLValidateUsername($this->username);
        $resultData = $row->fetch_assoc();
        if ($resultData['username'] == $this->username) {
            $this->message = 'Username yang anda masukan sudah pernah digunakan!.';
            return $this->message;
        } else {
            $sql = $this->SQLRegister($this->username, $this->password);
            $_SESSION['username'] = $resultData['username'];
            $_SESSION['password'] = $resultData['password'];
            header('location:../login.php');
        }
    }
}


class Login extends DataBase
{
    protected string $username;
    protected string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;

        return $this->check_login();
    }

    public function check_login()
    {
        $sql = "SELECT * FROM user WHERE username = '$this->username'";
        $query = $this->dbConn()->query($sql);

        if ($query->num_rows > 0) {
            $row = $query->fetch_assoc();

            $hash = password_verify($this->password, $row["password"]);
            if ($hash == $row['password']) {

                // set session
                $_SESSION['admin'] = true;

                if (isset($_POST['remember'])) {
                    setcookie('id', $row['id'], time() + 10);
                    setcookie('key', hash('ripemd160', $row['username']), time() + 10);
                }

                return $row['id'];
            }
        } else {
            return false;
        }
    }
}
