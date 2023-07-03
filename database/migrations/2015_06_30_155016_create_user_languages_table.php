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
        Schema::create('user_languages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lang_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('lang_id')->references('id')->on('languages');
            
            $table->enum('level', ['A1', 'A2','B1', 'B2','C1', 'C2'])->nullable();
           
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('user_skills');
    }
};
