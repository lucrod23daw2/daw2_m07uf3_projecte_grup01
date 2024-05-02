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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('dni_client',9)->unique();
            $table->primary('dni_client');
            $table->string('nom_cognoms',50);
            $table->integer('edat');
            $table->integer('telefon');
            $table->string('adreca',30);
            $table->string('ciutat',30);
            $table->string('pais',30);
            $table->string('email',30);
            $table->string('num_permis_conduccio');
            $table->integer('punts_permis_conduccio');
            $table->enum('tipus_targeta', ['Dèbit', 'Crèdit']);
            $table->integer('num_targeta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
