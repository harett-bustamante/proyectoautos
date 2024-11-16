<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class usuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'apellido_paterno' => $this->faker->word,
            'apellido_materno' => $this->faker->word,
            'fecha_nacimiento' => $this->faker->date,
            'correo' => Str::random(10).'@gmail.com',
            'contrasena' => Hash::make("Hola123"),
        ];
    }
}
