<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('bootstrap5/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('style/style.css')); ?>">

    <title>Masyarakat | <?php echo $__env->yieldContent('title'); ?></title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Pengaduan Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="#jumbotron">Beranda</a>
          <a class="nav-link active" href="#aboutus">Tentang Program</a>
          <a class="nav-link active" href="#ourservice">Pelayanan Kami</a>
          <a class="nav-link active" href="#gallery">Contoh Permasalahan</a>
          <a class="nav-link active" href="<?php echo e(url('/report')); ?>">Laporkan Masalah</a>
          <a class="nav-link active btn btn-success" href="<?php echo e(url('/login')); ?>">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <?php echo $__env->yieldContent('content'); ?>

  <script src="<?php echo e(asset('bootstrap5/js/bootstrap.bundle.min.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/templates/template-landing-masyarakat.blade.php ENDPATH**/ ?>