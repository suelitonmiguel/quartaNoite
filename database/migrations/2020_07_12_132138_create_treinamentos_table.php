<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_solicitante');
            $table->foreign('id_solicitante')->references('id')->on('usuario');
            $table->text('observacao');
            $table->enum('status',['ABERTO','FECHADO']);
            $table->dateTime('data_solicitacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinamento');
    }
}
