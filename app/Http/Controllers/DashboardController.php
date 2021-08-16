<?php

namespace App\Http\Controllers;

use App\Model\Covid;
use App\Model\Doctor;
use App\Model\KeteranganDokter;
use App\Model\Laboratorium;
use App\Model\Pasien;
use App\Model\Vaksin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dokter = Doctor::count();
        $pasien = Pasien::count();
        $covid = Covid::count();
        $lab = Laboratorium::count();
        $kd = KeteranganDokter::count();
        $vaksin = Vaksin::count();
        return view('backend.dashboard', \compact('dokter', 'pasien', 'covid', 'lab', 'kd', 'vaksin'));
    }
}
