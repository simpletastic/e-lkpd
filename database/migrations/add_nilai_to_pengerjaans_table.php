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
        Schema::table('pengerjaans', function (Blueprint $table) {
            $table->integer('nilai1')->nullable();
            $table->integer('nilai2')->nullable();
            $table->integer('nilai3')->nullable();
            $table->integer('nilai4')->nullable();
            $table->integer('nilai5')->nullable();
            $table->integer('nilai6')->nullable();
            $table->integer('nilai7')->nullable();
            $table->integer('nilai8')->nullable();
            $table->integer('nilai9')->nullable();
            $table->integer('nilai10')->nullable();
            $table->integer('nilai11')->nullable();
            $table->integer('nilai12')->nullable();
            $table->integer('nilai13')->nullable();
            $table->integer('nilai14')->nullable();
            $table->integer('nilai15')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengerjaans', function (Blueprint $table) {
            $table->dropColumn([
                'nilai1',
                'nilai2',
                'nilai3',
                'nilai4',
                'nilai5',
                'nilai6',
                'nilai7',
                'nilai8',
                'nilai9',
                'nilai10',
                'nilai11',
                'nilai12',
                'nilai13',
                'nilai14',
                'nilai15',
            ]);
        });
    }
};