

<?php $__env->startSection('title', 'My Profile'); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
    <div class="alert alert-success mt-2">
    <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<div class="row mt-3">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3><?php echo e(auth()->user()->nama); ?></h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo e(auth()->user()->username); ?></h5>
                <p class="card-text"><?php echo e(auth()->user()->email); ?>.</p>
                <p class="card-text"><?php echo e(auth()->user()->telp); ?>.</p>
                <a href="<?php echo e(url('/petugas')); ?>" class="btn btn-primary">Kembali</a>
                <a href="<?php echo e(url('/petugas/edit')); ?>" class="btn btn-warning">Ubah Data</a>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/petugas/profile.blade.php ENDPATH**/ ?>