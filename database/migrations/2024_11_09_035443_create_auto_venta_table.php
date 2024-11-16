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
        Schema::create('auto_venta', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->float('precio');
            $table->string('modelo');
            $table->string('marca');
            $table->string('color');
            $table->string('estatus');
            $table->integer('id_usuario1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_venta');
    }
};
