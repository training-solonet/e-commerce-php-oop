<?php


class Connect{

	private $servername;
	private $username;
	private $password;
	private $dbname;

	protected function dbConn(){
		$this->servername = 'localhost';
		$this->username = 'root';
		$this->password = '';
		$this->dbname = 'warisanify';

		$connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		return $connection;
	}
}

class Connect
{
    public $servername;
    public $username;
    public $password;
    public $dbname;

    public $connection;

    public function __construct()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'warisanify';

        // mysqli_connect()
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $this->connection;
    }
}

