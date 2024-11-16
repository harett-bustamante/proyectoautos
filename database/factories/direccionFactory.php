<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\direccion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\direccion>
 */
class direccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'num_exterior' => $this->faker->numberBetween(1,100),
        'num_interior' => $this->faker->numberBetween(1,100),
        'calle' => $this->faker->word,
        'colonia' => $this->faker->word,
        'municipio' => $this->faker->word,
        'estado' => $this->faker->word,
        'pais' => $this->faker->word,
        'codigo_postal' => $this->faker->numberBetween(1,100),
        'id_usuario1' => $this->faker->numberBetween(1,100),
        ];
    }
}
