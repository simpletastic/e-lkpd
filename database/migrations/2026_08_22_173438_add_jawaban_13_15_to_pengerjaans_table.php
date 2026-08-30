<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pengerjaans', function (Blueprint $table) {
            $table->text('jawaban13')->nullable();
            $table->text('jawaban14')->nullable();
            $table->text('jawaban15')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pengerjaans', function (Blueprint $table) {
            $table->dropColumn([
                'jawaban13',
                'jawaban14',
                'jawaban15',
            ]);
        });
    }
};