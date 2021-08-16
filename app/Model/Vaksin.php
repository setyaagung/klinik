<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    protected $table = 'vaksin';
    protected $primaryKey = 'id_vaksin';
    protected $fillable = ['doctor_id', 'pasien_id', 'no_vaksin', 'tanggal', 'waktu', 'nama_vaksin', 'keterangan'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
