<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DarahLengkap extends Model
{
    protected $table = 'darah_lengkap';
    protected $primaryKey = 'id_darah_lengkap';
    protected $fillable = [
        'id_laboratorium',
        'qrcode',
        'hemoglobin_dl',
        'eritrosit_dl',
        'trombosit_dl',
        'leukosit_dl',
        'eosinophil_dl',
        'basophil_dl',
        'neutrofil_batang_dl',
        'neutrofil_segmen_dl',
        'limfosit_dl',
        'monosit_dl',
        'hematokrit_dl',
        'mcv_dl',
        'mch_dl',
        'mchc_dl',
        'pwd_dl',
        'typhi_o_dl',
        'typhi_h_dl',
        'paratyphi_ao_dl',
        'paratyphi_ah_dl',
        'paratyphi_bo_dl',
        'paratyphi_bh_dl',
        'paratyphi_co_dl',
    ];
}
