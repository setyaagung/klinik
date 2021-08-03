<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UrineRutin extends Model
{
    protected $table = 'urine_rutin';
    protected $primaryKey = 'id_urine_rutin';
    protected $fillable = [
        'id_laboratorium',
        'qrcode',
        'warna_ur',
        'kejernihan_ur',
        'ph_ur',
        'protein_ur',
        'glukosa_ur',
        'keton_ur',
        'bilirubin_ur',
        'urobilinogen_ur',
        'nitrit_ur',
        'berat_jenis_ur',
        'epitel_gepeng_ur',
        'ca_oxalat_ur',
        'triple_fosfat_ur',
        'eritrosit_ur',
        'leukosit_ur',
        'blood_ur',
    ];
}
