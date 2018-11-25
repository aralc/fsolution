<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('atividade');
            $table->integer('idResponsavel');
            $table->dateTime('dataHoraInicio');
            $table->dateTime('dataHoraTermino');
            $table->integer('idAtividade');
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
        Schema::dropIfExists('item_projetos');
    }
}
