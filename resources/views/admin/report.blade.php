@extends('templates.template-admin')

@section('title', 'Laporan Pengaduan')

@section('content')

    <h1 class="mt-4">Laporan Pengaduan</h1>
    @if(session('status'))
        <div class="alert alert-success mt-2">
        {{ session('status') }}
        </div>
    @endif 
    <div class="my-3">
        <a target="_blank" href="{{ url('/admin/exportPDF') }}" class="btn btn-primary">Export PDF</a>
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
        <form action="{{ url('/admin/exportPDF') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="tgl_awal">Tanggal Awal</label>
                <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
            </div>
            <div class="form-group">
                <label for="tgl_akhir">Tanggal Akhir</label>
                <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
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
@endsection