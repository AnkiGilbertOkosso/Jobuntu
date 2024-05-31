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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('logo')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('company_name')->nullable();
            $table->text('about_us')->nullable();
            $table->string('organization_type')->nullable();
            $table->string('industry_types')->nullable();
            $table->string('team_size')->nullable();
            $table->date('year_of_establishment')->nullable();
            $table->string('company_website')->nullable();
            $table->json('social_links')->nullable();
            $table->string('map_location')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
