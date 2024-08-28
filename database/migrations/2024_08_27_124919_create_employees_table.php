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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('ci');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('birth_date')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->foreignId('position_id')->constrained()->onDelete('cascade'); // Clave foránea para la posición
            $table->foreignId('department_id')->constrained()->onDelete('cascade'); // Clave foránea para el departamento
            $table->date('hire_date'); // Fecha de contratación del empleado
            $table->decimal('salary', 10, 2); // Salario del empleado, con dos decimales
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Género del empleado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
