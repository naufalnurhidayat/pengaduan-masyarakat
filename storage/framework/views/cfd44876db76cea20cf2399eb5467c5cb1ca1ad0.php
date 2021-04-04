

<?php $__env->startSection('title', 'Tanggapan'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Tanggapan</h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <img src="<?php echo e(asset('img/report/' . $respond->pengaduan->foto )); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <?php if($respond->pengaduan->status == 'selesai'): ?>
                        <h5 class="card-title">Selesai & Telah Ditanggapi</h5>
                    <?php else: ?>
                        <h5 class="card-title">Belum Ditanggapi</h5>
                    <?php endif; ?>
                    <p class="card-text"><?php echo e($respond->tanggapan); ?></p>
                    <span class="d-block">Petugas yang menanggapi: <b><?php echo e($respond->petugas->nama); ?></b></span>
                    <span class="d-inline-block">Ditanggapi pada: <b><?php echo e($respond->tgl_tanggapan); ?></b></span>
                    <a href="<?php echo e(url('/history')); ?>" class="btn btn-primary d-block mt-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/masyarakat/respond.blade.php ENDPATH**/ ?>