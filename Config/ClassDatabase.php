<?php

class DataBase
{

    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected $connection;

    protected function dbConn()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'warisanify';

        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $this->connection;
    }
}
