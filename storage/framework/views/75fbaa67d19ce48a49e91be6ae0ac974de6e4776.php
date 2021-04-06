<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengaduan Masyarakat</title>
</head>
<body>
<h1 style="text-align: center;">Laporan Pengadun Masyarakat</h1>

<table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelapor</th>
            <th>NIK</th>
            <th>Tanggal Pelaporan</th>
            <th>Isi Laporan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td style="text-align: center;"><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($p->masyarakat->nama); ?></td>
            <td><?php echo e($p->nik); ?></td>
            <td><?php echo e($p->tgl_pengaduan); ?></td>
            <td><?php echo e($p->isi_laporan); ?></td>
            <?php if($p->status == '0'): ?>
                <td>Pending</td>
            <?php elseif($p->status == 'proses'): ?>
                <td>Diproses</td>
            <?php else: ?>
                <td>Selesai</td>
            <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\pengaduanMasyarakat\resources\views/admin/export-pdf.blade.php ENDPATH**/ ?>