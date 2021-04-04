@extends('templates.template-landing-masyarakat')

@section('title', 'Petunjuk Penggunaan')

@section('content')

<div class="container">
    <div class="row userguide">
        <div class="col">
            <h2>Petunjuk Penggunaan Website</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Silahkan melakukan Login <a href="{{ url('/login') }}" class="text-white">disini</a></li>
                <li class="list-group-item">Jika tidak memiliki akun, silahkan registrasi <a href="{{ url('/regist') }}">disini</a></li>
                <li class="list-group-item">Setelah anda login, anda akan diarahkan ke halaman pengaduan. Lalu isikan laporan yang ingin anda sampaikan</li>
                <li class="list-group-item">Setelah anda menyampaikan laporan, anda akan diarahkan ke halaman home</li>
                <li class="list-group-item">Anda bisa melihat riwayat laporan anda pada bagian atas</li>
                <li class="list-group-item">Anda bisa menyampaikan laporan anda yang berikutnya <a href="{{ url('/report') }}">disni</a></li>
            </ul>
        </div>
    </div>
</div>

@endsection