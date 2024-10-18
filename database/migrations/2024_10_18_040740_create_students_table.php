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
        Schema::create('students', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->string('nis', 255);
            $table->string('name', 255);
            $table->unsignedBigInteger('rombel_id');
            $table->unsignedBigInteger('rayon_id');
            $table->timestamps();
        
            $table->foreign('rombel_id')->references('id')->on('rombels')->onDelete('cascade');
            $table->foreign('rayon_id')->references('id')->on('rayons')->onDelete('cascade');
        });                
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
