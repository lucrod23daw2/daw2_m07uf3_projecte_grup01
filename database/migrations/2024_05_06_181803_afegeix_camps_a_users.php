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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('tipus', ['treballador', 'cap de departament'])->after('password')->default('treballador');
            $table->date('darrera_entrada')->after('tipus')->nullable();
            $table->date('darrera_sortida')->after('darrera_entrada')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('tipus');
            $table->dropColumn('darrera_entrada');
            $table->dropColumn('darrera_sortida');
        });
    }
};
