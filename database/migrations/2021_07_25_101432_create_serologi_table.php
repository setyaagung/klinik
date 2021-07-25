<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerologiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serologi', function (Blueprint $table) {
            $table->bigIncrements('id_serologi');
            $table->unsignedBigInteger('id_lab');
            $table->tinyInteger('widal');
            $table->tinyInteger('hbsag');
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
        Schema::dropIfExists('serologi');
    }
}
