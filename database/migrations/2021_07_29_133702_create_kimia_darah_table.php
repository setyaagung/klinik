<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKimiaDarahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kimia_darah', function (Blueprint $table) {
            $table->bigIncrements('id_kimia_darah');
            $table->unsignedBigInteger('id_laboratorium');
            $table->string('qrcode')->unique();
            $table->string('glukosa_puasa_kd')->nullable();
            $table->string('glukosa_pp_kd')->nullable();
            $table->string('gula_darah_sewaktu_kd')->nullable();
            $table->string('cholesterol_total_kd')->nullable();
            $table->string('hbsag_kd')->nullable();
            $table->string('trigliserida_kd')->nullable();
            $table->string('hemoglobin_kd')->nullable();
            $table->string('asam_urat_kd')->nullable();
            $table->string('sgot_kd')->nullable();
            $table->string('sgpt_kd')->nullable();
            $table->string('ureum_kd')->nullable();
            $table->string('kreatinin_kd')->nullable();
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
        Schema::dropIfExists('kimia_darahs');
    }
}
