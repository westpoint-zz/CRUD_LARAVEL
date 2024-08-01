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
        Schema::create('materia', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->text('description');
            $table->integer('creditos');
            $table->enum('tipo', ['Basica', 'Formacion', 'Titulacion']); 
            $table->decimal('valor_hora', 8, 2); 
            $table->enum('estado', ['activo', 'inactivo']); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia');
    }
};
