<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Urine extends Model
{
    protected $table = 'urine';
    protected $primaryKey = 'id_urine';
    protected $fillable = [
        'id_lab',
        'urine_rutin',
        'protein',
        'reduksi',
        'kehamilan',
    ];
}
