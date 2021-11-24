<?php
require_once '../Config/ClassDatabase.php';
require_once '../App/ClassKategori.php';

$edit = new Kategori();
$id = $_GET['id'];
$result = $edit->showUpdate($id);

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
                <form action="../Routes/Route.php?aksi=update" method=POST>
                    <div class="card-body pt-0">
                        <!-- Text -->
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $result['id'] ?>">

                            <label for="exampleInputText1">Nama Kategori</label>
                            <input id="exampleInputText1" class="form-control" type="text" name="nama_kategori" value="<?php echo $result['nama_kategori'] ?>" placeholder="Placeholder">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

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