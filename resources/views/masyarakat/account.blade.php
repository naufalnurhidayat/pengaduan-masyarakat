@extends('templates.template-masyarakat')

@section('title', 'My Profile')

@section('content')

<div class="container">
    @if(session('status'))
        <div class="alert alert-success mt-2">
        {{ session('status') }}
        </div>
    @endif
    <div class="row mt-3">
        <div class="col-md-5">
            <div class="card">
            <div class="card-header bg-warning">
                <h3>{{ auth()->user()->nama }}</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ auth()->user()->username }}</h5>
                <p class="card-text">{{ auth()->user()->email }}</p>
                <p class="card-text">{{ auth()->user()->telp }}</p>
                <a href="{{ url('/home') }}" class="btn btn-primary">Kembali</a>
                <a href="{{ url('/account/edit') }}" class="btn btn-success">Ubah Data</a>
                <form action="{{ url('account/delete') }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Akun anda akan dihapus secara permanen, Yakin ingin hapus akun ini?')">Hapus Akun!</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection