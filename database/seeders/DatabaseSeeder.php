<?php

namespace Database\Seeders;

use App\Models\Comuna;
use App\Models\Foto;
use Illuminate\Database\Seeder;
use App\Models\Operacion;
use App\Models\Propiedade;
use App\Models\Tipopropiedad;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$prop = new Propiedade();
        $prop->nombre = 'Casa Andalue N° 1111';
        $prop->descripcion = 'Casa estilo Mediterráneo en la calle La Avena, al interior del Loteo Centenario etapa 2, uno de los mejores barrios de Puerto Varas, por su urbanización, plazas, exclusividad y plusvalía. Cuenta con 306 m2 construidos, en un terreno de 850 m2 Aproximadamente, justo frente a la bella plaza del barrio.
        Cuenta con la siguiente distribución:        
        Primer Piso: Porche de entrada y hall de acceso con medio muro quiebra vista y baño de visita, Gran Living en desnivel y amplio e iluminado Comedor por separado, Gran Cocina amoblada con comedor de diario, despensa, Dormitorio de Servicio completo, Lavandería interior con sala de caldera. En la otra ala de la casa, se encuentra la zona privada con una Gran Sala de Estar y Gran Dormitorio en suite con walking closet, cómo para alojados, con salida al patio.
        Segundo Piso: Bella caja de escala en madera, home office, 2 amplios dormitorios cada uno con su baño completo, y el Gran Dormitorio principal en Suite con Walking Closet.';
        $prop->palabra_clave = 'Casa Andalue Agosto';
        $prop->precio = '$405.960.000';
        $prop->uf = 'UF 13.600';
        $prop->ubicacion = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.5066492898836!2d-73.09694747399035!3d-36.85428990348604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669c9e4eb7a4c67%3A0x76a3e1d3ee40870a!2zQW5kYWx1w6ksIFNhbiBQZWRybyBkZSBsYSBQYXosIELDrW8gQsOtbw!5e0!3m2!1ses!2scl!4v1629323714968!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
        $prop->ruta_video = '<iframe width="100%" height="300px" src="https://www.youtube.com/embed/g21bC8DuhDM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $prop->mt2_construido = 280;
        $prop->mt2_total = 420;
        $prop->estacionamiento = 2;
        $prop->banio = 2;
        $prop->habitacion = 3;
        $prop->cod_operacion = 1;
        $prop->cod_tipropiedad  = 1;
        $prop->cod_comuna = 1;
        $prop->save();
        
        */
   

        $op1 = new Operacion();
        $op1->cod_operacion = 1;
        $op1->operacion = 'VENTA';
        $op1->save();

        $op2 = new Operacion();
        $op2->cod_operacion = 2;
        $op2->operacion = 'ARRIENDO';
        $op2->save();

        $tip = new Tipopropiedad();
        $tip->cod_tipropiedad  = 1;
        $tip->tipopropiedad = 'CASA';
        $tip->save();

        $tip2 = new Tipopropiedad();
        $tip2->cod_tipropiedad  = 2;
        $tip2->tipopropiedad = 'DEPARTAMENTO';
        $tip2->save();

        $tip3 = new Tipopropiedad();
        $tip3->cod_tipropiedad  = 3;
        $tip3->tipopropiedad = 'TERRENO';
        $tip3->save();

        $com = new Comuna();
        $com->cod_comuna = 1;
        $com->comuna = 'Concepción';
        $com->ind_vigencia = 1;
        $com->save();

        $com2 = new Comuna();
        $com2->cod_comuna = 2;
        $com2->comuna = 'San Pedro de la Paz';
        $com2->ind_vigencia = 1;
        $com2->save();

                
        Propiedade::factory(25)->create();

        // \App\Models\User::factory(10)->create();
    }
}
