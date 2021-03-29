

<?php $__env->startSection('title', 'My Profile'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <?php if(session('status')): ?>
        <div class="alert alert-success mt-2">
        <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-5">
            <div class="card">
            <div class="card-header bg-warning">
                <h3><?php echo e(auth()->user()->nama); ?></h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo e(auth()->user()->username); ?></h5>
                <p class="card-text"><?php echo e(auth()->user()->email); ?></p>
                <p class="card-text"><?php echo e(auth()->user()->telp); ?></p>
                <a href="<?php echo e(url('/home')); ?>" class="btn btn-primary">Kembali</a>
                <a href="<?php echo e(url('/account/edit')); ?>" class="btn btn-success">Ubah Data</a>
                <form action="<?php echo e(url('account/delete')); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Akun anda akan dihapus secara permanen, Yakin ingin hapus akun ini?')">Hapus Akun!</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/masyarakat/account.blade.php ENDPATH**/ ?>