<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Masyarakat;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:masyarakat')->except('logout');
        $this->middleware('guest:petugas')->except('logout');
    }

    public function viewRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|unique:masyarakat',
            'nama' => 'required|max:36',
            'username' => 'required|max:25|unique:masyarakat',
            'telp' => 'required|numeric|unique:masyarakat,telp',
            'password' => 'required|max:255',
        ]);

        Masyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);
        return redirect('/login')->with('pesan', 'Akun Anda Berhasil Di Registrasi');
    }

    public function viewLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('masyarakat')->attempt($request->only('username', 'password'))) {
            return redirect()->intended('/masyarakat/dashboard_masyarakat');

        } elseif (Auth::guard('petugas')->attempt($request->only('username', 'password'))) {
            if (auth()->guard('petugas')->user()->level == 'admin') {
                return redirect()->intended('/admin/dashboard_admin');
            } else {
                return redirect()->intended('/petugas/dashboard_petugas');
            }
            
        } else {
            return redirect('/login')->with('pesanDanger', 'Username atau Password anda salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('pesan', 'Anda berhasil Logout');
    }
}
