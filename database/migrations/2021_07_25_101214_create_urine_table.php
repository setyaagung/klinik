<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urine', function (Blueprint $table) {
            $table->bigIncrements('id_urine');
            $table->unsignedBigInteger('id_lab');
            $table->tinyInteger('urine_rutin');
            $table->tinyInteger('protein');
            $table->tinyInteger('reduksi');
            $table->tinyInteger('kehamilan');
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
        Schema::dropIfExists('urine');
    }
}
