<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DarahRutin extends Model
{
    protected $table = 'darah_rutin';
    protected $primaryKey = 'id_darah_rutin';
    protected $fillable = [
        'id_laboratorium',
        'qrcode',
        'hemoglobin_dr',
        'eritrosit_dr',
        'trombosit_dr',
        'hematokrit_dr',
        'typhi_o_dr',
        'typhi_h_dr',
        'paratyphi_ao_dr',
        'paratyphi_ah_dr',
        'paratyphi_bo_dr',
        'paratyphi_bh_dr',
        'paratyphi_co_dr',
        'paratyphi_ch_dr',
    ];
}
