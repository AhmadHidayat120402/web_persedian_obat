<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apotek Amanah Karya Farma</title>

    <base href="<?php echo base_url('assets') ?>/">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <style>
        .disabled-div {
            pointer-events: none;
            opacity: 0.6;
            /* Opsional: Mengurangi opacity untuk menunjukkan bahwa elemen disable */
            cursor: not-allowed;
            /* Opsional: Mengganti cursor menjadi tanda bahwa elemen tidak dapat di-klik */
        }

        .sticky-li:hover {
            background-color: #000;
            padding: 5px;
            border-top: 1px solid #ccc;
            border-radius: 15px;
            font-weight: bold;
            color: #FFF;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div class="navbar-nav ml-auto">
                <p class="nav-item text-end sticky-li"> <?= 'Anda login sebagai ' . ucfirst(session('role')); ?></p>
            </div>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('admin/') ?>" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Apotek</span>
            </a>
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <!-- <li class="nav-item">
                                    <a href="." class="nav-link sticky-li">
                                        <p> <?= 'Anda login sebagai ' . ucfirst(session('role')); ?></p>
                                    </a>
                                </li> -->
                                <?php if (session('role') === 'admin' || session('role') == 'pemilik') : ?>
                                    <li class="nav-item">
                                        <a href="<?= base_url('admin/') ?>" class="nav-link">
                                            <p>Beranda</p>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (session('role') === 'admin') : ?>
                                    <li class="nav-item">
                                        <a href="<?= base_url('admin/stok-obat') ?>" class="nav-link">
                                            <p> Stok Obat</p>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <?php if (session('role') === 'admin') : ?>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/obat-masuk') ?>" class="nav-link">
                                    <p>
                                        Obat Masuk
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (session('role') === 'admin') : ?>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/obat-keluar') ?>" class="nav-link">
                                    <p>
                                        Obat Keluar
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (session('role') === 'admin' || session('role') == 'pemilik') : ?>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/laporan-obat-masuk') ?>" class="nav-link">
                                    <p>
                                        Laporan Obat Masuk
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (session('role') === 'admin' || session('role') == 'pemilik') : ?>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/laporan-obat-keluar') ?>" class="nav-link">
                                    <p>
                                        Laporan Obat Keluar
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/login/logout'); ?>" class="nav-link">
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>

                <!-- Sidebar toggle button -->

                <!-- /.sidebar-toggle -->
                <!-- /.sidebar-menu -->
            </div>

            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 font-weight-bold">APOTEK AMANAH KARYA FARMA</h1>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.content-header -->
            <?= $this->renderSection('content') ?>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <!-- <script src="plugins/sparklines/sparkline.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="dist/js/pages/dashboard.js"></script> -->
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Toggle sidebar
            $('#sidebarToggle').on('click', function() {
                $('body').toggleClass('sidebar-collapse');
            });
        });
    </script>
    <?= $this->renderSection('script') ?>

</body>

</html>