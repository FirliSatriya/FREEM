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
        Schema::create('movie', function (Blueprint $table) {
            $table->id('id_movie');
            $table->timestamps();
            $table->string('judul_movie');
            $table->integer('tahun_movie');
            $table->string('genre_movie');
            $table->text('sinopsis_movie');
            $table->integer('durasi_movie');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
