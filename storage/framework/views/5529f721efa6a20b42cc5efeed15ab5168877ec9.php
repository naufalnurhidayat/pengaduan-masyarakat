

<?php $__env->startSection('title', 'Daftar Masyarakat'); ?>

<?php $__env->startSection('content'); ?>

    <h1 class="mt-4">Daftar Masyarakat</h1>  
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $masyarakat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($m->nik); ?></td>
                            <td><?php echo e($m->nama); ?></td>
                            <td>
                                <a href="<?php echo e(url('/admin/masyarakatlist/' . $m->id)); ?>" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/admin/masyarakat.blade.php ENDPATH**/ ?>