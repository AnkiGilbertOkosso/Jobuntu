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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('full_name')->nullable();
            $table->string('title')->nullable();
            $table->text('resume')->nullable();
            $table->string('skills')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->text('biography')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('marital_status')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('personal_website')->nullable();
            $table->string('social_link')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
