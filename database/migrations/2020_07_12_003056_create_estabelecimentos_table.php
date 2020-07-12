<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario_contratante');
            $table->foreign('id_usuario_contratante')->references('id')->on('usuario');

            $table->unsignedBigInteger('id_contexto');
            $table->foreign('id_contexto')->references('id')->on('contexto');
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
        Schema::dropIfExists('estabelecimento');
    }
}
