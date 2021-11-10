<?php

// include('../config.php');



$pass = "123";
// echo password_hash($pass, PASSWORD_DEFAULT,);
$passhash = '$2y$10$ahkW.ze7vbaR7nMXLaEc3.eF48IOqjj7D1F..WK/dsDVTIWwXl5h6';
if(password_verify($pass, $passhash)){
    echo 'password anda sesuai 100% no debat';
}else {
    echo 'maaf password anda salah';
}

?>