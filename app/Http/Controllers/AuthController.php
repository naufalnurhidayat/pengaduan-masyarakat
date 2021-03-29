<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:masyarakat')->except('logout');
        $this->middleware('guest:Petugas')->except('logout');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginHandler(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('Petugas')->attempt($request->only('username', 'password'))) {
            $user = Auth::guard('Petugas')->user();
            if ($user->level == "Admin") {
                return redirect('/admin');
            } elseif ($user->level == "Petugas") {
                return redirect('/petugas');
            }
        } else if(Auth::guard('masyarakat')->attempt($request->only('username', 'password'))) {
            return redirect('/report');
        } else return redirect('/login')->with('danger', 'Email atau Password anda salah');
    }

    public function logout()
    {
        if(Auth::guard('Petugas')->check()) {
            Auth::guard('Petugas')->logout();
            return redirect('/login')->with('status', 'Anda berhasil logout');
        } else if(Auth::guard('masyarakat')->check()) {
            Auth::guard('masyarakat')->logout();
            return redirect('/login')->with('status', 'Anda berhasil logout');
        }
    }
}
