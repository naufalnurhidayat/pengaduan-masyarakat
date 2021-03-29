@extends('templates.template-admin')

@section('title', 'Daftar Petugas')

@section('content')

    <h1 class="mt-4">Daftar Petugas</h1>
    @if(session('status'))
        <div class="alert alert-success mt-2">
        {{ session('status') }}
        </div>
    @endif  
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($petugas as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->level }}</td>
                            <td>
                                <a href="{{ url('/admin/petugaslist/' . $p->id) }}" class="btn btn-primary">Detail</a>
                                <a href="{{ url('/admin/petugaslist/edit/' . $p->id) }}" class="btn btn-warning">Ubah</a>
                                <form action="{{ url('/admin/petugaslist/' . $p->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection