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
            $table->string('qrcode')->unique();
            $table->string('hemoglobin_dr')->nullable();
            $table->string('eritrosit_dr')->nullable();
            $table->string('leukosit_dr')->nullable();
            $table->string('trombosit_dr')->nullable();
            $table->string('hematokrit_dr')->nullable();
            $table->string('typhi_o_dr')->nullable();
            $table->string('typhi_h_dr')->nullable();
            $table->string('paratyphi_ao_dr')->nullable();
            $table->string('paratyphi_ah_dr')->nullable();
            $table->string('paratyphi_bo_dr')->nullable();
            $table->string('paratyphi_bh_dr')->nullable();
            $table->string('paratyphi_co_dr')->nullable();
            $table->string('paratyphi_ch_dr')->nullable();
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
