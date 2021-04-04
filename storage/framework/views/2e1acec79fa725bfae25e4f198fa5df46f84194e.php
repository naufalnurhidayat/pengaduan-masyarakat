

<?php $__env->startSection('title', 'Petunjuk Penggunaan'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row userguide">
        <div class="col">
            <h2>Petunjuk Penggunaan Website</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Silahkan melakukan Login <a href="<?php echo e(url('/login')); ?>" class="text-white">disini</a></li>
                <li class="list-group-item">Jika tidak memiliki akun, silahkan registrasi <a href="<?php echo e(url('/regist')); ?>">disini</a></li>
                <li class="list-group-item">Setelah anda login, anda akan diarahkan ke halaman pengaduan. Lalu isikan laporan yang ingin anda sampaikan</li>
                <li class="list-group-item">Setelah anda menyampaikan laporan, anda akan diarahkan ke halaman home</li>
                <li class="list-group-item">Anda bisa melihat riwayat laporan anda pada bagian atas</li>
                <li class="list-group-item">Anda bisa menyampaikan laporan anda yang berikutnya <a href="<?php echo e(url('/report')); ?>">disni</a></li>
            </ul>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-landing-masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/masyarakat/guide.blade.php ENDPATH**/ ?>