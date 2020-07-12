<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_area');
            $table->foreign('id_area')->references('id')->on('area');

            $table->unsignedBigInteger('id_tipo');
            $table->foreign('id_tipo')->references('id')->on('tipo_usuario');

            $table->bigInteger('id_estabelecimento')->nullable();

            $table->unsignedBigInteger('id_plano')->nullable();
            $table->foreign('id_plano')->references('id')->on('plano');

            $table->text('push_token');
            $table->string('nome');
            $table->string('documento', 15)->unique();
            $table->string('telefone', 15);
            $table->string('email', 50)->unique();
            $table->string('senha', 50);
            $table->enum('nivel', ['ADM', 'CONTRATANTE', 'FUNCIONARIO']);
            $table->enum('situacao', ['DESBLOQUEADO', 'BLOQUEADO']);
            $table->enum('acesso', ['PAINEL', 'APP', 'PAINEL_APP']);
            $table->tinyInteger('cliente_host');
            $table->tinyInteger('online')->nullable();
            $table->dateTime('ultimoacesso',"")->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('estagio_contratacao', ['TESTE','TESTE_EXCEDIDO','CLIENTE_EFETIVADO']);
            $table->date('data_encerramento_teste');
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
        Schema::dropIfExists('usuario');
    }
}
