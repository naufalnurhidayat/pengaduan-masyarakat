@extends('templates.template-admin')

@section('title', 'Daftar Masyarakat')

@section('content')

    <h1 class="mt-4">Daftar Masyarakat</h1>  
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($masyarakat as $m)
                        <tr>
                            <td>{{ $m->nik }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>
                                <a href="{{ url('/admin/masyarakatlist/' . $m->id) }}" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection