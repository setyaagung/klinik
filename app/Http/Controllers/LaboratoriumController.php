<?php

namespace App\Http\Controllers;

use App\Model\DarahLengkap;
use App\Model\DarahRutin;
use App\Model\Doctor;
use App\Model\KimiaDarah;
use App\Model\Pasien;
use App\Model\Serologi;
use App\Model\UrineRutin;
use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Laboratorium::orderBy('tanggal', 'DESC')->get();
        return view('backend.laboratorium.index', \compact('labs'));
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
        return view('backend.laboratorium.create', \compact('doctors', 'pasiens'));
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
            'no_cm' => 'required',
            'tanggal' => 'required',
        ]);
        //$data = $request->all();
        $lab = Laboratorium::create([
            'doctor_id' => $request->input('doctor_id'),
            'pasien_id' => $request->input('pasien_id'),
            'no_cm' => $request->input('no_cm'),
            'tanggal' => $request->input('tanggal'),
        ]);
        DarahRutin::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'hemoglobin' => $request->input('hemoglobin'),
            'eritrosit' => $request->input('eritrosit'),
            'trombosit' => $request->input('trombosit'),
            'hematokrit' => $request->input('hematokrit'),
            'typhi_o' => $request->input('typhi_o'),
            'typhi_h' => $request->input('typhi_h'),
            'paratyphi_ao' => $request->input('paratyphi_ao'),
            'paratyphi_ah' => $request->input('paratyphi_ah'),
            'paratyphi_bo' => $request->input('paratyphi_bo'),
            'paratyphi_bh' => $request->input('paratyphi_bh'),
            'paratyphi_co' => $request->input('paratyphi_co'),
            'paratyphi_ch' => $request->input('paratyphi_ch'),
        ]);
        DarahLengkap::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'hemoglobin' => $request->input('hemoglobin'),
            'eritrosit' => $request->input('eritrosit'),
            'trombosit' => $request->input('trombosit'),
            'eosinophil' => $request->input('eosinophil'),
            'basophil' => $request->input('basophil'),
            'neutrofil_batang' => $request->input('neutrofil_batang'),
            'neutrofil_segmen' => $request->input('neutrofil_segmen'),
            'limfosit' => $request->input('limfosit'),
            'monosit' => $request->input('monosit'),
            'hematrokit' => $request->input('hematrokit'),
            'mcv' => $request->input('mcv'),
            'mch' => $request->input('mch'),
            'mchc' => $request->input('mchc'),
            'pwd' => $request->input('pwd'),
            'typhi_o' => $request->input('typhi_o'),
            'typhi_h' => $request->input('typhi_h'),
            'paratyphi_ao' => $request->input('paratyphi_ao'),
            'paratyphi_ah' => $request->input('paratyphi_ah'),
            'paratyphi_bo' => $request->input('paratyphi_bo'),
            'paratyphi_bh' => $request->input('paratyphi_bh'),
            'paratyphi_co' => $request->input('paratyphi_co'),
        ]);
        UrineRutin::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'warna' => $request->input('warna'),
            'kejernihan' => $request->input('kejernihan'),
            'ph' => $request->input('ph'),
            'protein' => $request->input('protein'),
            'glukosa' => $request->input('glukosa'),
            'keton' => $request->input('keton'),
            'bilirubin' => $request->input('bilirubin'),
            'urobilinogen' => $request->input('urobilinogen'),
            'nitrit' => $request->input('nitrit'),
            'berat_jenis' => $request->input('berat_jenis'),
            'epitel_gepeng' => $request->input('epitel_gepeng'),
            'ca_oxalat' => $request->input('ca_oxalat'),
            'triple_fosfat' => $request->input('triple_fosfat'),
            'eritrosit' => $request->input('eritrosit'),
            'leukosit' => $request->input('leukosit'),
            'blood' => $request->input('blood'),
        ]);
        Serologi::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'asam_urat' => $request->input('asam_urat'),
            'sgot' => $request->input('sgot'),
            'sgpt' => $request->input('sgpt'),
            'ureum' => $request->input('ureum'),
            'kreatinin' => $request->input('kreatinin'),
            'hcg' => $request->input('hcg'),
        ]);
        KimiaDarah::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'glukosa_puasa' => $request->input('glukosa_puasa'),
            'glukosa_pp' => $request->input('glukosa_pp'),
            'gula_darah_sewaktu' => $request->input('gula_darah_sewaktu'),
            'cholesterol_total' => $request->input('cholesterol_total'),
            'trigliserida' => $request->input('trigliserida'),
            'hemoglobin' => $request->input('hemoglobin'),
            'asam_urat' => $request->input('asam_urat'),
            'sgot' => $request->input('sgot'),
            'sgpt' => $request->input('sgpt'),
            'ureum' => $request->input('ureum'),
            'kreatinin' => $request->input('kreatinin'),
        ]);
        return redirect()->route('laboratorium.index')->with('create', 'Data permintaan laboratorium berhasil ditambahkan');
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
        $lab = Laboratorium::findOrFail($id);
        $doctors = Doctor::orderBy('nama_dokter', 'ASC')->get();
        $pasiens = Pasien::orderBy('nama_pasien', 'ASC')->get();
        $hematologi = Hematologi::where('id_lab', $lab->id_lab)->first();
        $kimia_klinik = KimiaKlinik::where('id_lab', $lab->id_lab)->first();
        $urine = Urine::where('id_lab', $lab->id_lab)->first();
        $serologi = Serologi::where('id_lab', $lab->id_lab)->first();
        $rapid = Rapid::where('id_lab', $lab->id_lab)->first();
        return view('backend.laboratorium.edit', \compact('lab', 'doctors', 'pasiens', 'hematologi', 'kimia_klinik', 'urine', 'serologi', 'rapid'));
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
        $lab = Laboratorium::findOrFail($id);
        $hematologi = Hematologi::where('id_lab', $lab->id_lab)->first();
        $kimia_klinik = KimiaKlinik::where('id_lab', $lab->id_lab)->first();
        $urine = Urine::where('id_lab', $lab->id_lab)->first();
        $serologi = Serologi::where('id_lab', $lab->id_lab)->first();
        $rapid = Rapid::where('id_lab', $lab->id_lab)->first();
        $request->validate([
            'doctor_id' => 'required',
            'pasien_id' => 'required',
            'no_cm' => 'required',
            'tanggal' => 'required',
            'pengambilan_sampel' => 'required',
            'hasil' => 'required',
        ]);
        $data = $request->all();
        $lab->update($data);
        $hematologi->update([
            'hemoglobin' => $request->input('hemoglobin'),
            'hematrokit' => $request->input('hematrokit'),
            'lekosit' => $request->input('lekosit'),
            'trombosit' => $request->input('trombosit'),
            'eritrosit' => $request->input('eritrosit'),
            'led' => $request->input('led'),
            'hitung_jenis_lekosit' => $request->input('hitung_jenis_lekosit'),
            'golongan_darah' => $request->input('golongan_darah'),
            'hematologi_rutin' => $request->input('hematologi_rutin'),
            'hematologi_lengkap' => $request->input('hematologi_lengkap'),
        ]);
        $kimia_klinik->update([
            'glukosa_sewaktu' => $request->input('glukosa_sewaktu'),
            'glukosa_puasa' => $request->input('glukosa_puasa'),
            'glukosa_pp' => $request->input('glukosa_pp'),
            'cholesterol' => $request->input('cholesterol'),
            'tligserid' => $request->input('tligserid'),
            'asam_urat' => $request->input('asam_urat'),
            'hdl' => $request->input('hdl'),
            'ldl' => $request->input('ldl'),
            'sgot' => $request->input('sgot'),
            'sgpt' => $request->input('sgpt'),
            'ureum' => $request->input('ureum'),
            'creatinin' => $request->input('creatinin'),
        ]);
        $urine->update([
            'urine_rutin' => $request->input('urine_rutin'),
            'protein' => $request->input('protein'),
            'reduksi' => $request->input('reduksi'),
            'kehamilan' => $request->input('kehamilan'),
        ]);
        $serologi->update([
            'widal' => $request->input('widal'),
            'hbsag' => $request->input('hbsag'),
        ]);
        $rapid->update([
            'swab' => $request->input('swab'),
            'antibody' => $request->input('antibody'),
        ]);
        return redirect()->route('laboratorium.index')->with('update', 'Data permintaan laboratorium berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab = Laboratorium::findOrFail($id);
        $lab->delete();
        return redirect()->route('laboratorium.index')->with('delete', 'Data permintaan laboratorium berhasil dihapus');
    }
    public function getPasien(Request $request)
    {
        $detailPasien = Pasien::where('id', $request->id)->first();
        return response()->json($detailPasien);
    }

    public function cetak($id)
    {
        $lab = Laboratorium::findOrFail($id);
        $hematologi = Hematologi::where('id_lab', $lab->id_lab)->first();
        $kimia_klinik = KimiaKlinik::where('id_lab', $lab->id_lab)->first();
        $urine = Urine::where('id_lab', $lab->id_lab)->first();
        $serologi = Serologi::where('id_lab', $lab->id_lab)->first();
        $rapid = Rapid::where('id_lab', $lab->id_lab)->first();
        $pdf = PDF::loadView('backend.laboratorium.cetak', \compact('lab', 'doctors', 'pasiens', 'hematologi', 'kimia_klinik', 'urine', 'serologi', 'rapid'))->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
