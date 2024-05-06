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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('cp_name');
            $table->string('cp_email')->unique();
            $table->string('cp_phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('zip_code');
            $table->string('description');
            $table->string('website');
            $table->boolean('isActivated')->default(false);
            $table->enum('employees_number', ['1-5', '5-20', '20-100', '100-1000', '1000+']);
            $table->date('establishing_date');
            $table->rememberToken();
            $table->string('cp_logo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
