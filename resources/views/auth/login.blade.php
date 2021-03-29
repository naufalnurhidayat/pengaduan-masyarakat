@extends('templates/template-auth')

@section('title', 'Login')

@section('content')

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                            @if(session('danger'))
                                <div class="alert alert-danger mt-2">
                                {{ session('danger') }}
                                </div>
                            @endif
                            @if(session('status'))
                                <div class="alert alert-success mt-2">
                                {{ session('status') }}
                                </div>
                            @endif
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Masuk</h3></div>
                                    <div class="card-body">
                                        <form action="{{ url('/login') }}" method="POST">
                                        @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="username">Username</label>
                                                <input class="form-control py-4 @error('username') is-invalid @enderror" id="username" type="text" placeholder="Username" name="username" required value="{{ old('username') }}"/>
                                                @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4 @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password" required value="{{ old('password') }}" />
                                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit">Masuk</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ url('/regist') }}">Registrasi Masyarakat</a></div>
                                        <div class="small"><a href="{{ url('/') }}">Kembali ke Halaman Utama</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
       
@endsection