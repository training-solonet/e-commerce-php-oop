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

session_start();
require_once('../Config/ClassDatabase.php');
require_once('../App/ClassLogin.php');

$login = new Login();

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password =	$_POST['password'];

	$cek = $login->check_login($username, $password);

	if ($cek) {
		$_SESSION['logins'] = true;
		header('location: ../home.php');
	} else {
		echo "<script>
				alert('username atau password salah');
				document.location.href= '../login.php';
			</script>";
	}
} else {
	header('location:../login.php');

}
