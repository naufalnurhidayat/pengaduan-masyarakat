@extends('templates/template-petugas')

@section('title', 'Home')

@section('content')

<div class="row">
    <div class="col-md-6">
        <h1 class="mt-4">Dashboard</h1>
    </div>
</div>
<div class="row mt-3">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body"><h4>Jumlah Masyarakat</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6>{{ count($masyarakat) }} Orang</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body"><h4>Laporan Masuk</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6>{{ count($laporan) }}</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-info text-white mb-4">
            <div class="card-body"><h4>Proses</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6>{{ count($proses) }}</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body"><h4>Ditanggapi</h4></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <h6>{{ count($tanggapan) }}</h6>
            </div>
        </div>
    </div>
</div>

@endsection