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
        Schema::create('cuar_comp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuartel_id')->nullable();
            $table->foreign('cuartel_id')->references('id')->on('cuartels')->onDelete('cascade');
            
            $table->unsignedBigInteger('Compañia_id')->nullable();
            $table->foreign('Compañia_id')->references('id')->on('compañias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuar_comp');
    }
};
