<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClPragasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_praga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checklist_id');
            $table->foreign('checklist_id')->references('id')->on('checklist');

            $table->unsignedBigInteger('praga_id');
            $table->foreign('praga_id')->references('id')->on('praga');

            $table->enum('praga', ['CONFORME', 'NAO_CONFORME', 'NAO_APLICAVEL']);
            $table->text('inconforme_praga');
            $table->text('plano_praga');
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
        Schema::dropIfExists('cl_praga');
    }
}
