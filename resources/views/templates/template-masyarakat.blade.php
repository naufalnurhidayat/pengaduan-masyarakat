<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <title>Masyarakat | @yield('title')</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/home') }}">Pengaduan Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="{{ url('/history') }}">Riwayat Pengaduan</a>
          <a class="nav-link active" href="{{ url('/report') }}">Laporkan Masalah</a>
          <a class="nav-link active btn btn-success me-2" href="{{ url('/account') }}">Akun</a>
          <a class="nav-link active btn btn-danger" href="{{ url('/logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </nav>

    @yield('content')

  <script src="{{ asset('bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>