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
        Schema::create('detalle_horas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('horas_id')->constrained('horas');
            $table->foreignId('dias_id')->constrained('dias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_horas');
    }
};
