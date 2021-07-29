<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DarahLengkap extends Model
{
    protected $table = 'darah_lengkap';
    protected $primaryKey = 'id_darah_lengkap';
    protected $fillable = [
        'id_laboratorium',
        'hemoglobin',
        'eritrosit',
        'trombosit',
        'eosinophil',
        'basophil',
        'neutrofil_batang',
        'neutrofil_segmen',
        'limfosit',
        'monosit',
        'hematrokit',
        'mcv',
        'mch',
        'mchc',
        'pwd',
        'typhi_o',
        'typhi_h',
        'paratyphi_ao',
        'paratyphi_ah',
        'paratyphi_bo',
        'paratyphi_bh',
        'paratyphi_co',
    ];
}
