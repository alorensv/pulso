<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('cod_propiedad');
            $table->text('nombre');
            $table->text('descripcion');
            $table->string('palabra_clave');
            $table->text('precio')->nullable();
            $table->text('uf')->nullable();
            $table->text('ubicacion');
            $table->text('ruta_video')->nullable();
            $table->integer('mt2_construido')->nullable();
            $table->integer('mt2_total');
            $table->integer('estacionamiento');
            $table->integer('banio');
            $table->integer('habitacion');
            $table->integer('cod_operacion')->unsigned();   
            $table->integer('cod_tipropiedad')->unsigned();   
            $table->integer('cod_comuna')->unsigned();            
            $table->foreign('cod_operacion')->references('cod_operacion')->on('operacion');
            $table->foreign('cod_tipropiedad')->references('cod_tipropiedad')->on('tipopropiedad');
            $table->foreign('cod_comuna')->references('cod_comuna')->on('comuna');
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
        Schema::dropIfExists('propiedades');
    }
}
