<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rapid extends Model
{
    protected $table = 'rapid';
    protected $primaryKey = 'id_rapid';
    protected $fillable = [
        'id_lab',
        'swab',
        'antibody',
    ];
}
