<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comprador>
 */
class CompradorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> fake()->firstName(),
            'apellido'=>fake()->lastName(),
            'identidad' =>fake()->numerify('###-').fake()->numberBetween('1936','2001').fake()->numerify('-#####'),
            'pais'=>fake()->country(),
            'telefono'=>fake()->phoneNumber(),
            'Tarjeta_Credito'=>fake()->creditCardNumber('Visa',true),
            'cantidad_producto'=>fake()->numberBetween(1,12)
        ];
    }
}
