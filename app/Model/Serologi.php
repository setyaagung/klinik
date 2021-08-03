<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Serologi extends Model
{
    protected $table = 'serologi';
    protected $primaryKey = 'id_serologi';
    protected $fillable = [
        'id_laboratorium',
        'qrcode',
        'asam_urat_sl',
        'sgot_sl',
        'sgpt_sl',
        'ureum_sl',
        'kreatinin_sl',
        'hcg_sl',
    ];
}
