<?php

namespace App\Http\Controllers;

use App\Model\Doctor;
use App\Model\Pasien;
use App\Model\Vaksin;
use PDF;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaksins = Vaksin::orderBy('tanggal', 'DESC')->get();
        return view('backend.vaksin.index', compact('vaksins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        $pasiens = Pasien::all();
        return view('backend.vaksin.create', \compact('doctors', 'pasiens'));
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
            'no_vaksin.unique' => 'Nomor vaksin ini sudah ada dalam daftar'
        ];
        $request->validate([
            'doctor_id' => 'required',
            'pasien_id' => 'required',
            'no_vaksin' => 'required|unique:vaksin',
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama_vaksin' => 'required',
            'keterangan' => 'required'
        ], $message);
        $data = $request->all();
        Vaksin::create($data);
        return \redirect()->route('vaksin.index')->with('create', 'Data vaksin berhasil ditambahkan');
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
        $vaksin = Vaksin::findOrFail($id);
        $doctors = Doctor::all();
        $pasiens = Pasien::all();
        return view('backend.vaksin.edit', \compact('vaksin', 'doctors', 'pasiens'));
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
        $vaksin = Vaksin::findOrFail($id);
        $message = [
            'no_vaksin.unique' => 'Nomor vaksin ini sudah ada dalam daftar'
        ];
        $request->validate([
            'doctor_id' => 'required',
            'pasien_id' => 'required',
            'no_vaksin' => 'required|unique:vaksin,no_vaksin,' . $vaksin->id_vaksin . ',id_vaksin',
            'tanggal' => 'required',
            'waktu' => 'required',
            'nama_vaksin' => 'required',
            'keterangan' => 'required'
        ], $message);
        $data = $request->all();
        $vaksin->update($data);
        return \redirect()->route('vaksin.index')->with('update', 'Data vaksin berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaksin = Vaksin::findOrFail($id);
        $vaksin->delete();
        return redirect()->route('vaksin.index')->with('delete', 'Data vaksin berhasil dihapus');
    }

    public function getPasien(Request $request)
    {
        $detailPasien = Pasien::where('id', $request->id)->first();
        return response()->json($detailPasien);
    }

    public function cetak($id, $qrcode)
    {
        $vaksin = Vaksin::findOrFail($id);
        $qrcode = $vaksin->no_vaksin;
        $pdf = PDF::loadView('backend.vaksin.cetak', compact('vaksin', 'qrcode'))->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
