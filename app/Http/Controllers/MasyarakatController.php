<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Hash;
use Auth;
use App\Masyarakat;
use App\Pengaduan;

class MasyarakatController extends Controller
{
    public function dashboard()
    {
        $nik = auth()->user()->nik;
        $pengaduan = Pengaduan::where('nik', $nik)->orderBy('id_pengaduan', 'desc')->get();
        return view('masyarakat/dashboard_masyarakat', compact('pengaduan'));
    }

    public function landingpage(){
        return view('landingpage');
    }

    public function pengaduan(){
        return view('masyarakat/pengaduan');
    }

    public function post_pengaduan(Request $request){
        $request->validate([
        'isi_laporan' => 'required',
        'foto' => 'required|mimes:jpg,png,jpeg|max:10240'
        ]);

        $today = date("Y-m-d");
        $nik = auth()->user()->nik;
        $newImg = time().'-img-pengaduan.'.$request->foto->extension();

        // Insert Data ke Database
        Pengaduan::create([
            'tgl_pengaduan' => $today,
            'nik' => $nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $newImg,
            'status' => '0'
        ]);

        // Upload Foto
        $request->foto->move(public_path('img'), $newImg);

        return redirect('/masyarakat/dashboard_masyarakat')->with('pesan', 'Pengaduan berhasil di buat');
    }

    public function detail_pengaduan($id){
        $pengaduan = Pengaduan::find($id);
        return view('masyarakat/detail_pengaduan', compact('pengaduan'));
    }

    public function profil(){
        return view('masyarakat/profil');
    }

    public function edit_profil(){
        return view('masyarakat/edit_profil');
    }

}
