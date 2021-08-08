<?php

namespace App\Http\Controllers;

use App\Model\Covid;
use App\Model\DarahLengkap;
use App\Model\DarahRutin;
use App\Model\KeteranganDokter;
use App\Model\KimiaDarah;
use App\Model\Laboratorium;
use App\Model\Serologi;
use App\Model\UrineRutin;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index($id, $qrcode)
    {
        $cv = Covid::findOrFail($id);
        $qrcode = $cv->qrcode;
        return view('surat-keterangan', compact('cv', 'qrcode'));
    }
    public function surat_dokter($id, $qrcode)
    {
        $kds = KeteranganDokter::findOrFail($id);
        $qrcode = $kds->qrcode;
        return view('surat-keterangan-dokter', compact('kds', 'qrcode'));
    }
    public function darah_rutin($id, $qrcode)
    {
        $lab = Laboratorium::findOrFail($id);
        $dr = DarahRutin::where('id_laboratorium', $lab->id_laboratorium)->first();
        $qrcode = $dr->qrcode;
        return view('darah-rutin', compact('lab', 'dr', 'qrcode'));
    }
    public function darah_lengkap($id, $qrcode)
    {
        $lab = Laboratorium::findOrFail($id);
        $dl = DarahLengkap::where('id_laboratorium', $lab->id_laboratorium)->first();
        $qrcode = $dl->qrcode;
        return view('darah-lengkap', compact('lab', 'dl', 'qrcode'));
    }
    public function urine_rutin($id, $qrcode)
    {
        $lab = Laboratorium::findOrFail($id);
        $ur = UrineRutin::where('id_laboratorium', $lab->id_laboratorium)->first();
        $qrcode = $ur->qrcode;
        return view('urine-rutin', compact('lab', 'ur', 'qrcode'));
    }
    public function serologi($id, $qrcode)
    {
        $lab = Laboratorium::findOrFail($id);
        $sl = Serologi::where('id_laboratorium', $lab->id_laboratorium)->first();
        $qrcode = $sl->qrcode;
        return view('serologi', compact('lab', 'sl', 'qrcode'));
    }
    public function kimia_darah($id, $qrcode)
    {
        $lab = Laboratorium::findOrFail($id);
        $kd = KimiaDarah::where('id_laboratorium', $lab->id_laboratorium)->first();
        $qrcode = $kd->qrcode;
        return view('kimia-darah', compact('lab', 'kd', 'qrcode'));
    }
}
