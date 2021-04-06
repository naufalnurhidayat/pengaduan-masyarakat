<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Petugas;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;
use File;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakat = Masyarakat::all();
        $laporan = Pengaduan::all();
        $proses = Pengaduan::where('status', 'Proses')->get();
        $tanggapan = Tanggapan::all();
        return view('petugas.index', compact('masyarakat', 'laporan', 'proses', 'tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('petugas.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('petugas.edit-profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = auth()->user()->id;

        $request->validate([
            'nama' => 'required|max:35',
            'email' => 'required|email',
            'telp' => 'required|numeric'
        ]);
        
        Petugas::findOrFail($id)->update($request->all());
        return redirect('/petugas/profile')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function laporan()
    {
        $pengaduan = Pengaduan::all();
        return view('petugas.laporan', compact('pengaduan'));
    }

    public function detailLaporan($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->get()->first();
        return view('petugas.detail-laporan', compact('pengaduan'));
    }

    public function prosesLaporan($id)
    {
        Pengaduan::where('id', $id)->update(['status' => 'proses']);
        return redirect('/petugas/laporan')->with('status', 'Data berhasil diubah');
    }

    public function tanggapanLaporan($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->get()->first();
        return view('petugas.tanggapan', compact('pengaduan'));
    }

    public function tanggapanLaporanHandle(Request $request, $id)
    {
        Pengaduan::findOrFail($id)->update(['status' => 'selesai']);

        $request->validate(['tanggapan' => 'required']);

        Tanggapan::create([
            'id_pengaduan' => $id,
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $request->tanggapan,
            'id_petugas' => auth()->user()->id
        ]);

        return redirect('/petugas/laporan')->with('status', 'Laporan berhasil ditanggapi');
    }

    public function hapusLaporan($id)
    {
        Pengaduan::findOrFail($id)->delete();
        $foto = Pengaduan::findOrFail($id)->first();
        File::delete('img/report/' . $foto->foto);
        return redirect('/petugas/laporan')->with('status', 'Laporan berhasil dihapus');
    }
}
