

<?php $__env->startSection('title', 'Riwayat Pengaduan'); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
    <div class="alert alert-success mt-2">
    <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>
<?php if(session('danger')): ?>
    <div class="alert alert-danger mt-2">
    <?php echo e(session('danger')); ?>

    </div>
<?php endif; ?>

<div class="container">
    <div class="row mt-4">
        <div class="col"><h3>Riwayat Laporan</h3></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Tanggapan</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($report->tgl_pengaduan); ?></td>
                        <td><?php echo e($report->isi_laporan); ?></td>
                        <?php if( $report->status == '0' ): ?>
                            <td>Belum Diproses</td>
                        <?php elseif( $report->status == 'proses' ): ?>
                            <td>Diproses</td>
                        <?php else: ?>
                            <td>Selesai & Telah Ditanggapi</td>
                        <?php endif; ?>
                        <td><img src="<?php echo e(asset('img/report/' . $report->foto)); ?>" alt="Laporan" width="100"></td>
                        <?php if( $report->status == 'selesai' ): ?>
                            <td><a class="btn btn-primary" href="<?php echo e(url('/report/respond/' . $report->id )); ?>">Lihat Tanggapan</a></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/masyarakat/history.blade.php ENDPATH**/ ?>