<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hematologi extends Model
{
    protected $table = 'hematologi';
    protected $primaryKey = 'id_hematologi';
    protected $fillable = [
        'id_lab',
        'hemoglobin',
        'hematrokit',
        'lekosit',
        'trombosit',
        'eritrosit',
        'led',
        'hitung_jenis_lekosit',
        'golongan_darah',
        'hematologi_rutin',
        'hematologi_lengkap',
    ];
}
