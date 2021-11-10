<?php
// require '../Config/ClassDatabase.php';
// require_once('../Config/ClassDatabase.php');
require('../Config/Query.php');


// Function Register
class Register extends Query{

	protected $username;
	protected $password;
	protected $Cpassword;
	public $message;

	public function getData($username, $password, $Cpassword){
		$this->username = $username;
		$this->password = $password;
		$this->Cpassword = $Cpassword;
		return $this->validateData();
	}

	public function validateData(){
		if(empty($this->username) || empty($this->password) || empty($this->Cpassword)){
			$this->message = 'Semua data dibutuhkan!.';
			return $this->message;
			header('location:register.php');
		}elseif($this->password !== $this->Cpassword){
			$this->message = 'Konfirmasi password anda salah!.';
			return $this->message;
			header('location:register.php');
		}else{
			return $this->Register();
		}
	}

	public function Register(){
		$row = $this->SQLValidateUsername($this->username)->FetchArray();
		if($row['username'] == $this->username){
			$this->message = 'username yang anda masukan sudah pernah digunakan!.';
			return $this->message;
			header('location:register.php');
		}else{
			$sql = $this->sql_register($this->username, $this->password);
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			header('location:index.php');
		}
	}
}