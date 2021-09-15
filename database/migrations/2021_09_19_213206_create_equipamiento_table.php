<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamiento', function (Blueprint $table) {
            $table->increments('cod_equipamiento');
            $table->integer('cod_tipequipamiento')->unsigned();            
            $table->foreign('cod_tipequipamiento')->references('cod_tipequipamiento')->on('tg_equipamiento');
            $table->integer('cod_propiedad')->unsigned();            
            $table->foreign('cod_propiedad')->references('cod_propiedad')->on('propiedades');
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
        Schema::dropIfExists('equipamiento');
    }
}
