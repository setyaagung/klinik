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
            $table->string('warna');
            $table->string('kejernihan');
            $table->string('ph');
            $table->string('protein');
            $table->string('glukosa');
            $table->string('keton');
            $table->string('bilirubin');
            $table->string('urobilinogen');
            $table->string('nitrit');
            $table->string('berat_jenis');
            $table->string('epitel_gepeng');
            $table->string('ca_oxalat');
            $table->string('triple_fosfat');
            $table->string('eritrosit');
            $table->string('leukosit');
            $table->string('blood');
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
