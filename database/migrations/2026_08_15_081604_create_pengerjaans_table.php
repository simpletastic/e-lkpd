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
        Schema::create('pengerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kelas');
            $table->string('kelompok');
            $table->text('jawaban1')->nullable();
            $table->text('jawaban2')->nullable();
            $table->text('jawaban3')->nullable();
            $table->text('jawaban4')->nullable();
            $table->text('jawaban5')->nullable();
            $table->text('jawaban6')->nullable();
            $table->text('jawaban7')->nullable();
            $table->text('jawaban8')->nullable();
            $table->text('jawaban9')->nullable();
            $table->text('jawaban10')->nullable();
            $table->text('jawaban11')->nullable();
            $table->text('jawaban12')->nullable();
            $table->text('jawaban13')->nullable();
            $table->text('jawaban14')->nullable();
            $table->text('jawaban15')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengerjaans');
    }
};