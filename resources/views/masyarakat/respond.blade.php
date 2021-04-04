@extends('templates.template-masyarakat')

@section('title', 'Tanggapan')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Tanggapan</h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <img src="{{ asset('img/report/' . $respond->pengaduan->foto ) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    @if($respond->pengaduan->status == 'selesai')
                        <h5 class="card-title">Selesai & Telah Ditanggapi</h5>
                    @else
                        <h5 class="card-title">Belum Ditanggapi</h5>
                    @endif
                    <p class="card-text">{{ $respond->tanggapan }}</p>
                    <span class="d-block">Petugas yang menanggapi: <b>{{ $respond->petugas->nama }}</b></span>
                    <span class="d-inline-block">Ditanggapi pada: <b>{{ $respond->tgl_tanggapan }}</b></span>
                    <a href="{{ url('/history') }}" class="btn btn-primary d-block mt-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection