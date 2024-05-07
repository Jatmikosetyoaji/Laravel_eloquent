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
        Schema::create('u_products', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->integer('Harga');
            $table->integer('Stok');
            $table->float('Berat');
            $table->text('Gambar');
            $table->enum('Kondisi',['Baru','Bekas']);
            $table->text('Deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_products');
    }
};
