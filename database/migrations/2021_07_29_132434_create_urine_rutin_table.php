<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrineRutinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urine_rutin', function (Blueprint $table) {
            $table->bigIncrements('id_urine_rutin');
            $table->unsignedBigInteger('id_laboratorium');
            $table->string('qrcode')->unique();
            $table->string('warna_ur')->nullable();
            $table->string('kejernihan_ur')->nullable();
            $table->string('ph_ur')->nullable();
            $table->string('protein_ur')->nullable();
            $table->string('glukosa_ur')->nullable();
            $table->string('keton_ur')->nullable();
            $table->string('bilirubin_ur')->nullable();
            $table->string('urobilinogen_ur')->nullable();
            $table->string('nitrit_ur')->nullable();
            $table->string('berat_jenis_ur')->nullable();
            $table->string('epitel_gepeng_ur')->nullable();
            $table->string('ca_oxalat_ur')->nullable();
            $table->string('triple_fosfat_ur')->nullable();
            $table->string('eritrosit_ur')->nullable();
            $table->string('leukosit_ur')->nullable();
            $table->string('blood_ur')->nullable();
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
        Schema::dropIfExists('urine_rutin');
    }
}
