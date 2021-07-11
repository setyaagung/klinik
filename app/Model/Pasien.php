<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use SoftDeletes;
    protected $fillable = ['no_ktp', 'nama_pasien', 'jenis_kelamin', 'tanggal_lahir', 'alamat'];
}
