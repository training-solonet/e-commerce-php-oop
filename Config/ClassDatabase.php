<?php
// namespace DataBase;
// use Mysqli;
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

        $this->password = '123';

        $this->password = 'root';

        $this->dbname = 'warisanify';

        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $this->connection;
    }
}
