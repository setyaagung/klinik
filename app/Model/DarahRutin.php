<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DarahRutin extends Model
{
    protected $table = 'darah_rutin';
    protected $primaryKey = 'id_darah_rutin';
    protected $fillable = [
        'id_laboratorium',
        'hemoglobin',
        'eritrosit',
        'trombosit',
        'hematokrit',
        'typhi_o',
        'typhi_h',
        'paratyphi_ao',
        'paratyphi_ah',
        'paratyphi_bo',
        'paratyphi_bh',
        'paratyphi_co',
        'paratyphi_ch',
    ];
}
