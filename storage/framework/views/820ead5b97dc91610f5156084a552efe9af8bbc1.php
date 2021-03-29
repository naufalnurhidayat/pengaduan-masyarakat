

<?php $__env->startSection('title', 'Detail Laporan'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h3>Detail Laporan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md8">
            <div class="card">
                <img src="<?php echo e(asset('img/report/' . $pengaduan->foto )); ?>" class="card-img-top" alt="Pengaduan">
                <div class="card-body">
                    <?php if($pengaduan->status == '0'): ?>
                        <h5 class="card-title">Belum Diproses</h5>
                    <?php elseif($pengaduan->status == 'proses'): ?>
                        <h5 class="card-title">Diproses</h5>
                    <?php else: ?>
                        <h5 class="card-title">Selesai</h5>
                    <?php endif; ?>
                    <p class="card-text"><?php echo e($pengaduan->isi_laporan); ?>.</p>
                    <span class="card-text d-block">Dilaporkan oleh: <?php echo e($pengaduan->masyarakat->nama); ?>.</span>
                    <span class="card-text d-block">Pada: <?php echo e($pengaduan->tgl_pengaduan); ?>.</span>
                    <div class="mt-2">
                        <a href="<?php echo e(url('/petugas/laporan')); ?>" class="btn btn-primary">Kembali</a>
                        <?php if($pengaduan->status == '0'): ?>
                            <form action="<?php echo e(url('/petugas/laporan/proses/' . $pengaduan->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('patch'); ?>
                                <button type="submit" class="btn btn-warning">Proses Laporan Ini</button>
                            </form>
                            <a href="<?php echo e(url('/petugas/laporan/tanggapan/' . $pengaduan->id )); ?>" class="btn btn-success">Tanggapi dan Selesai</a>
                        <?php elseif($pengaduan->status == 'proses'): ?>
                            <a href="<?php echo e(url('/petugas/laporan/tanggapan/' . $pengaduan->id )); ?>" class="btn btn-success">Tanggapi dan Selesai</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/petugas/detail-laporan.blade.php ENDPATH**/ ?>