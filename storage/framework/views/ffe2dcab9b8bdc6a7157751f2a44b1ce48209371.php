

<?php $__env->startSection('title', 'Laporan Pengaduan'); ?>

<?php $__env->startSection('content'); ?>

    <h1 class="mt-4">Laporan Pengaduan</h1>
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
    <div class="my-3">
        <a target="_blank" href="<?php echo e(url('/admin/exportpdf')); ?>" class="btn btn-primary">Export PDF</a>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Filter Export</button>
    </div>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filter Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form target="_blank" action="<?php echo e(url('/admin/exportpdf')); ?>" method="POST">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="tgl_awal">Tanggal Awal</label>
                <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
            </div>
            <div class="form-group">
                <label for="tgl_akhir">Tanggal Akhir</label>
                <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="">--Pilih Status--</option>
                    <option value="pending">Pending</option>
                    <option value="proses">Diproses</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Filter</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/admin/report.blade.php ENDPATH**/ ?>