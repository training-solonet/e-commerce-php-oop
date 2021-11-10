<?php
// require '../Config/Query.php';

// require_once('../Config/ClassDatabase.php');
require_once('../App/ClassLogin.php');


session_start();
if(isset($_POST['submit'])){
    $register = new Register;
	$register->getData($_POST['username'], $_POST['password'], $_POST['Cpassword']);
  header('location:Routes/Route.php');
  exit;
}
if(isset($_POST['submit'])){
    echo "<div class='alert alert-danger text-center' role='alert'>
        '".$register->message."'
    </div>";
}
// $this->login()