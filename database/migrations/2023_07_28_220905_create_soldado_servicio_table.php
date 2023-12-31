<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soldado_servicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('soldado_id')->nullable();
            $table->foreign('soldado_id')->references('id')->on('soldados')->onDelete('cascade');
            
            $table->unsignedBigInteger('servicio_id')->nullable();
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

            $table->date('fecha');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldado_servicio');
    }
};
