<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masyarakat;
use App\Petugas;
use Hash;
use App\Pengaduan;
use App\Tanggapan;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
        //
    }

    public function dashboard(){
        $pengaduan = pengaduan::all();
        return view('admin/dashboard_admin', compact('pengaduan'));
    }

    public function data_masyarakat(){
        $masyarakat = Masyarakat::all();
        return view('admin/data_masyarakat', compact('masyarakat'));
    }

    public function data_petugas(){
        $petugas = Petugas::all();
        return view('admin/data_petugas', compact('petugas'));
    }

    public function view_tanggapan($id){
        $pengaduan = Pengaduan::where('id_pengaduan', $id)->first();
        return view('admin/tanggapan', compact('pengaduan'));
    }

    public function tanggapan(Request $request, $id){
        $request->validate([
            'tanggapan' => 'required',
            'status' => 'required'
        ]);

        $today = date('Y-m-d');
        $id_petugas = auth()->user()->id_petugas;

        // Update Tanggapan jika ada, Insert Tanggapan jika tidak ada
        Tanggapan::updateOrCreate(
            ['id_pengaduan' => $id],
            [
                'tgl_tanggapan' => $today,
                'tanggapan' => $request->tanggapan,
                'id_petugas' => $id_petugas
            ]
        );

        // Update Status Pengaduan
        Pengaduan::where('id_pengaduan', $id)->update([
            'status' => $request->status
        ]);

        return redirect('/admin/dashboard_admin')->with('pesan', 'Tanggapan berhasil dikirim');
    }

    public function register_petugas(){
        return view('admin/register_petugas');
    }

    public function view_register(Request $request){
        $request->validate([
            'nama' => 'required|max:36',
            'username' => 'required|max:25|unique:masyarakat',
            'telp' => 'required|numeric|unique:masyarakat,telp',
            'password' => 'required|max:255',
            'level' => 'required',
        ]);

        Petugas::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => $request->level
        ]);
        return redirect('/admin/data_petugas')->with('pesan', 'Akun Anda Berhasil Di Registrasi');
    }

    public function delete_data_petugas($id){
        Petugas::where('id_petugas',$id)->delete();
        return redirect('/admin/data_petugas')->with('pesan', 'Akun Anda Berhasil Di Registrasi');
    }

    public function delete_data_masyarakat($id){
        Masyarakat::where('nik',$id)->delete();
        return redirect('/admin/data_masyarakat')->with('pesan', 'Akun Anda Berhasil Di Registrasi');
    }

    public function detail_pengaduan($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan', $id)->first();
        return view('admin/detail', compact('pengaduan'));
    }

    public function export_pdf()
    {
        $pengaduan = Pengaduan::all();
        $pdf = PDF::loadView('admin.export_pdf', compact('pengaduan'));
        return $pdf->download(time().'pengaduan.pdf');
    }

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
    public function edit($id)
    {
        //
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
}
