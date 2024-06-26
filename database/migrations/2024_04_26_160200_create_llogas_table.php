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
        Schema::create('llogas', function (Blueprint $table) {
            $table->string('dni_client',9);
            $table->foreign('dni_client')->references('dni_client')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('matricula_auto',7);
            $table->foreign('matricula_auto')->references('matricula_auto')->on('autos')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['dni_client','matricula_auto']);
            $table->date('data_prestec');
            $table->date('data_devolucio');
            $table->string('lloc_devolucio',30);
            $table->float('preu_per_dia');
            $table->boolean('retorn_deposit_ple');
            $table->enum('asseguranca',['Franquicia fin 1000€','Franquicia fin 500€','Sense franquicia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llogas');
    }
};
