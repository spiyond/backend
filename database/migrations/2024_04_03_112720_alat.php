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
        Schema::create('alat', function(Blueprint $table) {
            $table->id('alat_id');
            $table->string('alat_nama', 150);
            $table->unsignedBigInteger('alat_kategori_id');
            $table->string('alat_deskripsi', 255);
            $table->integer('alat_hargaperhari');
            $table->integer('alat_stok')->default(0);
            $table->timestamps();

            $table->foreign('alat_kategori_id')->references('kategori_id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat');
    }
};
