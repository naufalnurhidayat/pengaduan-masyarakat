@extends('templates/template-masyarakat')

@section('title', 'Laporkan Masalah')

@section('content')

<div class="container">
  <div class="row mt-2">
    <h2>Form Pengaduan</h2>
    <div class="col-md-6">
      <form action="{{ url('/report') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="isi_laporan" class="form-label">Tulis Laporan Anda</label>
          <textarea class="form-control @error('isi_laporan') is-invalid @enderror" id="isi_laporan" name="isi_laporan" required>{{ old('isi_laporan') }}</textarea>
          @error('isi_laporan') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto" required>
          <label class="input-group-text" for="foto">Upload Foto</label>
          @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection