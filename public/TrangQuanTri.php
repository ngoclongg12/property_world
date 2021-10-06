<?php

session_start();

$_SESSION["ketNoi"] = include_once "../connecting/Ketnoi.php";


if (!$_SESSION["hoTen"]) {
    header("location: ../login/Dangnhap.php");

}

if($_SESSION["quyen"] == 1){
    header("location: ../public/TrangChu.php");
}

$content = "";

switch ($_GET['Admin']) {

    case "manage_main":
        include_once "../Admin_layout/manage_main.php";
        break;

    case "product_add":
        include_once "../Admin_layout/Product/product_add.php";
        break;

    case "product_show":
        include_once "../Admin_layout/Product/product_show.php";
        break;

    case "product_fix":
        include_once "../Admin_layout/Product/product_fix.php";
        break;

    case "category_show":
        include_once "../Admin_layout/Category/category_show.php";
        break;

    case "category_add":
        include_once "../Admin_layout/Category/category_add.php";
        break;

    case "category_fix":
        include_once "../Admin_layout/Category/category_fix.php";
        break;

    default:
        include_once "../Admin_layout/manage_main.php";
        break;

        // case "product_del":
        //     include_once "../Admin_layout/Product/product_del.php";
        //     break;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Quản trị</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../framework/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../framework/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../framework/dist/css/adminlte.min.css">

    <?php
    include_once "../connecting/head.php"
    ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../framework/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php
        include_once "../Admin_layout/Admin_navbar/Navbar.php";
        ?>

        <!-- Main Sidebar Container -->
        <?php
        include_once "../Admin_layout/Admin_navbar/Sidebar.php";
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="m-0">Người vận hành: <?= $_SESSION['hoTen'] ?>,</h3>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Trang quản trị</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <?php
            echo $content;
            ?>

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 </strong>
            Bản quyền thuộc về <b><a href="../public/TrangChu.php">Thế giới BDS</a>.</b>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../framework/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../framework/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../framework/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../framework/dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="../framework/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="../framework/plugins/raphael/raphael.min.js"></script>
    <script src="../framework/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="../framework/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="../framework/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../framework/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../framework/dist/js/pages/dashboard2.js"></script>

    <?php
    include_once "../connecting/script.php"
    ?>
</body>

</html>