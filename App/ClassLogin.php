<?php
    require_once('../Config/ClassDatabase.php');

    class Login extends Koneksi{

        public function __construct(){
 
            parent::__construct();
        }
     
        public function check_login($username, $password){
     
            $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
            $query = $this->connection->query($sql);
     
            if($query->num_rows > 0){
                $row = $query->fetch_array();
                return $row['id'];
            }
            else{
                return false;
            }
        }
     
        public function details($sql){
     
            $query = $this->connection->query($sql);
     
            $row = $query->fetch_array();
     
            return $row;       
        }
     
        public function escape_string($value){
     
            return $this->connection->real_escape_string($value);
        }
    }

?>