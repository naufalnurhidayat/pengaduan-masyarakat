<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Masyarakat;
use App\Pengaduan;
use App\Petugas;
use App\Tanggapan;
use Illuminate\Support\Facades\Auth;
use PDF;
use File;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::all();
        $masyarakat = Masyarakat::all();
        $pengaduan = Pengaduan::all();
        $proses = Pengaduan::where('status', 'Proses')->get();
        $tanggapan = Tanggapan::all();
        return view('admin.home', compact('petugas', 'masyarakat', 'pengaduan', 'proses', 'tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regist');
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
            'nama' => 'required|max:35',
            'level' => 'required',
            'username' => 'required|min:6|unique:petugas',
            'password' => 'required|min:6|same:password2',
            'password2' => 'required|same:password',
            'email' => 'required||email',
            'telp' => 'required|unique:petugas|numeric'
        ]);
        
        Petugas::create([
            'nama' => $request->nama,
            'level' => $request->level,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'telp' => $request->telp
        ]);
        return redirect('/admin/petugaslist')->with('status', 'Registrasi Petugas berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('admin.petugas-detail', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('admin.petugas-edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:35',
            'level' => 'required',
            'email' => 'required|email',
            'telp' => 'required|numeric'
        ]);
        
        Petugas::findOrFail($id)->update($request->all());
        return redirect('/admin/petugaslist')->with('status', 'Data Petugas berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Petugas::findOrFail($id)->delete();
        return redirect('/admin/petugaslist')->with('status', 'Data Petugas berhasil dihapus');
    }

    public function petugas()
    {
        $petugas = Petugas::all();
        return view('admin.petugas', compact('petugas'));
    }

    public function masyarakat()
    {
        $masyarakat = Masyarakat::all();
        return view('admin.masyarakat', compact('masyarakat'));
    }

    public function masyarakatDetail($id)
    {
        $masyarakat = Masyarakat::findOrFail($id);
        return view('admin.masyarakat-detail', compact('masyarakat'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function editProfile()
    {
        return view('admin.edit-profile');
    }

    public function updateProfile(Request $request)
    {
        $id = auth()->user()->id;

        $request->validate([
            'nama' => 'required|max:35',
            'email' => 'required|email',
            'telp' => 'required|numeric'
        ]);
        
        Petugas::findOrFail($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp
        ]);
        return redirect('/admin/profile')->with('status', 'Data berhasil diubah');
    }

    public function report()
    {
        $pengaduan = Pengaduan::all();
        return view('admin.report', compact('pengaduan'));
    }

    public function detailReport($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->get()->first();
        return view('admin.detail-report', compact('pengaduan'));
    }

    public function deleteReport($id)
    {
        $foto = Pengaduan::findOrFail($id)->first();
        File::delete('img/report/' . $foto->foto);
        Pengaduan::findOrFail($id)->delete();
        return redirect('/admin/report')->with('status', 'Laporan berhasil dihapus');
    }

    public function respond($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->get()->first();
        return view('admin.respond', compact('pengaduan'));
    }

    public function process($id)
    {
        Pengaduan::where('id', $id)->update(['status' => 'proses']);
        return redirect('/admin/report')->with('status', 'Data berhasil diubah');
    }

    public function respondHandle(Request $request, $id)
    {
        
        $request->validate(['tanggapan' => 'required']);

        $emailAdmin = Petugas::where('id', auth()->user()->id)->first()->email;
        $dataPengaduan = Pengaduan::where('id', $id)->first();
        $emailMasyarakat = $dataPengaduan->masyarakat->email;

        $data = [
           'emailAdmin' => $emailAdmin,
           'emailUser' => $emailMasyarakat 
        ];
        Mail::send('admin/email', $data, function ($message) use($emailMasyarakat){
            $message->from('naufalnurhidayat510@gmail.com', 'Aplikasi Telkom');
            $message->to($emailMasyarakat);
            $message->subject('Laporan telah ditanggapi');
        });
        
        Pengaduan::findOrFail($id)->update(['status' => 'selesai']);
        
        Tanggapan::create([
            'id_pengaduan' => $id,
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $request->tanggapan,
            'id_petugas' => auth()->user()->id
        ]);


        return redirect('/admin/report')->with('status', 'Laporan berhasil ditanggapi');
    }

    public function exportPDF(Request $request)
    {
        $token = $request->_token;
        $tgl_awal = $request->tgl_awal;
        $tgl_akhir = $request->tgl_akhir;
        $status = $request->status;
        if($token && !$tgl_awal && !$tgl_akhir && !$status) {
            return back()->with('danger', 'Filter anda kosong');
        } else if($request) {
            if($tgl_awal && $tgl_akhir && !$status) {
                $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$tgl_awal, $tgl_akhir])->get();
                $pdf = PDF::loadView('admin.export-pdf', compact('pengaduan'));
                return $pdf->stream('Data Pengaduan ' . $tgl_awal . '-' . $tgl_akhir . '.pdf');
            } else if($tgl_awal && !$status && !$tgl_akhir) {
                $pengaduan = Pengaduan::where('tgl_pengaduan', $tgl_awal)->get();
                $pdf = PDF::loadView('admin.export-pdf', compact('pengaduan'));
                return $pdf->stream('Data Pengaduan ' . $tgl_awal . '.pdf');
            } else if($tgl_awal && $tgl_akhir && $status) {
                // return 'ok';
                $pengaduan = Pengaduan::where('status', $status)->whereBetween('tgl_pengaduan', [$tgl_awal, $tgl_akhir])->get();
                $pdf = PDF::loadView('admin.export-pdf', compact('pengaduan'));
                return $pdf->stream('Data Pengaduan ' . $tgl_awal . '.pdf');
            } else if($status && !$tgl_akhir && !$tgl_awal) {
                if($status == 'pending') {
                    $status = '0';
                }
                $pengaduan = Pengaduan::where('status', $status)->get();
                $pdf = PDF::loadView('admin.export-pdf', compact('pengaduan'));
                return $pdf->stream('Data Pengaduan ' . $status . '.pdf');
            }
        } else {
            $pengaduan = Pengaduan::all();
            $pdf = PDF::loadView('admin.export-pdf', compact('pengaduan'));
            return $pdf->stream('Data Pengaduan.pdf');
        }
    }
}
