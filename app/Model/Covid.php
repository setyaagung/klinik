<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    protected $fillable = [
        'doctor_id', 'pasien_id', 'no_sampel', 'pemeriksaan', 'tanggal',
        'hasil', 'rujukan', 'satuan', 'qrcode'
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
