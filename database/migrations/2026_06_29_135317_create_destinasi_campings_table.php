<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('destinasi_campings', function (Blueprint $table) {
        $table->id('id_lokasi'); 
        $table->string('gambar')->nullable(); 
        $table->string('nama_tempat'); 
        $table->text('fasilitas'); 
        $table->integer('biaya'); 
        $table->string('jam_operasional');
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('destinasi_campings');
}
};
