<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Tanggapan;
use App\Masyarakat;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function dashboard(){
        $pengaduan = pengaduan::all();
        return view('petugas/dashboard_petugas', compact('pengaduan'));
    }

    public function data_masyarakat(){
        $masyarakat = Masyarakat::all();
        return view('petugas/data_masyarakat', compact('masyarakat'));
    }

    public function view_tanggapan($id){
        $pengaduan = Pengaduan::where('id_pengaduan', $id)->first();
        return view('petugas/tanggapan', compact('pengaduan'));
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

        return redirect('/petugas/dashboard_petugas')->with('pesan', 'Tanggapan berhasil dikirim');
    }

    public function detail_pengaduan($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan', $id)->first();
        return view('petugas/detail', compact('pengaduan'));
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
        //
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
