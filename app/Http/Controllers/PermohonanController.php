<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permohonans = Permohonan::all();
        return view('permohonan.index') -> with('permohonans', $permohonans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('permohonan.create');
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
        $validasi = $request->validate([
            'nama_pemohon' => 'required',
            'nama_jenazah' => 'required',
            'alamat_penjemputan' => 'required',
            'alamat_tpu' => 'required',
            'tanggal_penjemputan' => 'required',
            'jam_penjemputan' => 'required',
            'no_hp' => 'required',
            'catatan' => '',
        ]);

        $permohonan = new Permohonan();
        $permohonan->nama_pemohon = $validasi['nama_pemohon'];
        $permohonan->nama_jenazah = $validasi['nama_jenazah'];
        $permohonan->alamat_penjemputan = $validasi['alamat_penjemputan'];
        $permohonan->alamat_tpu = $validasi['alamat_tpu'];
        $permohonan->tanggal_penjemputan = $validasi['tanggal_penjemputan'];
        $permohonan->jam_penjemputan = $validasi['jam_penjemputan'];
        $permohonan->no_hp = $validasi['no_hp'];
        $permohonan->catatan = $validasi['catatan'];

        $permohonan -> save();
        return redirect() -> route ('permohonan.index') -> with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permohonan $permohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        //
    }
}
