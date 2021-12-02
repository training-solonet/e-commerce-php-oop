<?php

session_start();
session_unset();
session_destroy();
$_SESSION = [];

setcookie('id', '');
setcookie('key', '');
header('Location: ../login.php');


// $aksi = $_GET['aksi'];

// if($aksi == 'admin'){
//     header('location: ../')
// }elseif($aksi =='user'){
//     header('Location: ../login.php');
// }
exit;
