<?php

namespace App\Http\Controllers;

use App\Models\Statuspermohonan;
use Illuminate\Http\Request;

class StatuspermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $prodi = Prodi::with('fakultas')->get();
        // return view('prodi.index') -> with('prodi', $prodi);
        $statuspermohonans = Statuspermohonan::with('permohonans')->get();


        return view('statuspermohonan.index', compact('statuspermohonans'));
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
     * @param  \App\Models\Statuspermohonan  $statuspermohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Statuspermohonan $statuspermohonan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statuspermohonan  $statuspermohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(Statuspermohonan $statuspermohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statuspermohonan  $statuspermohonan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Statuspermohonan $statuspermohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statuspermohonan  $statuspermohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statuspermohonan $statuspermohonan)
    {
        //
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:tersedia,tidak tersedia',
        ]);


        $statusPermohonan = StatusPermohonan::findOrFail($id);
        $statusPermohonan->status = $request->status;
        $statusPermohonan->save();

        return response()->json(['success' => true, 'message' => 'Status updated successfully!']);
    }




}
