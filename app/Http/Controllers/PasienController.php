<?php

namespace App\Http\Controllers;

use App\Model\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all();
        return view('backend.pasien.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pasien.create');
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
            'no_ktp.unique' => 'Maaf, No KTP ini sudah digunakan pasien lain'
        ];
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:20|unique:pasiens',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ], $message);
        $data = $request->all();
        Pasien::create($data);
        return redirect()->route('pasien.index')->with('create', 'Data pasien berhasil ditambahkan');
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
        $pasien = Pasien::findOrFail($id);
        return view('backend.pasien.edit', compact('pasien'));
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
        $pasien = Pasien::findOrFail($id);
        $message = [
            'no_ktp.unique' => 'Maaf, No KTP ini sudah digunakan pasien lain'
        ];
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:20|unique:pasiens,no_ktp,' . $id,
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ], $message);
        $data = $request->all();
        $pasien->update($data);
        return redirect()->route('pasien.index')->with('update', 'Data pasien berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return redirect()->route('pasien.index')->with('delete', 'Data pasien berhasil dihapus');
    }
}
