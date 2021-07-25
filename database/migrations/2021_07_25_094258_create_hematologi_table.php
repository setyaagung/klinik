<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHematologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hematologi', function (Blueprint $table) {
            $table->bigIncrements('id_hematologi');
            $table->unsignedBigInteger('id_lab');
            $table->tinyInteger('hemoglobin');
            $table->tinyInteger('hematrokit');
            $table->tinyInteger('lekosit');
            $table->tinyInteger('trombosit');
            $table->tinyInteger('eritrosit');
            $table->tinyInteger('led');
            $table->tinyInteger('hitung_jenis_lekosit');
            $table->tinyInteger('golongan_darah');
            $table->tinyInteger('hematologi_rutin');
            $table->tinyInteger('hematologi_lengkap');
            $table->timestamps();

            $table->foreign('id_lab')->references('id_lab')->on('laboratorium')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hematologi');
    }
}
