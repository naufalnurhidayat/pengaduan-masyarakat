@extends('templates.template-admin')

@section('title', 'Detail Laporan')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h3>Detail Laporan</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md8">
            <div class="card">
                <img src="{{ asset('img/report/' . $pengaduan->foto ) }}" class="card-img-top" alt="Pengaduan">
                <div class="card-body">
                    @if($pengaduan->status == '0')
                        <h5 class="card-title">Belum Diproses</h5>
                    @elseif($pengaduan->status == 'proses')
                        <h5 class="card-title">Diproses</h5>
                    @else
                        <h5 class="card-title">Selesai</h5>
                    @endif
                    <p class="card-text">{{ $pengaduan->isi_laporan }}.</p>
                    <span class="card-text d-block">Dilaporkan oleh: {{ $pengaduan->masyarakat->nama }}.</span>
                    <span class="card-text d-block">Pada: {{ $pengaduan->tgl_pengaduan }}.</span>
                    <div class="mt-2">
                        <a href="{{ url('/admin/report') }}" class="btn btn-primary">Kembali</a>
                        @if($pengaduan->status == '0')
                            <form action="{{ url('/admin/report/process/' . $pengaduan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-warning">Proses Laporan Ini</button>
                            </form>
                            <a href="{{ url('/admin/report/respond/' . $pengaduan->id ) }}" class="btn btn-success">Tanggapi dan Selesai</a>
                        @elseif($pengaduan->status == 'proses')
                            <a href="{{ url('/admin/report/respond/' . $pengaduan->id ) }}" class="btn btn-success">Tanggapi dan Selesai</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection