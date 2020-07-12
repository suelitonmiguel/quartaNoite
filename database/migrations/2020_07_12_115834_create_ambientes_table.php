<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambiente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estabelecimento');
            $table->foreign('id_estabelecimento')->references('id')->on('estabelecimento');

            $table->string('nome',60);
            $table->integer('temperatura_minima');
            $table->integer('temperatura_maxima');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambiente');
    }
}
