<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioTable extends Migration
{
    /**
     * 
     * DROP TRIGGER IF EXISTS eliminarProforma;

DELIMITER |
CREATE TRIGGER eliminarPropiedad BEFORE DELETE ON propiedades
FOR EACH ROW BEGIN
  DELETE FROM equipamiento WHERE cod_propiedad  = old.cod_propiedad;
  DELETE FROM fotos WHERE cod_propiedad  = old.cod_propiedad;
END;
|

     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->increments('cod_servicio');
            $table->string('name');
            $table->string('email');
            $table->string('fono')->nullable();            
            $table->integer('cod_tipropiedad')->unsigned(); 
            $table->integer('cod_comuna')->unsigned();             
            $table->text('direccion');
            $table->text('coordenadas');
            $table->text('message');
            $table->timestamps();
            $table->foreign('cod_tipropiedad')->references('cod_tipropiedad')->on('tipopropiedad');              
            $table->foreign('cod_comuna')->references('cod_comuna')->on('comuna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio');
    }
}
