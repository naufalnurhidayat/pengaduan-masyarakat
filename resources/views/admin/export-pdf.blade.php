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
        @foreach($pengaduan as $p)
        <tr>
            <td style="text-align: center;">{{ $loop->iteration }}</td>
            <td>{{ $p->masyarakat->nama }}</td>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->tgl_pengaduan }}</td>
            <td>{{ $p->isi_laporan }}</td>
            @if($p->status == '0')
                <td>Pending</td>
            @elseif($p->status == 'proses')
                <td>Diproses</td>
            @else
                <td>Selesai</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>