<?php

namespace App\Http\Controllers;

use App\Model\DarahLengkap;
use App\Model\DarahRutin;
use App\Model\Doctor;
use App\Model\KimiaDarah;
use App\Model\Laboratorium;
use App\Model\Pasien;
use App\Model\Serologi;
use App\Model\UrineRutin;
use PDF;
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
            'qrcode' => \rand(10000000000, 99999999999),
        ]);
        DarahRutin::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'qrcode' => \rand(10000000000, 99999999999),
            'hemoglobin_dr' => $request->input('hemoglobin_dr'),
            'leukosit_dr' => $request->input('leukosit_dr'),
            'eritrosit_dr' => $request->input('eritrosit_dr'),
            'trombosit_dr' => $request->input('trombosit_dr'),
            'hematokrit_dr' => $request->input('hematokrit_dr'),
            'typhi_o_dr' => $request->input('typhi_o_dr'),
            'typhi_h_dr' => $request->input('typhi_h_dr'),
            'paratyphi_ao_dr' => $request->input('paratyphi_ao_dr'),
            'paratyphi_ah_dr' => $request->input('paratyphi_ah_dr'),
            'paratyphi_bo_dr' => $request->input('paratyphi_bo_dr'),
            'paratyphi_bh_dr' => $request->input('paratyphi_bh_dr'),
            'paratyphi_co_dr' => $request->input('paratyphi_co_dr'),
            'paratyphi_ch_dr' => $request->input('paratyphi_ch_dr'),
        ]);
        DarahLengkap::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'qrcode' => \rand(10000000000, 99999999999),
            'hemoglobin_dl' => $request->input('hemoglobin_dl'),
            'leukosit_dl' => $request->input('leukosit_dl'),
            'eritrosit_dl' => $request->input('eritrosit_dl'),
            'trombosit_dl' => $request->input('trombosit_dl'),
            'eosinophil_dl' => $request->input('eosinophil_dl'),
            'basophil_dl' => $request->input('basophil_dl'),
            'neutrofil_batang_dl' => $request->input('neutrofil_batang_dl'),
            'neutrofil_segmen_dl' => $request->input('neutrofil_segmen_dl'),
            'limfosit_dl' => $request->input('limfosit_dl'),
            'monosit_dl' => $request->input('monosit_dl'),
            'hematokrit_dl' => $request->input('hematokrit_dl'),
            'mcv_dl' => $request->input('mcv_dl'),
            'mch_dl' => $request->input('mch_dl'),
            'mchc_dl' => $request->input('mchc_dl'),
            'pwd_dl' => $request->input('pwd_dl'),
            'typhi_o_dl' => $request->input('typhi_o_dl'),
            'typhi_h_dl' => $request->input('typhi_h_dl'),
            'paratyphi_ao_dl' => $request->input('paratyphi_ao_dl'),
            'paratyphi_ah_dl' => $request->input('paratyphi_ah_dl'),
            'paratyphi_bo_dl' => $request->input('paratyphi_bo_dl'),
            'paratyphi_bh_dl' => $request->input('paratyphi_bh_dl'),
            'paratyphi_co_dl' => $request->input('paratyphi_co_dl'),
        ]);
        UrineRutin::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'qrcode' => \rand(10000000000, 99999999999),
            'warna_ur' => $request->input('warna_ur'),
            'kejernihan_ur' => $request->input('kejernihan_ur'),
            'ph_ur' => $request->input('ph_ur'),
            'protein_ur' => $request->input('protein_ur'),
            'glukosa_ur' => $request->input('glukosa_ur'),
            'keton_ur' => $request->input('keton_ur'),
            'bilirubin_ur' => $request->input('bilirubin_ur'),
            'urobilinogen_ur' => $request->input('urobilinogen_ur'),
            'nitrit_ur' => $request->input('nitrit_ur'),
            'berat_jenis_ur' => $request->input('berat_jenis_ur'),
            'epitel_gepeng_ur' => $request->input('epitel_gepeng_ur'),
            'ca_oxalat_ur' => $request->input('ca_oxalat_ur'),
            'triple_fosfat_ur' => $request->input('triple_fosfat_ur'),
            'eritrosit_ur' => $request->input('eritrosit_ur'),
            'leukosit_ur' => $request->input('leukosit_ur'),
            'blood_ur' => $request->input('blood_ur'),
        ]);
        Serologi::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'qrcode' => \rand(10000000000, 99999999999),
            'asam_urat_sl' => $request->input('asam_urat_sl'),
            'sgot_sl' => $request->input('sgot_sl'),
            'sgpt_sl' => $request->input('sgpt_sl'),
            'ureum_sl' => $request->input('ureum_sl'),
            'kreatinin_sl' => $request->input('kreatinin_sl'),
            'hcg_sl' => $request->input('hcg_sl'),
        ]);
        KimiaDarah::create([
            'id_laboratorium' => $lab->id_laboratorium,
            'qrcode' => \rand(10000000000, 99999999999),
            'glukosa_puasa_kd' => $request->input('glukosa_puasa_kd'),
            'glukosa_pp_kd' => $request->input('glukosa_pp_kd'),
            'gula_darah_sewaktu_kd' => $request->input('gula_darah_sewaktu_kd'),
            'cholesterol_total_kd' => $request->input('cholesterol_total_kd'),
            'hbsag_kd' => $request->input('hbsag_kd'),
            'trigliserida_kd' => $request->input('trigliserida_kd'),
            'hemoglobin_kd' => $request->input('hemoglobin_kd'),
            'asam_urat_kd' => $request->input('asam_urat_kd'),
            'sgot_kd' => $request->input('sgot_kd'),
            'sgpt_kd' => $request->input('sgpt_kd'),
            'ureum_kd' => $request->input('ureum_kd'),
            'kreatinin_kd' => $request->input('kreatinin_kd'),
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
        $darah_rutin = DarahRutin::where('id_laboratorium', $lab->id_laboratorium)->first();
        $darah_lengkap = DarahLengkap::where('id_laboratorium', $lab->id_laboratorium)->first();
        $kimia_darah = KimiaDarah::where('id_laboratorium', $lab->id_laboratorium)->first();
        $urine_rutin = UrineRutin::where('id_laboratorium', $lab->id_laboratorium)->first();
        $serologi = Serologi::where('id_laboratorium', $lab->id_laboratorium)->first();
        return view('backend.laboratorium.edit', \compact('lab', 'doctors', 'pasiens', 'darah_rutin', 'darah_lengkap', 'urine_rutin', 'serologi', 'kimia_darah'));
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
        $darah_rutin = DarahRutin::where('id_laboratorium', $lab->id_laboratorium)->first();
        $darah_lengkap = DarahLengkap::where('id_laboratorium', $lab->id_laboratorium)->first();
        $kimia_darah = KimiaDarah::where('id_laboratorium', $lab->id_laboratorium)->first();
        $urine_rutin = UrineRutin::where('id_laboratorium', $lab->id_laboratorium)->first();
        $serologi = Serologi::where('id_laboratorium', $lab->id_laboratorium)->first();
        $request->validate([
            'doctor_id' => 'required',
            'pasien_id' => 'required',
            'no_cm' => 'required',
            'tanggal' => 'required',
        ]);
        //$data = $request->all();
        $lab->update([
            'doctor_id' => $request->input('doctor_id'),
            'pasien_id' => $request->input('pasien_id'),
            'no_cm' => $request->input('no_cm'),
            'tanggal' => $request->input('tanggal'),
        ]);
        $darah_rutin->update([
            'id_laboratorium' => $lab->id_laboratorium,
            'hemoglobin_dr' => $request->input('hemoglobin_dr'),
            'leukosit_dr' => $request->input('leukosit_dr'),
            'eritrosit_dr' => $request->input('eritrosit_dr'),
            'trombosit_dr' => $request->input('trombosit_dr'),
            'hematokrit_dr' => $request->input('hematokrit_dr'),
            'typhi_o_dr' => $request->input('typhi_o_dr'),
            'typhi_h_dr' => $request->input('typhi_h_dr'),
            'paratyphi_ao_dr' => $request->input('paratyphi_ao_dr'),
            'paratyphi_ah_dr' => $request->input('paratyphi_ah_dr'),
            'paratyphi_bo_dr' => $request->input('paratyphi_bo_dr'),
            'paratyphi_bh_dr' => $request->input('paratyphi_bh_dr'),
            'paratyphi_co_dr' => $request->input('paratyphi_co_dr'),
            'paratyphi_ch_dr' => $request->input('paratyphi_ch_dr'),
        ]);
        $darah_lengkap->update([
            'id_laboratorium' => $lab->id_laboratorium,
            'hemoglobin_dl' => $request->input('hemoglobin_dl'),
            'leukosit_dl' => $request->input('leukosit_dl'),
            'eritrosit_dl' => $request->input('eritrosit_dl'),
            'trombosit_dl' => $request->input('trombosit_dl'),
            'eosinophil_dl' => $request->input('eosinophil_dl'),
            'basophil_dl' => $request->input('basophil_dl'),
            'neutrofil_batang_dl' => $request->input('neutrofil_batang_dl'),
            'neutrofil_segmen_dl' => $request->input('neutrofil_segmen_dl'),
            'limfosit_dl' => $request->input('limfosit_dl'),
            'monosit_dl' => $request->input('monosit_dl'),
            'hematokrit_dl' => $request->input('hematokrit_dl'),
            'mcv_dl' => $request->input('mcv_dl'),
            'mch_dl' => $request->input('mch_dl'),
            'mchc_dl' => $request->input('mchc_dl'),
            'pwd_dl' => $request->input('pwd_dl'),
            'typhi_o_dl' => $request->input('typhi_o_dl'),
            'typhi_h_dl' => $request->input('typhi_h_dl'),
            'paratyphi_ao_dl' => $request->input('paratyphi_ao_dl'),
            'paratyphi_ah_dl' => $request->input('paratyphi_ah_dl'),
            'paratyphi_bo_dl' => $request->input('paratyphi_bo_dl'),
            'paratyphi_bh_dl' => $request->input('paratyphi_bh_dl'),
            'paratyphi_co_dl' => $request->input('paratyphi_co_dl'),
        ]);
        $urine_rutin->update([
            'id_laboratorium' => $lab->id_laboratorium,
            'warna_ur' => $request->input('warna_ur'),
            'kejernihan_ur' => $request->input('kejernihan_ur'),
            'ph_ur' => $request->input('ph_ur'),
            'protein_ur' => $request->input('protein_ur'),
            'glukosa_ur' => $request->input('glukosa_ur'),
            'keton_ur' => $request->input('keton_ur'),
            'bilirubin_ur' => $request->input('bilirubin_ur'),
            'urobilinogen_ur' => $request->input('urobilinogen_ur'),
            'nitrit_ur' => $request->input('nitrit_ur'),
            'berat_jenis_ur' => $request->input('berat_jenis_ur'),
            'epitel_gepeng_ur' => $request->input('epitel_gepeng_ur'),
            'ca_oxalat_ur' => $request->input('ca_oxalat_ur'),
            'triple_fosfat_ur' => $request->input('triple_fosfat_ur'),
            'eritrosit_ur' => $request->input('eritrosit_ur'),
            'leukosit_ur' => $request->input('leukosit_ur'),
            'blood_ur' => $request->input('blood_ur'),
        ]);
        $serologi->update([
            'id_laboratorium' => $lab->id_laboratorium,
            'asam_urat_sl' => $request->input('asam_urat_sl'),
            'sgot_sl' => $request->input('sgot_sl'),
            'sgpt_sl' => $request->input('sgpt_sl'),
            'ureum_sl' => $request->input('ureum_sl'),
            'kreatinin_sl' => $request->input('kreatinin_sl'),
            'hcg_sl' => $request->input('hcg_sl'),
        ]);
        $kimia_darah->update([
            'id_laboratorium' => $lab->id_laboratorium,
            'glukosa_puasa_kd' => $request->input('glukosa_puasa_kd'),
            'glukosa_pp_kd' => $request->input('glukosa_pp_kd'),
            'gula_darah_sewaktu_kd' => $request->input('gula_darah_sewaktu_kd'),
            'cholesterol_total_kd' => $request->input('cholesterol_total_kd'),
            'hbsag_kd' => $request->input('hbsag_kd'),
            'trigliserida_kd' => $request->input('trigliserida_kd'),
            'hemoglobin_kd' => $request->input('hemoglobin_kd'),
            'asam_urat_kd' => $request->input('asam_urat_kd'),
            'sgot_kd' => $request->input('sgot_kd'),
            'sgpt_kd' => $request->input('sgpt_kd'),
            'ureum_kd' => $request->input('ureum_kd'),
            'kreatinin_kd' => $request->input('kreatinin_kd'),
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

    public function cetak($id, $qrcode)
    {
        $lab = Laboratorium::findOrFail($id);
        $qrcode = $lab->qrcode;
        $darah_rutin = DarahRutin::where('id_laboratorium', $lab->id_laboratorium)->first();
        $darah_lengkap = DarahLengkap::where('id_laboratorium', $lab->id_laboratorium)->first();
        $kimia_darah = KimiaDarah::where('id_laboratorium', $lab->id_laboratorium)->first();
        $urine_rutin = UrineRutin::where('id_laboratorium', $lab->id_laboratorium)->first();
        $serologi = Serologi::where('id_laboratorium', $lab->id_laboratorium)->first();
        $pdf = PDF::loadView('backend.laboratorium.cetak', \compact('lab', 'darah_rutin', 'darah_lengkap', 'urine_rutin', 'serologi', 'kimia_darah', 'qrcode'))->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
