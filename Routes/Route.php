<?php

// require_once('../Config/ClassDatabase.php');


require_once('../Config/ClassDatabase.php');
require_once('../App/ClassBarang.php');
// use Barang\Barang;
require_once('../App/ClassLogin.php');
require_once('../App/ClassKategori.php');

$koneksi = new Barang();


// Function Register
session_start();

$aksi = $_GET['aksi'];

if ($aksi == 'register') {

	if (isset($_POST['submit'])) {
		$register = new Register($_POST['username'], $_POST['password'], $_POST['Cpassword']);
		echo "<script>
            alert('$register->message');
            window.location ='../register.php';
        </script>";
	}
} else if ($aksi == 'login') {

	$login = new Login($_POST['username'], $_POST['password']);

	if (isset($_POST['submit'])) {

		$cek = $login->check_login();

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
} else if ($aksi == 'tambah-kategori') {

	$koneksi = new Kategori();

	if (isset($_POST['submit'])) {

		$kategori = $_POST['nama_kategori'];

		$result = $koneksi->create($kategori);

		header('location:../Admin/kategori.php');
	}
} else if ($aksi == 'update-kategori') {
	$koneksi = new Kategori();

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$kategori = $_POST['nama_kategori'];

		$koneksi->update($id, $kategori);
		
		header('location:../Admin/kategori.php');
	}
} else if ($aksi == 'hapus-kategori') {

	$koneksi = new Kategori();

	$id = $_GET['idK'];
	$result = $koneksi->hapus($id);
	header('Location:../Admin/kategori.php');
} elseif ($aksi == 'tambah-barang') {

	if (isset($_POST['submit'])) {

		$gambar = $_FILES['gambar']['name'];
		$tmp = $_FILES['gambar']['tmp_name'];
		move_uploaded_file($tmp, '../Assets/gambar/' . $gambar);

		$barang = $_POST['barang'];
		$harga = $_POST['harga'];
		$detail = $_POST['detail'];
		$kategori = $_POST['kategori'];

		$result = $koneksi->create($barang, $harga, $gambar, $detail, $kategori);

		header('location:../Admin/index.php');
	}
} elseif ($aksi == "hapus-barang") {
	$koneksi = new Barang();

	$id = $_GET['id'];
	$result = $koneksi->delete($id);
	header('location: ../Admin/index.php');

} elseif ($aksi == "edit-barang") {

	$koneksi = new Barang();

	if (isset($_POST['submit'])) {

		$id = $_POST['id'];
		$barang = $_POST['barang'];
		$harga = $_POST['harga'];
		$gambar = $_POST['gambar'];
		$detail = $_POST['detail'];
		$kategori = $_POST['kategori'];

		$koneksi->update($id, $barang, $harga, $gambar, $detail, $kategori);
		header('Location: ../Admin/index.php');
	}
}
