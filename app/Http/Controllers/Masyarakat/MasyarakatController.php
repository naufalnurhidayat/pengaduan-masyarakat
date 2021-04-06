<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masyarakat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masyarakat.regist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|unique:masyarakat',
            'nama' => 'required|max:36',
            'username' => 'required|min:6|max:25|unique:masyarakat',
            'password' => 'required|min:6|same:password2',
            'password2' => 'required|min:6|same:password',
            'email' => 'required|email|unique:masyarakat',
            'telp' => 'required|numeric|unique:masyarakat'
        ]);

        Masyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'telp' => $request->telp
        ]);
        return redirect('/login')->with('status', 'Data berhasil diregistrasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('masyarakat.edit');
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
            'nama' => 'required|max:36',
            'email' => 'required|email',
            'telp' => 'required|numeric'
        ]);

        Masyarakat::findOrFail($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp
        ]);
        return redirect('/account')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = auth()->user()->id;
        Masyarakat::findOrFail($id)->delete();
        return redirect('/login')->with('status', 'Akun anda berhasil dihapus');
    }

    public function home()
    {
        return view('masyarakat.home');
    }

    public function report()
    {
        return view('masyarakat.create');
    }

    public function lapor(Request $request)
    {
        $request->validate([
            'isi_laporan' => 'required',
            'foto' => 'required'
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('img/report', $request->file('foto')->getClientOriginalName());
            Pengaduan::create([
                'tgl_pengaduan' => date('Y-m-d'),
                'id_masyarakat' => auth()->user()->id,
                'nik' => auth()->user()->nik,
                'isi_laporan' => $request->isi_laporan,
                'foto' => $request->file('foto')->getClientOriginalName(),
                'status' => '0'
            ]);
        } else {
            return redirect('/report')->with('danger', 'Lapor gagal!');
        }
        return redirect('/history')->with('status', 'Terima kasih atas laporan Anda');
    }

    public function account()
    {
        return view('masyarakat.account');
    }

    public function history()
    {
        $nik = auth()->user()->nik;
        $pengaduan = Pengaduan::where('nik', $nik)->get();
        
        return view('masyarakat.history', compact('pengaduan'));
    }

    public function respond($id)
    {
        $respond = Tanggapan::where('id_pengaduan', $id)->first();
        if(is_object($respond) == 1) {
            return view('masyarakat.respond', compact('respond'));
        } else {
            return redirect('/history')->with('danger', 'Laporan anda belum ditanggapi');
        }
    }

    public function userGuide()
    {
        return view('masyarakat.guide');
    }
}
