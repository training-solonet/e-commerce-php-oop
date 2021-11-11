<?php

require_once('../Config/ClassDatabase.php');

class Login extends Connect
{

    public function __construct()
    {
        parent::dbConn();
    }

    public function check_login($username, $password)
    {
        $sql = "SELECT * FROM login WHERE username = '$username'";
        $query = $this->connection->query($sql);

        if ($query->num_rows > 0) {
            $row = $query->fetch_assoc();

            if (password_verify($password, $row['password'])) {

                $_SESSION['logins'] = true;

                // if (isset($_POST['remember'])) {
                //     setcookie('id', $row['id'], time() + 60);
                //     setcookie('key', hash('ripemd160', $row['username']), time() + 60);
                // }
                return $row['id'];
            }
        } else {
            return false;
        }
    }

    public function escape_string($value)
    {

        return $this->connection->real_escape_string($value);
    }
}
