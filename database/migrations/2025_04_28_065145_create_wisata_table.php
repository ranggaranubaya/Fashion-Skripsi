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
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata');
            $table->string('lokasi_wisata');
            $table->string('kode_wisata');
            $table->string('kategori_wisata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
