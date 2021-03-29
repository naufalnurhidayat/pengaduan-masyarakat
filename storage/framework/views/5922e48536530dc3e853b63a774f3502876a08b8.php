

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-6">
        <h1 class="mt-4">Dashboard</h1>
    </div>
</div>
<div class="row mt-3">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body"><h4>Jumlah Petugas</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6><?php echo e(count($petugas)); ?> Orang</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body"><h4>Jumlah Masyarakat</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6><?php echo e(count($masyarakat)); ?> Orang</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body"><h4>Laporan Masuk</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6><?php echo e(count($pengaduan)); ?></h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body"><h4>Proses</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6><?php echo e(count($proses)); ?></h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body"><h4>Ditanggapi</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6><?php echo e(count($tanggapan)); ?></h6>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/template-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/admin/home.blade.php ENDPATH**/ ?>