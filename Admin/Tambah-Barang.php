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
<!-- End Head -->

<!-- Body -->

<body>
    <!-- Header (Topbar) -->
    <?php include 'layout/header.php' ?>
    <!-- End Header (Topbar) -->

    <!-- Main -->
    <main class="u-main">
        <!-- Sidebar -->
        <?php include 'layout/sidebar.php' ?>
        <!-- End Sidebar -->

        <!-- Content -->
        <div class="u-content">
            <!-- Content Body -->
            <div class="u-body">


                <div class="u-body">
                    <form action="../Routes/Route.php?aksi=tambah-barang" method=POST>
                        <div class="card-body pt-0">
                            <!-- Text -->
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Gambar</label>
                                    <input type="text" name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Detail Barang</label>
                                    <input type="text" name="detail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <select name="kategori" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Kategori</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- End Content Body -->

            <!-- Footer -->
            <?php include 'layout/footer.php' ?>
            <!-- End Footer -->
        </div>
        <!-- End Content -->
    </main>
    <!-- End Main -->

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
</body>
<!-- End Body -->

</html>