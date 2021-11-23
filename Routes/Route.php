<?php
require_once('../Config/ClassDatabase.php');
require_once('../App/ClassKategori.php');
require_once('../App/ClassLogin.php');

// Function Register
session_start();

$aksi = $_GET['aksi'];

if ($aksi == 'register') {

	if (isset($_POST['submit'])) {
		$register = new Register;
		$register->getData($_POST['username'], $_POST['password'], $_POST['Cpassword']);
	}
	if (isset($_POST['submit'])) {
		echo "<script  '>
            alert('$register->message');
            window.location ='../register.php';
        </script>";
	}
} else if ($aksi == 'login') {

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
	} else if ($aksi == 'tambah') {

			$koneksi = new Kategori();
		
			if (isset($_POST['submit'])) {
		
				$kategori = $_POST['nama_kategori'];
				
				$result = $koneksi->create($kategori);
		
				header('location:../Admin/kategori.php');
			}
		}else if ($aksi == 'update'){
			$koneksi = new Kategori();
		
			if (isset($_POST['submit'])) {
				$id = $_POST['id'];
				$kategori = $_POST['nama_kategori'];
				
			$koneksi->update($id,$kategori);
		
				header('location:../Admin/kategori.php');
		}
	}else if ($aksi == 'hapus'){
		$koneksi = new Kategori();
		    
			$id = $_GET['id'];
			$result = $koneksi->hapus($id);
			header('Location:../Admin/kategori.php');
		

	}
	


