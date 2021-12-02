<?php

// include('App/ClassBarang.php');
// include('App/ClassBarang.php');
// use \Barang\Barang;
require_once('Config/ClassDatabase.php');
class Barang extends DataBase
{

    public function show()
    {
        // $query = "SELECT barang.*, kategori.* FROM barang JOIN kategori ON barang.id_kategori = kategori.id";
        $query = "SELECT *, barang.id as id_barang FROM barang JOIN kategori ON barang.id_kategori = kategori.id";
        $result = $this->dbConn()->query($query);
        // $query = mysqli_query($this->connection, "SELECT * from barang");

        $rows = [];
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function showKategori()
    {
        $query = "SELECT *, kategori.id as kode_kategori FROM kategori";
        $result = $this->dbConn()->query($query);

        $rows = [];
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function create($barang, $harga, $gambar, $detail, $kategori)
    {
        $query = "INSERT INTO barang (nama_barang, harga, gambar, detail_produk, id_kategori) 
                    VALUES ('$barang', '$harga', '$gambar', '$detail', $kategori)";
        $result = $this->dbConn()->query($query);
    }

    public function delete($id)
    {
        $query = "DELETE FROM barang WHERE id = $id";
        $result = $this->dbConn()->query($query);
    }

    public function showUpdate($id)
    {
        $query = "SELECT * FROM barang WHERE id = $id";
        $result = $this->dbConn()->query($query);

        return $result->fetch_assoc();
    }

    public function update($id, $barang, $harga, $gambar, $detail, $kategori)
    {
        $query = "UPDATE barang SET nama_barang = '$barang', harga = '$harga', 
        gambar = '$gambar', detail_produk = '$detail', id_kategori = '$kategori' WHERE id = $id";

        $result = $this->dbConn()->query($query);
    }
}


$showDataBarang = new Barang();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="Assets/shop.css">
</head>

<body>
    <nav class="navbar">
        <a class="logo" href="home.php">Warisanify</a>
        <ul class="nav-list">
            <li><a href="home.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#">Theater</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>

    <section class="helper">
        <div class="search">
            <form action="">
                <input type="text" placeholder="Search here">
                <button class="search-button">P</button>
            </form>
        </div>

        <div class="right">
            <div class="cart">
                <img src="Assets/pict/shopping-cart.png" alt="" srcset="">
            </div>

            <a href="">
                <div class="profil">
                    <div class="circle">
                        <img src="" alt="" srcset="">
                    </div>

                    <p>Username</p>
                </div>
            </a>
        </div>
    </section>

    <section class="main-content">
        <?php foreach ($showDataBarang->show() as $dataBarang) : ?>
            <div class="card">
                <img src="Assets/pict/wayang.png" alt="">
                <div class="card-content">
                    <h2><?= $dataBarang["nama_barang"]; ?></h2>
                    <p><?= $dataBarang["detail_produk"]; ?></p>
                    <h2><?= $dataBarang["harga"]; ?></h2>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- <div class="card">
            <img src="Assets/pict/wayang.png" alt="">
            <div class="card-content">
                <h2>Nama Barang</h2>
                <p>Deskripsi barang disini</p>
                <h2>Rp. 1.200.000,00</h2>
            </div>
        </div>

        <div class="card">
            <img src="Assets/pict/wayang.png" alt="">
            <div class="card-content">
                <h2>Nama Barang</h2>
                <p>Deskripsi barang disini</p>
                <h2>Rp. 1.200.000,00</h2>
            </div>
        </div>

        <div class="card">
            <img src="Assets/pict/wayang.png" alt="">
            <div class="card-content">
                <h2>Nama Barang</h2>
                <p>Deskripsi barang disini</p>
                <h2>Rp. 1.200.000,00</h2>
            </div>
        </div>

        <div class="card">
            <img src="Assets/pict/wayang.png" alt="">
            <div class="card-content">
                <h2>Nama Barang</h2>
                <p>Deskripsi barang disini</p>
                <h2>Rp. 1.200.000,00</h2>
            </div>
        </div>

        <div class="card">
            <img src="Assets/pict/wayang.png" alt="">
            <div class="card-content">
                <h2>Nama Barang</h2>
                <p>Deskripsi barang disini</p>
                <h2>Rp. 1.200.000,00</h2>
            </div>
        </div>

        <div class="card">
            <img src="Assets/pict/wayang.png" alt="">
            <div class="card-content">
                <h2>Nama Barang</h2>
                <p>Deskripsi barang disini</p>
                <h2>Rp. 1.200.000,00</h2>
            </div>
        </div> -->
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="">Warisanify</a>
            </div>

            <div class="find-us">
                <h1>Find Us</h1>
                <ul class="find-us-list">
                    <li><a href="">warisanify.id</a></li>
                    <li><a href="">warisanify.id</a></li>
                    <li><a href="">warisanify.id</a></li>
                    <li><a href="">warisanify.id</a></li>
                </ul>
            </div>

            <div class="contact-us">
                <h1>Contact Us</h1>
                <a href="">warisanify@gmail.com</a>
            </div>
        </div>
    </footer>
</body>

</html>