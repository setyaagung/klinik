<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaksinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaksin', function (Blueprint $table) {
            $table->bigIncrements('id_vaksin');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('pasien_id');
            $table->string('no_vaksin')->unique();
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('nama_vaksin');
            $table->text('keterangan');
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
        Schema::dropIfExists('vaksin');
    }
}
