<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
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
            'puesto'=>fake()->name(),
            'Email'=>fake()->safeEmail(),
            'identidad' =>fake()->numerify('###-').fake()->numberBetween('1992','2001').fake()->numerify('-#####'),
            'pais'=>fake()->country(),
            'telefono'=>fake()->phoneNumber(),
            'cuenta'=>fake()->numberBetween(2012,2017).'129'.fake()->numerify('###')
        ];
    }
}
