<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KimiaDarah extends Model
{
    protected $table = 'kimia_darah';
    protected $primaryKey = 'id_kimia_darah';
    protected $fillable = [
        'id_laboratorium',
        'glukosa_puasa',
        'glukosa_pp',
        'gula_darah_sewaktu',
        'cholesterol_total',
        'hbsag',
        'trigliserida',
        'hemoglobin',
        'asam_urat',
        'sgot',
        'sgpt',
        'ureum',
        'kreatinin',
    ];
}
