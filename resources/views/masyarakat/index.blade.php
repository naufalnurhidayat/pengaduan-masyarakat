@extends('templates/template-landing-masyarakat')

@section('title', 'Home')

@section('content')

<!-- Hero Banner -->
<section id="jumbotron" class="jumbotron text-white">
    <div class="container">
    <h1 class="display-4">Selamat datang di website Pelaporan Masyarakat</h1>
    <p class="lead">Silahkan klik <b>"Laporkan Masalah"</b> jika anda ingin melaporkan permasalahan lingkungan.</p>
    <a class="btn btn-danger btn-lg" href="{{ url('/report') }}" role="button">Laporkan Masalah</a>
    <a class="btn btn-info ms-2 btn-lg text-white" href="{{ url('/userguide') }}" role="button">Petunjuk Penggunaan</a>
    </div>
</section>
<!-- End Hero Banner -->

<!-- About -->
<section id="aboutus">
    <div class="container">
        <div class="row text-center">
            <div class="col-md">    
                <h2>Tentang Kami</h2>
            </div>
        </div>
        <div class="row mt-3 text-center justify-content-center">
            <div class="col-md-5">
                <p>Kami adalah satuan petugas yang menangani permasalahan sosial secara online. Contoh-contoh permasalahan tersebut telah kami lampirkan pada bagian "Contoh Permasalahan". Jika anda menenukan permasalahan lebih dari itu, silahkan laporkan kepada kami.</p>
            </div>
            <div class="col-md-5">
                <p>Laporan yang anda ajukan merupakan bahan yang akan kami peroses dan selesaikan. Mohon laporkan segera jika anda menemukan permasalahan sosial di sekitar anda. Kami akan segera merespon laporan anda, Terima Kasih atas kerja samanya.</p>
            </div>
        </div>
    </div>
</section>
<!-- End About -->

<!-- Our Service -->
    <section id="ourservice">
        <div class="container">
            <div class="row text-center text-white mb-3">
                <div class="col-md">
                    <h2>Pelayanan Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/ourservices/menerimalaporanmasyarakat.png') }}" class="card-img-top" alt="Menerima Laporan Masyarakat">
                        <div class="card-body">
                            <p class="card-text">Menerima Laporan Masyarakat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/ourservices/menanggapilaporanmasyarakat.jpg') }}" class="card-img-top" alt="Menanggapi Laporan Masyarakat">
                        <div class="card-body">
                            <p class="card-text">Menanggapi Laporan Masyarakat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/ourservices/menyelesaikanlaporan.jpg') }}" class="card-img-top" alt="Menyelesaikan Laporan Masyarakat">
                        <div class="card-body">
                            <p class="card-text">Menyelesaikan Laporan Masyarakat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Our Service -->

<!-- Gallery Problems -->
    <section id="gallery">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col-md">
                    <h2>Contoh Permasalahan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/gallery problems/jalanrusak.jpg') }}" class="card-img-top" alt="Jalan Rusak">
                        <div class="card-body">
                            <p class="card-text">Jalan Rusak</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/gallery problems/fasilitasumumrusak.jpeg') }}" class="card-img-top" alt="Fasilitas Umum Rusak">
                        <div class="card-body">
                            <p class="card-text">Fasilitas Umum Rusak</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/gallery problems/jembatanputus.jpg') }}" class="card-img-top" alt="Jembatan Putus">
                        <div class="card-body">
                            <p class="card-text">Jembatan Putus</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/gallery problems/tempatibadahrusak.jpg') }}" class="card-img-top" alt="Tempat Ibadah Rusak">
                        <div class="card-body">
                            <p class="card-text">Tempat Ibadah Rusak</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/gallery problems/tamanrusak.jpg') }}" class="card-img-top" alt="Taman Rusak">
                        <div class="card-body">
                            <p class="card-text">Taman Rusak</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('img/gallery problems/permasalahansampah.jpg') }}" class="card-img-top" alt="Permasalahan Sampah">
                        <div class="card-body">
                            <p class="card-text">Permasalahan Sampah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Gallery P -->

<!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="row justify-content-center text-center text-white">
                <div class="col-md-5">
                    <p class="fw-blod">Created By: <a href="http://www.instagram.com/naufalnurh" class="text-white fw-blod">Naufal Nur Hidayat</a></p>
                </div>
            </div>
        </div>
    </footer>
<!-- End Footer -->

@endsection