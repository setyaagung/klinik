<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    protected $table = 'laboratorium';
    protected $primaryKey = 'id_laboratorium';
    protected $fillable = [
        'doctor_id',
        'pasien_id',
        'no_cm',
        'tanggal',
        'qrcode'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
