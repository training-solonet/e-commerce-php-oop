<?php

session_start();
require_once('../Config/ClassDatabase.php');
require_once('../App/ClassLogin.php');


$login = new Login();

// if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
// 	$id = $_COOKIE['id'];
// 	$key =  $_COOKIE['key'];

// 	if ($key == hash('ripemd160', $row['username'])) {
// 		$_SESSION['logins'] = true;
// 	}
// }

if (isset($_POST['submit'])) {
	$username = $login->escape_string($_POST['username']);
	$password = $login->escape_string($_POST['password']);

	$cek = $login->check_login($username, $password);

	if ($cek) {
		// $_SESSION['logins'] = true;	

		header('location: ../home.php');
	} else {
		echo "<script>
				alert('username atau password salah');
				document.location.href= '../login.php';
			</script>";
	}
} else {
	// $_SESSION['message'] = 'You need to login first';
	header('location:../login.php');
}
