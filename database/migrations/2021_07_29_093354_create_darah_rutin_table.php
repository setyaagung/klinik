<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDarahRutinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darah_rutin', function (Blueprint $table) {
            $table->bigIncrements('id_darah_rutin');
            $table->unsignedBigInteger('id_laboratorium');
            $table->string('hemoglobin');
            $table->string('eritrosit');
            $table->string('trombosit');
            $table->string('hematokrit');
            $table->string('typhi_o');
            $table->string('typhi_h');
            $table->string('paratyphi_ao');
            $table->string('paratyphi_ah');
            $table->string('paratyphi_bo');
            $table->string('paratyphi_bh');
            $table->string('paratyphi_co');
            $table->string('paratyphi_ch');
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
        Schema::dropIfExists('darah_rutin');
    }
}
