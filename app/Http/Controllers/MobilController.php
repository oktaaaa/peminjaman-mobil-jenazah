<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mobils = Mobil::all();
        return view('mobil.index') -> with('mobils', $mobils);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mobil.create');
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
            'kode' => 'required',
            'plat' => 'required',
            'brand' => 'required',
            'tahun_rilis' => 'required'
        ]);

        $mobil = new Mobil();
        $mobil->kode = $validasi['kode'];
        $mobil->plat = $validasi['plat'];
        $mobil->brand = $validasi['brand'];
        $mobil->tahun_rilis = $validasi['tahun_rilis'];

        $mobil -> save();
        return redirect() -> route ('mobil.index') -> with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        //
        return view('mobil.edit')->with('mobils', $mobil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        //
        $mobil->update([
            'kode' => $request->kode,
            'plat' => $request->plat,
            'brand' => $request->brand,
            'tahun_rilis' => $request->tahun_rilis
        ]);

        return redirect()->route('mobil.index')-> with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        //
        $mobil -> delete();
        return back();
    }
}
