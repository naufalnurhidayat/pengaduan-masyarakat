

<?php $__env->startSection('title', 'Detail Masyarakat'); ?>

<?php $__env->startSection('content'); ?>

<div class="row mt-3">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3><?php echo e($masyarakat->nama); ?></h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo e($masyarakat->nik); ?></h5>
                <p class="card-text"><?php echo e($masyarakat->email); ?>.</p>
                <p class="card-text"><?php echo e($masyarakat->telp); ?>.</p>
                <a href="<?php echo e(url('/admin/masyarakatlist')); ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/admin/masyarakat-detail.blade.php ENDPATH**/ ?>