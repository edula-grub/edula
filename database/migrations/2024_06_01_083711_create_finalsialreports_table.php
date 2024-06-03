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
        Schema::create('finalsialreports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('task1');
            $table->string('task5');
            $table->string('task6');
            $table->string('task2');
            $table->string('task3');
            $table->string('task4');
            $table->string('task7');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finalsialreports');
    }
};
