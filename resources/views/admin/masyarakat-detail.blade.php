@extends('templates.template-admin')

@section('title', 'Detail Masyarakat')

@section('content')

<div class="row mt-3">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>{{ $masyarakat->nama }}</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $masyarakat->nik }}</h5>
                <p class="card-text">{{ $masyarakat->email }}.</p>
                <p class="card-text">{{ $masyarakat->telp }}.</p>
                <a href="{{ url('/admin/masyarakatlist') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection