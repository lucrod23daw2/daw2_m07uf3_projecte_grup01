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
        Schema::create('lloga', function (Blueprint $table) {
            $table->string('dni_client',9);
            $table->string('matricula_auto',7);
            $table->date('data_prestec');
            $table->date('data_devolucio');
            $table->string('lloc_devolucio',30);
            $table->float('preu_per_dia');
            $table->boolean('retorn_deposit_ple');
            $table->enum('asseguranca',['Franquicia fin 1000€','Franquicia fin 500€','Sense franquicia']);
            $table->primary(['dni_client','matricula_auto']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lloga');
    }
};
