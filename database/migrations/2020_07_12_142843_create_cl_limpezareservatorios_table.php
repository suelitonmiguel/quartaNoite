<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClLimpezareservatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_limpezareservatorio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checklist_id');
            $table->foreign('checklist_id')->references('id')->on('checklist');

            $table->date('data_ultima_limpeza');
            $table->enum('limpeza', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_limpeza');
            $table->text('plano_limpeza');
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
        Schema::dropIfExists('cl_limpezareservatorio');
    }
}
