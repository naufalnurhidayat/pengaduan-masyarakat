@extends('templates.template-admin')

@section('title', 'Laporan Pengaduan')

@section('content')

    <h1 class="mt-4">Laporan Pengaduan</h1>
    @if(session('status'))
        <div class="alert alert-success mt-2">
        {{ session('status') }}
        </div>
    @endif  
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
                        @foreach($pengaduan as $p)
                        <tr>
                            <td>{{ $p->masyarakat->nama }}</td>
                            <td>{{ $p->nik }}</td>
                            <td>{{ $p->tgl_pengaduan }}</td>
                            @if($p->status == '0')
                                <td>Tidak Ada</td>
                            @elseif($p->status == 'proses')
                                <td>Diproses</td>
                            @else
                                <td>Selesai</td>
                            @endif
                            <td>
                                <a href="{{ url('/admin/report/' . $p->id) }}" class="btn btn-primary">Detail</a>
                                @if($p->status == '0')
                                    <form action="{{ url('/admin/report/process/' . $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-warning">Proses Laporan Ini</button>
                                    </form>
                                @endif
                                <form action="{{ url('/admin/report/' . $p->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection