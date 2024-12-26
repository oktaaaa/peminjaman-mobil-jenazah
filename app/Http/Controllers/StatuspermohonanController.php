<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Permohonan;
use App\Models\Statuspermohonan;
use App\Models\Supir;
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
        // $statuspermohonans = Permohonan::with('statuspermohonans')->get();
        // // dd($statuspermohonans);

        // return view('statuspermohonan.index', compact('statuspermohonans'));
        $statuspermohonans = StatusPermohonan::with('permohonan', 'mobil', 'supir')->get();
        $mobils = Mobil::where('status', 'available')->get();
        $supirs = Supir::all();

        return view('statuspermohonan.index', compact('statuspermohonans', 'mobils', 'supirs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $mobils = Mobil::where('status', 'available')->get();
        // $supirs = Supir::all();
        // $permohonans = Permohonan::all();
        // return view('statuspermohonan.create', compact('mobils', 'supirs', 'permohonans'));
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
        // $validatedData = $request->validate([
        //     'permohonan_id' => 'required|exists:permohonans,id',
        //     'supir_id' => 'required|exists:supirs,id',
        //     'mobil_id' => 'required|exists:mobils,id',
        //     'status' => 'required|in:tersedia,tidak tersedia',
        // ]);

        // // Create the StatusPermohonan
        // $statusPermohonan = StatusPermohonan::create($validatedData);

        // // Update the mobil status to 'used'
        // $mobil = Mobil::find($request->mobil_id);
        // $mobil->status = 'used';
        // $mobil->save();

        // return redirect()->route('statuspermohonan.index')->with('success', 'Status Permohonan created successfully.');
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
    public function update(Request $request, $id)
    {
        // Validate incoming data
        // $request->validate([
        //     'mobil_id' => 'nullable|exists:mobils,id',
        //     // 'supir_id' => 'nullable|exists:supirs,id',
        //     'status' => 'required|in:tersedia,tidak tersedia',
        // ]);

        // // Find the StatusPermohonan record
        // $statusPermohonan = StatusPermohonan::findOrFail($id);

        // // Update the fields
        // $statusPermohonan->mobil_id = $request->mobil_id;

        // $statusPermohonan->status = $request->status;

        // // Save the updated record
        // $statusPermohonan->save();

        // return redirect()->back()->with('success', 'Status, Mobil, and Supir updated successfully.');
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
            'status' => 'required|string|in:tersedia,tidak tersedia,selesai', // Add 'selesai' to validation rules
            'mobil_id' => 'nullable|exists:mobils,id'
        ]);

        // Find the StatusPermohonan by ID
        $statusPermohonan = StatusPermohonan::findOrFail($id);

        // Update the status and mobil_id
        $statusPermohonan->status = $request->status;
        $statusPermohonan->mobil_id = $request->mobil_id;
        $statusPermohonan->save();

        // If status is 'selesai', we can remove it from the table and move it to completed page
        if ($request->status === 'selesai') {
            // Perform any additional action for completed status, like moving to another collection or page
            return response()->json(['success' => true, 'message' => 'Status updated successfully, moved to completed!']);
        }

        return response()->json(['success' => true, 'message' => 'Status updated successfully!']);
    }


    public function selesai()
    {
        $completedStatusPermohonan = StatusPermohonan::where('status', 'selesai')->get();
        return view('statuspermohonan.okur', compact('completedStatusPermohonan'));
    }


}
