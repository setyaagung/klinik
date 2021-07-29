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
            $table->unsignedBigInteger('id_laboratorium');
            $table->string('asam_urat');
            $table->string('sgot');
            $table->string('sgpt');
            $table->string('ureum');
            $table->string('kreatinin');
            $table->string('hcg');
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
        Schema::dropIfExists('serologi');
    }
}
