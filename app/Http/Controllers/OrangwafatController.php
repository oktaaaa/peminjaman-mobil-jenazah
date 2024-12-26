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
