<?php
require '../Config/ClassDatabase.php';

class Query extends Connect{

    protected $query;
    protected $result;

    // public function query_login($email, $password){}

    // public function query_validDateEmail($email){}

    public function query_register($username, $password){
        $this->query = "INSERT INTO users(username, password, umur, jenis_kelamin) VALUES ('$username', '$password')";
		return $this->getResult();
    }
    public function getResult(){
        $this->result = $this->dbconn()->query($this->query);
        return $this;
    }
    public function FecthArray(){
        $row = $this->result->fetch_array();
		return $row;
    }
}
