<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClTemperaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_temperatura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checklist_id');
            $table->foreign('checklist_id')->references('id')->on('checklist');

            $table->unsignedBigInteger('ambiente_id');
            $table->foreign('ambiente_id')->references('id')->on('ambiente');

            $table->enum('ambiente', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->string('temperatura_ambiente',8);
            $table->text('inconforme_ambiente');
            $table->text('plano_ambiente');
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
        Schema::dropIfExists('cl_temperatura');
    }
}
