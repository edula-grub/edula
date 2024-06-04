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
            $table->longText('document_sertificate');
            $table->longText('credential_sertificate');
            $table->longText('skill');
            $table->string('level');
            $table->integer('status');
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
