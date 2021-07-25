<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Serologi extends Model
{
    protected $table = 'serologi';
    protected $primaryKey = 'id_serologi';
    protected $fillable = [
        'id_lab',
        'widal',
        'hbsag',
    ];
}