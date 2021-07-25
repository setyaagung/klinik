<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KeteranganDokter extends Model
{
    protected $table = 'keterangan_dokter';
    protected $primaryKey = 'id_keterangan_dokter';
    protected $fillable = ['doctor_id', 'pasien_id', 'pekerjaan', 'tanggal_periksa', 'mulai_istirahat', 'selesai_istirahat'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
