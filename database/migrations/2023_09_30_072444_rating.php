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
        Schema::create('rating', function (Blueprint $table) {
            $table->id('id_rating');
            $table->timestamps();
            $table->unsignedBigInteger('id_movie');
            $table->datetime('tgl_rating'); // Ubah 'DATETIME' menjadi 'datetime' dalam huruf kecil
            $table->string('nama_user'); // Ubah 'VARCHAR' menjadi 'string' dalam huruf kecil
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating');
    }
};
