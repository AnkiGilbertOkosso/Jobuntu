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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained('employers')->onDelete('cascade');
            $table->string('job_title');
            $table->json('tags')->nullable();
            $table->string('job_role')->nullable();
            $table->decimal('min_salary', 8, 2)->nullable();
            $table->decimal('max_salary', 8, 2)->nullable();
            $table->string('salary_type')->nullable();
            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->string('job_type')->nullable();
            $table->integer('vacancies')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('job_level')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->boolean('is_remote')->default(false);
            $table->text('job_description')->nullable();
            $table->json('job_benefits')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
