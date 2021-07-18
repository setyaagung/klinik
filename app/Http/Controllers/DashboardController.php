<?php

namespace App\Http\Controllers;

use App\Model\Covid;
use App\Model\Doctor;
use App\Model\Pasien;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dokter = Doctor::count();
        $pasien = Pasien::count();
        $covid = Covid::count();
        return view('backend.dashboard', \compact('dokter', 'pasien', 'covid'));
    }
}
