<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Petugas | <?php echo $__env->yieldContent('title'); ?></title>
        <link href="<?php echo e(asset('sbadmin2/dist/css/styles.css')); ?>" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo e(url('/admin')); ?>">Pengaduan Masyarakat</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 d-flex flex-row-reverse" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Petugas</div>
                            <a class="nav-link" href="<?php echo e(url('/petugas')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="<?php echo e(url('/petugas/laporan')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation-circle"></i></div>
                                Laporan Masyarakat
                            </a>
                            <a class="nav-link" href="<?php echo e(url('/petugas/profile')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                My Profile
                            </a>
                            <a class="nav-link" href="<?php echo e(url('/logout')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('sbadmin2/dist/js/scripts.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('sbadmin2/dist/assets/demo/chart-area-demo.js')); ?>"></script>
        <script src="<?php echo e(asset('sbadmin2/dist/assets/demo/chart-bar-demo.js')); ?>"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo e(asset('sbadmin2/dist/assets/demo/datatables-demo.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/templates/template-petugas.blade.php ENDPATH**/ ?>