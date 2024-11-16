<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\autoCompra;
use App\Models\autoVenta;
use App\Models\direccion;
use App\Models\usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //product::factory()->count(10)->create();
        autoCompra::factory()->count(10)->create();
        autoVenta::factory()->count(10)->create();
        direccion::factory()->count(10)->create();
        usuario::factory()->count(10)->create();
        
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
