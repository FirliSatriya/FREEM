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
        Schema::create('comment', function (Blueprint $table) {
            $table->id('id_comment');
            $table->timestamps();
            $table->text('isi_comment');
            $table->datetime('tgl_comment'); 
            $table->foreignId('id_movie')->constarined('movie');// 'DATETIME' diubah menjadi huruf kecil
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
