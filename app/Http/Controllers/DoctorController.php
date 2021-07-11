<?php

namespace App\Http\Controllers;

use App\Model\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('backend.doctor.index', \compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'no_sip.unique' => 'Maaf, No SIP ini sudah digunakan dokter lain'
        ];
        $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'no_sip' => 'required|string|max:255|unique:doctors',
            'spesialis' => 'required',
        ], $message);
        $data = $request->all();
        Doctor::create($data);
        return redirect()->route('doctor.index')->with('create', 'Data dokter berhasil ditambahkan');
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
        $doctor = Doctor::findOrFail($id);
        return view('backend.doctor.edit', compact('doctor'));
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
        $doctor = Doctor::findOrFail($id);
        $message = [
            'no_sip.unique' => 'Maaf, No SIP ini sudah digunakan dokter lain'
        ];
        $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'no_sip' => 'required|string|max:255|unique:doctors,no_sip,' . $id,
            'spesialis' => 'required',
        ], $message);
        $data = $request->all();
        $doctor->update($data);
        return redirect()->route('doctor.index')->with('update', 'Data dokter berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('doctor.index')->with('delete', 'Data dokter berhasil dihapus');
    }
}
