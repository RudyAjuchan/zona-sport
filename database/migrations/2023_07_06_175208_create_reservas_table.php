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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dpi');
            $table->string('telefono');
            $table->string('correo');
            $table->string('nit')->nullable();
            $table->date('fecha');
            $table->integer('tipo_pago');
            $table->integer('estado');
            $table->time('h_inicio');
            $table->time('h_final');
            $table->integer('luz');
            $table->decimal('total',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
