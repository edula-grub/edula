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
            $table->bigIncrements('id');
            $table->integer('siswa_id');
            $table->integer('guru_id');
            $table->text('nama_mapel');
            $table->longText('deskripsi_kebutuhan');
            $table->dateTime('jadwal');
            $table->float('harga_bider_terpilih');
            $table->longText('status');
            $table->longText('review');
            $table->longText('komentar_guru_ke_siswa');
            $table->longText('komen_siswa_ke_guru');
            $table->integer('rating_guru_ke_siswa');
            $table->integer('rating_siswa_ke_guru');
            $table->longText('taskpoinlain');
            $table->longText('zoomlink');
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
