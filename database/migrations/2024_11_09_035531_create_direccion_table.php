<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->id();
            $table->integer('num_exterior');
            $table->integer('num_interior');
            $table->string('calle');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('estado');
            $table->string('pais');
            $table->string('codigo_postal');
            $table->integer('id_usuario1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion');
    }
};
