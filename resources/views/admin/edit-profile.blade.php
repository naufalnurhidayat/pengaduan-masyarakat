@extends('templates/template-auth')

@section('title', 'Ubah Data')

@section('content')

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ubah Data</h3></div>
                                    <div class="card-body">
                                        <form action="{{ url('/admin/edit') }}" method="POST">
                                        @csrf
                                        @method('patch')
                                            <div class="form-row">
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="nama">Nama</label>
                                                        <input class="form-control py-4 @error('nama') is-invalid @enderror" id="nama" type="text" placeholder="Nama" name="nama" required value="{{ auth()->user()->nama }}"/>
                                                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="email">Email</label>
                                                        <input class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email" required value="{{ auth()->user()->email }}" />
                                                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="telp">Telpon</label>
                                                        <input class="form-control py-4 @error('telp') is-invalid @enderror" id="telp" type="text" placeholder="Telpon" name="telp" required value="{{ auth()->user()->telp }}" />
                                                        @error('telp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Ubah Data</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ url('/admin/profile') }}">Kembali</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        
@endsection