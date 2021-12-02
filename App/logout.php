<?php

session_start();
session_unset();
session_destroy();
$_SESSION = [];

setcookie('id', '');
setcookie('key', '');

header('Location: ../login.php');
exit;

?>