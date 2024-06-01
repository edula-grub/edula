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
        Schema::create('sertifandskils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('guru_id');
            $table->longText('dokumen_sertifikat');
            $table->longText('kredensial_sertifikat');
            $table->longText('skil');
            $table->string('level');
            $table->integer('diterima_oleh_sistem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifandskils');
    }
};
