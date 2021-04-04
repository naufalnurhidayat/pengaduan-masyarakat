

<?php $__env->startSection('title', 'Laporan Pengaduan'); ?>

<?php $__env->startSection('content'); ?>

    <h1 class="mt-4">Laporan Pengaduan</h1>
    <?php if(session('status')): ?>
        <div class="alert alert-success mt-2">
        <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?> 
    <div class="my-3"><a target="_blank" href="<?php echo e(url('/admin/exportPDF')); ?>" class="btn btn-primary">Export PDF</a></div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Pelapor</th>
                            <th>NIK</th>
                            <th>Tanggal Pelaporan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($p->masyarakat->nama); ?></td>
                            <td><?php echo e($p->nik); ?></td>
                            <td><?php echo e($p->tgl_pengaduan); ?></td>
                            <?php if($p->status == '0'): ?>
                                <td>Tidak Ada</td>
                            <?php elseif($p->status == 'proses'): ?>
                                <td>Diproses</td>
                            <?php else: ?>
                                <td>Selesai</td>
                            <?php endif; ?>
                            <td>
                                <a href="<?php echo e(url('/admin/report/' . $p->id)); ?>" class="btn btn-primary">Detail</a>
                                <?php if($p->status == '0'): ?>
                                    <form action="<?php echo e(url('/admin/report/process/' . $p->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('patch'); ?>
                                        <button type="submit" class="btn btn-warning">Proses Laporan Ini</button>
                                    </form>
                                <?php endif; ?>
                                <form action="<?php echo e(url('/admin/report/' . $p->id)); ?>" method="POST" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/admin/report.blade.php ENDPATH**/ ?>