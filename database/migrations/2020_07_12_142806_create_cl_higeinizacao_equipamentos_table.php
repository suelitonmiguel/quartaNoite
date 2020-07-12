<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClHigeinizacaoEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_higeinizacao_equipamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checklist_id');
            $table->foreign('checklist_id')->references('id')->on('checklist');$table->unsignedBigInteger('checklist');

            $table->unsignedBigInteger('equipamento_id');
            $table->foreign('equipamento_id')->references('id')->on('equipamento');

            $table->enum('higienizacao_equipamento', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_higienizacao_equipamento');
            $table->text('plano_higienizacao_equipamento');
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
        Schema::dropIfExists('cl_higeinizacao_equipamento');
    }
}
