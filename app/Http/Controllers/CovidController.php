<?php

namespace App\Http\Controllers;

use App\Model\Covid;
use App\Model\Doctor;
use App\Model\Pasien;
use Illuminate\Http\Request;
use PDF;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covids = Covid::orderBy('tanggal', 'DESC')->get();
        return view('backend.covid.index', compact('covids'));
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
        return view('backend.covid.create', compact('doctors', 'pasiens'));
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
            'no_sampel' => 'required|string|max:255',
            'tanggal' => 'required',
            'pemeriksaan' => 'required|string|max:255',
            'hasil' => 'required|string|max:255',
            'satuan' => 'required|string|max:255',
            //'qrcode' => 'required'
        ]);
        $data = $request->all();
        $data['qrcode'] = \rand(10000000000, 99999999999);
        Covid::create($data);
        return redirect()->route('covid.index')->with('create', 'Data pemeriksaan covid berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $covid = Covid::findOrFail($id);
        return view('backend.covid.cetak', \compact('covid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetak($id, $qrcode)
    {
        $covid = Covid::findOrFail($id);
        $qrcode = $covid->qrcode;
        $pdf = PDF::loadView('backend.covid.cetak', compact('covid', 'qrcode'))->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
