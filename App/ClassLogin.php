<?php
// require_once('../Config/ClassDatabase.php');
// use DataBase\DataBase;

// Class Query
class Query extends DataBase
{

    protected $sql;
    protected $result;

    // Method Register
    public function SQLRegister($username, $password, $role)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->sql = "INSERT INTO user(username, password, role) VALUES ('$username', '$password', '$role')";
        $this->result = $this->dbConn()->query($this->sql);
        return $this->result;
    }
}

// Class Register
class Register extends Query
{

    protected $username;
    protected $password;
    protected $Cpassword;
    public $role;
    public $message;
    protected $result;

    public function __construct($username, $password, $Cpassword, $role)
    {
        $this->username = $username;
        $this->password = $password;
        $this->Cpassword = $Cpassword;
        $this->role = $role;


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
            $sql = $this->SQLRegister($this->username, $this->password, $this->role);    
            header('location:../login.php');
        }
    }
}

class Login extends DataBase
{
    public string $username;
    public string $password;
    public string $role;

    public function __construct(?string $username = "", ?string $password = "", ?string $role = "")
    {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;

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
                if($row["role"] == "admin"){
                    $_SESSION["login"] = true;
                    $_SESSION["role"] = "admin";
                }
                if($row["role"] == "user"){
                    $_SESSION["login"] = true;
                    $_SESSION["role"] = "user";
                }
                
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
?>