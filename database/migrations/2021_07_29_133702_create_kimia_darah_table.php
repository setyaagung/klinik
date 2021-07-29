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
            $table->string('glukosa_puasa');
            $table->string('glukosa_pp');
            $table->string('gula_darah_sewaktu');
            $table->string('cholesterol_total');
            $table->string('hbsag');
            $table->string('trigliserida');
            $table->string('hemoglobin');
            $table->string('asam_urat');
            $table->string('sgot');
            $table->string('sgpt');
            $table->string('ureum');
            $table->string('kreatinin');
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
