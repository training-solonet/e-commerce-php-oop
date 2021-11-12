<?php

require '../App/ClassLogin.php';

// Function Register
session_start();
if(isset($_POST['submit'])){
	$register = new Register;
	$register->getData($_POST['username'], $_POST['password'], $_POST['Cpassword']);
}
if(isset($_POST['submit'])){
    echo "<script  '>
            alert('$register->message');
            window.location ='../register.php';
        </script>";
}
