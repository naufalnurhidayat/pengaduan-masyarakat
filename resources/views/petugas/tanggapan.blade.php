@extends('templates.template-petugas')

@section('title', 'Tanggapan & Selesai')

@section('content')

<div class="row mt-3">
    <div class="col">
        <h3>Tanggapi Laporan & Selesai</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('/petugas/laporan/tanggapan/' . $pengaduan->id) }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="tanggapan">Tanggapi</label>
                <textarea class="form-control" id="tanggapan" name="tanggapan"></textarea>
            </div>
            <a href="{{ url('/petugas/laporan/' . $pengaduan->id) }}" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-primary d-inline">Submit</button>
        </form>
    </div>
</div>

@endsection