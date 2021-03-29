@extends('templates.template-admin')

@section('title', 'Detail Petugas')

@section('content')

<div class="row mt-3">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>{{ $petugas->level }}</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $petugas->nama }}</h5>
                <p class="card-text">{{ $petugas->email }}.</p>
                <p class="card-text">{{ $petugas->telp }}.</p>
                <a href="{{ url('/admin/petugaslist') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection