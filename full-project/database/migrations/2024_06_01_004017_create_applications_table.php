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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('job_listings');
            $table->foreignId('candidate_id')->constrained('candidates');
            $table->date('application_date');
            $table->enum('status', ['Applied', 'In Review', 'Interview', 'Offered', 'Rejected'])->default('Applied');
            $table->text('cover_letter')->nullable();
            $table->string('resume_path')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
