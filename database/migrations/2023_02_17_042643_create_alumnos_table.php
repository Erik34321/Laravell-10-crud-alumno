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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('CURP')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('Primer_apellido')->nullable();
            $table->string('Segundo_apellido')->nullable();
            $table->date('Fecha_nacimiento')->nullable();
            $table->text('sexo')->nullable();
            $table->text('entidad_nacimiento')->nullable();
            $table->text('tutor')->nullable();
            $table->string('Otro')->nullable();

            $table->string('Calle')->nullable();
            $table->string('Numero_exterior')->nullable();
            $table->string('Numero_interior')->nullable();
            $table->string('Entre_calle')->nullable();
            $table->string('y_calle')->nullable();
            $table->string('Colonia')->nullable();
            $table->string('Codigo_postal')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
