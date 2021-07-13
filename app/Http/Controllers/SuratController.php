<?php

namespace App\Http\Controllers;

use App\Model\Covid;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index($id, $qrcode)
    {
        $cv = Covid::findOrFail($id);
        $qrcode = $covid->qrcode;
        return view('surat-keterangan', compact('covid', 'qrcode'));
    }
}
