<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDarahLengkapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darah_lengkap', function (Blueprint $table) {
            $table->bigIncrements('id_darah_lengkap');
            $table->unsignedBigInteger('id_laboratorium');
            $table->string('hemoglobin');
            $table->string('eritrosit');
            $table->string('trombosit');
            $table->string('eosinophil');
            $table->string('basophil');
            $table->string('neutrofil_batang');
            $table->string('neutrofil_segmen');
            $table->string('limfosit');
            $table->string('monosit');
            $table->string('hematrokit');
            $table->string('mcv');
            $table->string('mch');
            $table->string('mchc');
            $table->string('pwd');
            $table->string('typhi_o');
            $table->string('typhi_h');
            $table->string('paratyphi_ao');
            $table->string('paratyphi_ah');
            $table->string('paratyphi_bo');
            $table->string('paratyphi_bh');
            $table->string('paratyphi_co');
            $table->timestamps();

            $table->foreign('id_laboratorium')->references('id_laboratorium')->on('laboratorium')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darah_lengkap');
    }
}
