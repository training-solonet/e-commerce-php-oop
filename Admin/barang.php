<?php
require_once('../App/ClassBarang.php');
require_once('../Config/ClassDatabase.php');

$tampil = new Barang();
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Dashboard | WARISANIFY</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">


    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="../Assets/awesome/assets/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../Assets/awesome/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="../Assets/awesome/assets/css/theme.css">
</head>
<div class="u-body">
    <h1 class="h2 mb-2">Tables</h1>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tables</li>
        </ol>
    </nav>
    <!-- End Breadcrumb -->

    <!-- Card -->
    <div class="card mb-5">
        <!-- Card Header -->
        <header class="card-header">
            <h2 class="h4 card-header-title">Basic table</h2>
        </header>
        <!-- End Card Header -->

        <!-- Crad Body -->
        <div class="card-body pt-0">
            <a href="Tambah-Barang.php">INPUT BARANG</a>
            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>Id Barang</th> -->
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Detail Produk</th>
                            <th>Kategori</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($tampil->show() as $row) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $row['nama_barang'] ?></td>
                                <td><?= "Rp. " . $row['harga'] ?></td>
                                <td><?= $row['gambar'] ?></td>
                                <td><?= $row['detail_produk'] ?></td>
                                <td><?= $row['id_kategori'] ?></td>
                                <td>
                                    <a href="Edit-Barang.php?id=<?php echo $row['id'] ?>&&aksi=edit">edit</a>
                                    <a href="../Routes/Route.php?id=<?php echo $row['id'] ?>&&aksi=hapus">hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
            <!-- End Table -->
            <!-- Global Vendor -->
            <script src="../Assets/awesome/assets/vendor/jquery/dist/jquery.min.js"></script>
            <script src="../Assets/awesome/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
            <script src="../Assets/awesome/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
            <script src="../Assets/awesome/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Plugins -->
            <script src="../Assets/awesome/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../Assets/awesome/assets/vendor/chart.js/dist/Chart.min.js"></script>
            <script src="../Assets/awesome/assets/vendor/chartjs-plugin-style/dist/chartjs-plugin-style.min.js"></script>

            <!-- Initialization  -->
            <script src="../Assets/awesome/assets/js/sidebar-nav.js"></script>
            <script src="../Assets/awesome/assets/js/main.js"></script>

            <script src="../Assets/awesome/assets/js/charts/area-chart.js"></script>
            <script src="../Assets/awesome/assets/js/charts/area-chart-small.js"></script>
            <script src="../Assets/awesome/assets/js/charts/doughnut-chart.js"></script>