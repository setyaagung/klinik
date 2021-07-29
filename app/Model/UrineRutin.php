<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UrineRutin extends Model
{
    protected $table = 'urine_rutin';
    protected $primaryKey = 'id_urine_rutin';
    protected $fillable = [
        'id_laboratorium',
        'warna',
        'kejernihan',
        'ph',
        'protein',
        'glukosa',
        'keton',
        'bilirubin',
        'urobilinogen',
        'nitrit',
        'berat_jenis',
        'epitel_gepeng',
        'ca_oxalat',
        'triple_fosfat',
        'eritrosit',
        'leukosit',
        'blood',
    ];
}
