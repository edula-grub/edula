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
        Schema::create('bidrequests', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->integer('siswa_id')->nullable();
            $table->integer('guru_id')->nullable();
            $table->text('nama_mapel')->nullable();
            $table->longText('deskripsi_kebutuhan')->nullable();
            $table->dateTime('jadwal')->nullable();
            $table->float('harga_bider_terpilih')->nullable();
            $table->longText('status')->nullable();
            $table->longText('review')->nullable();
            $table->longText('komentar_guru_ke_siswa')->nullable();
            $table->longText('komen_siswa_ke_guru')->nullable();
            $table->integer('rating_guru_ke_siswa')->nullable();
            $table->integer('rating_siswa_ke_guru')->nullable();
            $table->longText('taskpoinlain')->nullable();
            $table->longText('zoomlink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidrequests');
    }
};
