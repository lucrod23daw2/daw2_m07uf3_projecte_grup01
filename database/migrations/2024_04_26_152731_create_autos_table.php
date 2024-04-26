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
        Schema::create('autos', function (Blueprint $table) {
            $table->string('matricula_auto',7);
            $table->primary('matricula_auto');
            $table->string('num_bastidor',17);
            $table->string('marca',20);
            $table->string('model',20);
            $table->string('color',20);
            $table->integer('places');
            $table->integer('portes');
            $table->string('gran_maleter',20);
            $table->enum('combustible',['gasolina','diesel','electric']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
