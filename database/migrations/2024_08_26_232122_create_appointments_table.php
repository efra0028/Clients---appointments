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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); // ID de la cita (autoincremental)
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade'); // ID del cliente (llave foránea a la tabla `clients`)
            $table->date('appointment_date'); // Fecha de la cita
            $table->text('address'); // Dirección de la cita
            $table->text('description')->nullable(); // Descripción de la cita
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};

