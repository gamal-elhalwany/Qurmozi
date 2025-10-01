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
        Schema::create('genre_series', function (Blueprint $table) {
            // المفتاح الأول: ربط التصنيف
            $table->foreignId('genre_id')->constrained()->onDelete('cascade');
            
            // المفتاح الثاني: ربط المسلسل
            $table->foreignId('series_id')->constrained()->onDelete('cascade');
            
            // تعريف المفتاح الأساسي المركب (يمنع تكرار الربط)
            $table->primary(['genre_id', 'series_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genre_series');
    }
};
