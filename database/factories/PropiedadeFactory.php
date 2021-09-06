<?php

namespace Database\Factories;

use App\Models\Propiedade;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropiedadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Propiedade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'nombre' => $this->faker->sentence(),
           'descripcion' => $this->faker->paragraph(),
           'palabra_clave' => $this->faker->sentence(),
           'precio' => $this->faker->sentence(),
           'uf' => $this->faker->sentence(),
           'ubicacion' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.5066492898836!2d-73.09694747399035!3d-36.85428990348604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669c9e4eb7a4c67%3A0x76a3e1d3ee40870a!2zQW5kYWx1w6ksIFNhbiBQZWRybyBkZSBsYSBQYXosIELDrW8gQsOtbw!5e0!3m2!1ses!2scl!4v1629323714968!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
           'ruta_video' => $this->faker->sentence(),
           'mt2_construido' => '200',
           'mt2_total' => '600',
           'estacionamiento' => $this->faker->randomElement(['1'], ['2'], ['3'], ['4']),
           'banio' => $this->faker->randomElement(['1'], ['2'], ['3'], ['4']),
           'habitacion' => $this->faker->randomElement(['1'], ['2'], ['3'], ['4']),
           'cod_operacion' => $this->faker->randomElement(['1'], ['2']),
           'cod_tipropiedad' => $this->faker->randomElement(['1'], ['2']),
           'cod_comuna'  => $this->faker->randomElement(['1'], ['2'])
        ];
    }
}
