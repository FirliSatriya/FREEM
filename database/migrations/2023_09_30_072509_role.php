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
        Schema::create('role', function (Blueprint $table) { // Ubah 'role' menjadi 'roles'
            $table->id('id_role');
            $table->string('nama_role'); // Ubah 'VARCHAR' menjadi 'string'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role'); // Ubah 'role' menjadi 'roles
    }
};


