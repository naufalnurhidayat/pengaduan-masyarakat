@extends('templates.template-masyarakat')

@section('title', 'Riwayat Pengaduan')

@section('content')

@if(session('danger'))
    <div class="alert alert-danger mt-2">
    {{ session('danger') }}
    </div>
@endif

<div class="container">
    <div class="row mt-4">
        <div class="col"><h3>Riwayat Laporan</h3></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Tanggapan</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pengaduan as $report)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $report->tgl_pengaduan }}</td>
                        <td>{{ $report->isi_laporan }}</td>
                        @if( $report->status == '0' )
                            <td>Belum Diproses</td>
                        @elseif( $report->status == 'proses' )
                            <td>Diproses</td>
                        @else
                            <td>Selesai & Telah Ditanggapi</td>
                        @endif
                        <td><img src="{{ asset('img/report/' . $report->foto) }}" alt="Laporan" width="100"></td>
                        @if( $report->status == 'selesai' )
                            <td><a class="btn btn-primary" href="{{ url('/report/respond/' . $report->id ) }}">Lihat Tanggapan</a></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection