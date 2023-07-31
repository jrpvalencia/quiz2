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
        Schema::create('soldados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('grado');

            $table->unsignedBigInteger('cod_CE');
            $table->foreign('cod_CE')->references('id')->on('cuerpo_esps')->onDelete('cascade');

            $table->unsignedBigInteger('num_comp');
            $table->foreign('num_comp')->references('id')->on('compañias')->onDelete('cascade');

            $table->unsignedBigInteger('cod_cuartel');
            $table->foreign('cod_cuartel')->references('id')->on('cuartels')->onDelete('cascade');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldados');
    }
};
