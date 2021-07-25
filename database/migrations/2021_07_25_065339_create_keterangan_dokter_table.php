<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeteranganDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_dokter', function (Blueprint $table) {
            $table->bigIncrements('id_keterangan_dokter');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('pasien_id');
            $table->string('pekerjaan');
            $table->date('tanggal_periksa');
            $table->date('mulai_istirahat');
            $table->date('selesai_istirahat');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keterangan_dokter');
    }
}
