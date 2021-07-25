<?php

namespace App\Http\Controllers;

use App\Model\Doctor;
use App\Model\KeteranganDokter;
use App\Model\Pasien;
use Illuminate\Http\Request;
use PDF;

class KeteranganDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kds = KeteranganDokter::orderBy('tanggal_periksa', 'DESC')->get();
        return view('backend.keterangan-dokter.index', \compact('kds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::orderBy('nama_dokter', 'ASC')->get();
        $pasiens = Pasien::orderBy('nama_pasien', 'ASC')->get();
        return view('backend.keterangan-dokter.create', \compact('doctors', 'pasiens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',
            'pasien_id' => 'required',
            'tanggal_periksa' => 'required',
            'pekerjaan' => 'required',
            'mulai_istirahat' => 'required',
            'selesai_istirahat' => 'required'
        ]);
        $data = $request->all();
        KeteranganDokter::create($data);
        return redirect()->route('keterangan-dokter.index')->with('create', 'Data surat keterangan dokter berhasil ditambahkan');
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
        $kd = KeteranganDokter::findOrFail($id);
        $doctors = Doctor::orderBy('nama_dokter', 'ASC')->get();
        $pasiens = Pasien::orderBy('nama_pasien', 'ASC')->get();
        return view('backend.keterangan-dokter.edit', \compact('doctors', 'pasiens', 'kd'));
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
        $kd = KeteranganDokter::findOrFail($id);
        $request->validate([
            'doctor_id' => 'required',
            'pasien_id' => 'required',
            'tanggal_periksa' => 'required',
            'pekerjaan' => 'required',
            'mulai_istirahat' => 'required',
            'selesai_istirahat' => 'required'
        ]);
        $data = $request->all();
        $kd->update($data);
        return redirect()->route('keterangan-dokter.index')->with('update', 'Data surat keterangan dokter berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kd = KeteranganDokter::findOrFail($id);
        $kd->delete();
        return redirect()->route('keterangan-dokter.index')->with('delete', 'Data surat keterangan dokter berhasil dihapus');
    }
    public function cetak($id)
    {
        $kd = KeteranganDokter::findOrFail($id);
        $pdf = PDF::loadView('backend.keterangan-dokter.cetak', compact('kd'))->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
