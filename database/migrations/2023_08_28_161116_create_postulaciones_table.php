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
        Schema::create('postulacion', function (Blueprint $table) {
            $table->bigIncrements('idPostulacion');
            $table->string('cargo');
            $table->string('documento');
            $table->string('nrdocumento');
            $table->string('correo');
            $table->string('medio');
            $table->string('departamento');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('nombres');
            $table->string('fechanac');
            $table->string('paisnac');
            $table->string('telefono');
            $table->string('aspsalarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulacion');
    }
};
