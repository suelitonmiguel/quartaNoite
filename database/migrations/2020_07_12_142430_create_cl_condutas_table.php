<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClCondutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_conduta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checklist_id');
            $table->foreign('checklist_id')->references('id')->on('checklist');$table->unsignedBigInteger('checklist');

            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuario');

            $table->enum('uniforme', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_uniforme');
            $table->text('plano_uniforme');

            $table->enum('touca', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_touca');
            $table->text('plano_touca');

            $table->enum('higieniza_mao', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_higieniza_mao');
            $table->text('plano_higieniza_mao');

            $table->enum('luva', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_luva');
            $table->text('plano_luva');

            $table->enum('tossindo', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_tossindo');
            $table->text('plano_tossindo');

            $table->enum('apresenta_pelos_rosto', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_apresenta_pelos_rosto');
            $table->text('plano_apresenta_pelos_rosto');

            $table->enum('alimento_dentro_servico', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_alimento_dentro_servico');
            $table->text('plano_alimento_dentro_servico');

            $table->enum('excesso_perfume_maquiagem', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_excesso_perfume_maquiagem');
            $table->text('plano_excesso_perfume_maquiagem');

            $table->enum('excesso_unha_grande_esmalte', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_unha_grande_esmalte');
            $table->text('plano_unha_grande_esmalte');

            $table->enum('excesso_asos_vencido', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_asos_vencido');
            $table->text('plano_asos_vencido');
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
        Schema::dropIfExists('cl_conduta');
    }
}
