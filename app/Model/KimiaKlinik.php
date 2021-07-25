<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KimiaKlinik extends Model
{
    protected $table = 'kimia_klinik';
    protected $primaryKey = 'id_kimia';
    protected $fillable = [
        'id_lab',
        'glukosa_sewaktu',
        'glukosa_puasa',
        'glukosa_pp',
        'cholesterol',
        'tligserid',
        'asam_urat',
        'hdl',
        'ldl',
        'sgot',
        'sgpt',
        'ureum',
        'creatinin',
    ];
}
