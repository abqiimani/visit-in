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
        Schema::create('data_pengunjung', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('phone', 20);
            $table->string('asal_daerah');
            $table->string('kategori_pengunjung');
            $table->unsignedInteger('jumlah_pengunjung');
            $table->date('tanggal_kunjungan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengunjung');
    }
};