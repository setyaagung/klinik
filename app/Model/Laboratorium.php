<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    protected $table = 'laboratorium';
    protected $primaryKey = 'id_lab';
    protected $fillable = [
        'pasien_id', 'doctor_id', 'no_cm', 'tanggal',
        'pengambilan_sampel', 'hasil',
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
