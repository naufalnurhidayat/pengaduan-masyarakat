@extends('templates.template-petugas')

@section('title', 'My Profile')

@section('content')

@if(session('status'))
    <div class="alert alert-success mt-2">
    {{ session('status') }}
    </div>
@endif

<div class="row mt-3">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>{{ auth()->user()->nama }}</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ auth()->user()->username }}</h5>
                <p class="card-text">{{ auth()->user()->email }}.</p>
                <p class="card-text">{{ auth()->user()->telp }}.</p>
                <a href="{{ url('/petugas') }}" class="btn btn-primary">Kembali</a>
                <a href="{{ url('/petugas/edit') }}" class="btn btn-warning">Ubah Data</a>
            </div>
        </div>
    </div>
</div>

@endsection