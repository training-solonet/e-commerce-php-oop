<?php
require '../Config/Query.php';


// Method Register
class RegisterController extends Query{

	protected $username;
	protected $password;
	protected $confirm_password;
	public $message;

	public function getData($username, $password, $confirm_password){
		$this->username = $username;
		$this->password = $password;
		$this->confirm_password = $confirm_password;

		return $this->validateData();
	}

	public function validateData(){
		if(empty($this->username)|| empty($this->password) || empty($this->confirm_password)){
			$this->message = 'Semua data dibutuhkan!.';
			return $this->message;
			header('location:register.php');
		}elseif($this->password !== $this->confirm_password){
			$this->message = 'Konfirmasi password anda salah!.';
			return $this->message;
			header('location:register.php');
		}else{
			return $this->Register();
		}
	}

	public function Register(){
		$row = $this->SQLValidateUsername($username)->FetchArray();
			if($this->password === $this->confirm_password){
			$sql = $this->query_register($this->username, $this->password);
			$_SESSION['password'] = $row['password'];
			header('location:login.php');
		}
	}
}




