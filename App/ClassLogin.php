<?php


require 'ClassDatabase.php';

// Class Query
class Query extends Connect{

	protected $sql;
	protected $result;


    // Method Register
	public function SQLValidateUsername($username){
		$this->sql = "SELECT * FROM users WHERE username = '".$username."'";
		return $this->getResult();
	}

	public function SQLRegister( $username, $password){
		$password=md5($password);
		$this->sql = "INSERT INTO users(username, password) VALUES ( '$username', '$password')";
		return $this->getResult();
	}

	public function getResult(){
		$this->result = $this->dbConn()->query($this->sql);
		return $this;
	}

	public function FetchArray(){
		$row = $this->result->fetch_array();
		return $row;
	}
}

// Class Register
class Register extends Query{

	protected $username;
	protected $password;
	protected $Cpassword;
	public $message;

	public function getData( $username, $password, $Cpassword){
		$this->username = $username;
		$this->password = $password;
		$this->Cpassword = $Cpassword;

		return $this->validateData();
	}

	public function validateData(){
		if(empty($this->username) || empty($this->password) || empty($this->Cpassword)){
			$this->message = 'Semua data dibutuhkan!.';
			return $this->message;
		}elseif($this->password !== $this->Cpassword){
			$this->message = 'Konfirmasi password anda salah!.';
			return $this->message;
		}else{
			return $this->Register();
		}
	}

	public function Register(){
		$row = $this->SQLValidateUsername($this->username)->FetchArray();
		if($row['username'] == $this->username){
			$this->message = 'Username yang anda masukan sudah pernah digunakan!.';
			return $this->message;
		}else{
			$sql = $this->SQLRegister( $this->username, $this->password);
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			header('location:../login.php');
		}
	}
}

require_once('../Config/ClassDatabase.php');

class Login extends Connect
{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_login($username, $password)
    {
        $sql = "SELECT * FROM login WHERE username = '$username'";
        $query = $this->connection->query($sql);

        if ($query->num_rows > 0) {
            $row = $query->fetch_assoc();

            if (password_verify($password, $row['password'])) {

                // set session
                $_SESSION['logins'] = true;

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

    // public function escape_string($value)
    // {

    //     return $this->connection->real_escape_string($value);
    // }
}

