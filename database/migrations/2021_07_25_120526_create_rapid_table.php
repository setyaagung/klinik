<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRapidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapid', function (Blueprint $table) {
            $table->bigIncrements('id_rapid');
            $table->unsignedBigInteger('id_lab');
            $table->tinyInteger('swab');
            $table->tinyInteger('antibody');
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
        Schema::dropIfExists('rapid');
    }
}
