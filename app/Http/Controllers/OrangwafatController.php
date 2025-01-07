<?php

namespace App\Http\Controllers;

use App\Models\Orangwafat;
use Illuminate\Http\Request;

class OrangwafatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orangwafats = Orangwafat::all();
        return view('orangwafat.index')->with('orangwafats', $orangwafats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('orangwafat.create');
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
            'nik' => 'required',
            'nama_jenazah' => 'required',
            'jk' => 'required',
            'alamat_jenazah' => 'required',
            'alamat_penjemputan' => 'required',
            'tuj_makam' => 'required'
        ]);
        // dd($validasi['id']);
        // Statuspermohonan::create([
        //     'permohonan_id' => $validasi->id, // reference the created permohonan ID
        //     'status' => 'tidak tersedia', // set a default status
        // ]);
        $orangwafat = new Orangwafat();

        $orangwafat->nik = $validasi['nik'];
        $orangwafat->nama_jenazah = $validasi['nama_jenazah'];
        $orangwafat->jk = $validasi['jk'];
        $orangwafat->alamat_jenazah = $validasi['alamat_jenazah'];
        $orangwafat->alamat_penjemputan = $validasi['alamat_penjemputan'];
        $orangwafat->tuj_makam = $validasi['tuj_makam'];

        $orangwafat->save();

        return redirect()->route('orangwafat.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orangwafat  $orangwafat
     * @return \Illuminate\Http\Response
     */
    public function show(Orangwafat $orangwafat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orangwafat  $orangwafat
     * @return \Illuminate\Http\Response
     */
    public function edit(Orangwafat $orangwafat)
    {
        //
        return view('orangwafat.edit')->with('orangwafats', $orangwafat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orangwafat  $orangwafat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orangwafat $orangwafat)
    {
        //
        $orangwafat->update([
            'nik' => $request->nik,
            'nama_jenazah' => $request->nama_jenazah,
            'jk' => $request->jk,
            'alamat_jenazah' => $request->alamat_jenazah,
            'alamat_penjemputan' => $request -> alamat_penjemputan,
            'tuj_makam' => $request->tuj_makam
        ]);

        return redirect()->route('orangwafat.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orangwafat  $orangwafat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orangwafat $orangwafat)
    {
        //
        $orangwafat->delete();
        return back();
    }
}
