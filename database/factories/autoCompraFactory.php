<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\autoVenta;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\autoCompra>
 */
class autoCompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'precio' => $this->faker->randomfloat(2,2,10),
            'modelo'=> $this->faker->word,
            'marca' => $this->faker->word,
            'color' => $this->faker->word,
            'estatus' => $this->faker->word,
            'id_usuario1' => $this->faker->numberBetween(1,100),
        ];
    }
}
