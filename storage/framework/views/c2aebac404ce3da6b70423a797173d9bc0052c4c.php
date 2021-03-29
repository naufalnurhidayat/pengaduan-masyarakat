

<?php $__env->startSection('title', 'Daftar Petugas'); ?>

<?php $__env->startSection('content'); ?>

    <h1 class="mt-4">Daftar Petugas</h1>
    <?php if(session('status')): ?>
        <div class="alert alert-success mt-2">
        <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>  
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $petugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($p->nama); ?></td>
                            <td><?php echo e($p->level); ?></td>
                            <td>
                                <a href="<?php echo e(url('/admin/petugaslist/' . $p->id)); ?>" class="btn btn-primary">Detail</a>
                                <a href="<?php echo e(url('/admin/petugaslist/edit/' . $p->id)); ?>" class="btn btn-warning">Ubah</a>
                                <form action="<?php echo e(url('/admin/petugaslist/' . $p->id)); ?>" method="POST" class="d-inline">
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
<?php echo $__env->make('templates.template-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/admin/petugas.blade.php ENDPATH**/ ?>