<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KimiaDarah extends Model
{
    protected $table = 'kimia_darah';
    protected $primaryKey = 'id_kimia_darah';
    protected $fillable = [
        'id_laboratorium',
        'qrcode',
        'glukosa_puasa_kd',
        'glukosa_pp_kd',
        'gula_darah_sewaktu_kd',
        'cholesterol_total_kd',
        'hbsag_kd',
        'trigliserida_kd',
        'hemoglobin_kd',
        'asam_urat_kd',
        'sgot_kd',
        'sgpt_kd',
        'ureum_kd',
        'kreatinin_kd',
    ];
}
