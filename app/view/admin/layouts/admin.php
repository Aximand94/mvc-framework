<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=ADMIN_VIEW?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?=ADMIN_VIEW?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=ADMIN_VIEW?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?=ADMIN_VIEW?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=ADMIN_VIEW?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=ADMIN_VIEW?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=ADMIN_VIEW?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=ADMIN_VIEW?>plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <!-- admin dashboard -->
    <div class="wrapper">

        <!-- navbar -->
        <?php require('includes/navbar.php')?>

        <!-- admin content -->
        <?=$content?>

    </div>



    <!-- jQuery -->
    <script src="<?=ADMIN_VIEW?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?=ADMIN_VIEW?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?=ADMIN_VIEW?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?=ADMIN_VIEW?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?=ADMIN_VIEW?>plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?=ADMIN_VIEW?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?=ADMIN_VIEW?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=ADMIN_VIEW?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?=ADMIN_VIEW?>plugins/moment/moment.min.js"></script>
    <script src="<?=ADMIN_VIEW?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?=ADMIN_VIEW?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?=ADMIN_VIEW?>plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?=ADMIN_VIEW?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=ADMIN_VIEW?>dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=ADMIN_VIEW?>dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?=ADMIN_VIEW?>dist/js/pages/dashboard.js"></script>
</body>
</html>
