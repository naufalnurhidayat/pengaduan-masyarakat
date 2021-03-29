

<?php $__env->startSection('title', 'Tanggapan & Selesai'); ?>

<?php $__env->startSection('content'); ?>

<div class="row mt-3">
    <div class="col">
        <h3>Tanggapi Laporan & Selesai</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="<?php echo e(url('/petugas/laporan/tanggapan/' . $pengaduan->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="tanggapan">Tanggapi</label>
                <textarea class="form-control" id="tanggapan" name="tanggapan"></textarea>
            </div>
            <a href="<?php echo e(url('/petugas/laporan/' . $pengaduan->id)); ?>" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-primary d-inline">Submit</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-petugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/petugas/tanggapan.blade.php ENDPATH**/ ?>