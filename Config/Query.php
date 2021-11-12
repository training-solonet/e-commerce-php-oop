<?php
require_once ('ClassDatabase.php');

class Query extends Connect{

    protected $sql;
    protected $result;

    // public function sql_login($email, $password){}

    // public function sql_validDateEmail($email){}
    public function SQLValidateUsername($username){
		// Nantinya saya akan gunakan untuk proses validasi username pada proses register
		$this->sql = "SELECT * FROM users WHERE username = '".$username."'";
		// Memanggil method getResult untuk mengeksekusi sintaks SQL.
		return $this->getResult();
	}

    public function sql_register($username, $password){
        $this->sql = "INSERT INTO users(username, password, umur, jenis_kelamin) VALUES ('$username', '$password')";
		return $this->getResult();
    }

    public function getResult(){
        $this->result = $this->dbconn()->query($this->sql);
        return $this;
    }

    public function FetchArray(){
		// Method ini berfungsi untuk memasukan data yang berada pada database kedalam variable array.
		$row = $this->result->fetch_array();
		return $row;
	}
}