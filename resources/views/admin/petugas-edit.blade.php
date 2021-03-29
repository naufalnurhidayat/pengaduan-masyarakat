@extends('templates/template-auth')

@section('title', 'Ubah Data Petugas')

@section('content')

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ubah Data Petugas</h3></div>
                                    <div class="card-body">
                                        <form action="{{ url('/admin/petugaslist/edit/' . $petugas->id) }}" method="POST">
                                        @csrf
                                        @method('patch')
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="nama">Nama</label>
                                                        <input class="form-control py-4 @error('nama') is-invalid @enderror" id="nama" type="text" placeholder="Nama" name="nama" required value="{{ $petugas->nama }}"/>
                                                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="level" class="small mb-1">Level</label>
                                                        <select class="form-control @error('level') is-invalid @enderror" id="level" name="level" required>
                                                        <option value="">--Pilih Level--</option>
                                                        @if($petugas->level == 'Admin')
                                                        <option value="Admin" selected>Admin</option>
                                                        <option value="Petugas">Petugas</option>
                                                        @else
                                                        <option value="Admin">Admin</option>
                                                        <option value="Petugas" selected>Petugas</option>
                                                        @endif
                                                        </select>
                                                        @error('level') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="email">Email</label>
                                                        <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email" required value="{{ $petugas->email }}" />
                                                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="telp">Telpon</label>
                                                        <input class="form-control py-4 @error('telp') is-invalid @enderror" id="telp" type="text" placeholder="Telpon" name="telp" required value="{{ $petugas->telp }}" />
                                                        @error('telp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Ubah</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ url('/admin/petugaslist') }}">Kembali</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
@endsection