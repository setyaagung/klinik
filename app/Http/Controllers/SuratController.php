<?php

namespace App\Http\Controllers;

use App\Model\Covid;
use App\Model\KeteranganDokter;
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
}
