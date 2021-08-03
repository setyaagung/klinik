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
            $table->string('qrcode')->unique();
            $table->string('hemoglobin_dl')->nullable();
            $table->string('eritrosit_dl')->nullable();
            $table->string('trombosit_dl')->nullable();
            $table->string('eosinophil_dl')->nullable();
            $table->string('basophil_dl')->nullable();
            $table->string('neutrofil_batang_dl')->nullable();
            $table->string('neutrofil_segmen_dl')->nullable();
            $table->string('limfosit_dl')->nullable();
            $table->string('monosit_dl')->nullable();
            $table->string('hematrokit_dl')->nullable();
            $table->string('mcv_dl')->nullable();
            $table->string('mch_dl')->nullable();
            $table->string('mchc_dl')->nullable();
            $table->string('pwd_dl')->nullable();
            $table->string('typhi_o_dl')->nullable();
            $table->string('typhi_h_dl')->nullable();
            $table->string('paratyphi_ao_dl')->nullable();
            $table->string('paratyphi_ah_dl')->nullable();
            $table->string('paratyphi_bo_dl')->nullable();
            $table->string('paratyphi_bh_dl')->nullable();
            $table->string('paratyphi_co_dl')->nullable();
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
