<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKimiaKlinikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kimia_klinik', function (Blueprint $table) {
            $table->bigIncrements('id_kimia');
            $table->unsignedBigInteger('id_lab');
            $table->tinyInteger('glukosa_sewaktu');
            $table->tinyInteger('glukosa_puasa');
            $table->tinyInteger('glukosa_pp');
            $table->tinyInteger('cholesterol');
            $table->tinyInteger('tligserid');
            $table->tinyInteger('asam_urat');
            $table->tinyInteger('hdl');
            $table->tinyInteger('ldl');
            $table->tinyInteger('sgot');
            $table->tinyInteger('sgpt');
            $table->tinyInteger('ureum');
            $table->tinyInteger('creatinin');
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
        Schema::dropIfExists('kimia_kliniks');
    }
}
