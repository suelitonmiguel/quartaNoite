<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNaoConformidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nao_conformidade', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checklist_id');
            $table->foreign('checklist_id')->references('id')->on('checklist');

            $table->unsignedBigInteger('responsavel');
            $table->foreign('responsavel')->references('id')->on('usuario');

            $table->text('problema');
            $table->text('solucao');
            $table->text('parecer');
            $table->dateTime('data_visita');
            $table->dateTime('data_parecer');
            $table->enum('status',['ABERTO','FECHADO']);
            $table->string('tabela');
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
        Schema::dropIfExists('nao_conformidade');
    }
}
