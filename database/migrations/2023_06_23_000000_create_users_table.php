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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('current_jobFunction_id');
            $table->foreignId('location_id')->nullable();
            $table->foreignId('preferred_jobFunction_id')->nullable();
            $table->foreignId('preferred_jobLocation_id')->nullable();           
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('nationality');
            $table->string('country_code');
            $table->string('mobile_number');
            $table->string('professional_headline')->nullable();
            $table->string('highest_qualification');
            $table->string('experience');
            $table->string('availability');
            $table->boolean('career_tips')->default(false)->nullable();
            $table->boolean('job_alerts')->default(false)->nullable();
            $table->string('work_type')->nullable();
            $table->string('salary_currency')->nullable();
            $table->string('salary_amount')->nullable();
            $table->boolean('actively_looking_for_job')->default(false)->nullable();
            $table->boolean('display_profile')->default(false)->nullable();
            $table->boolean('willing_to_relocate')->default(false)->nullable();
            $table->string('resume')->nullable();
            $table->string('photo')->nullable();
            $table->longText('about_me')->nullable();
            $table->string('job_skills')->nullable();
            $table->string('association')->nullable();
            $table->string('association_role')->nullable();
            $table->string('certificate_title')->nullable();
            $table->string('certificate_type')->nullable();
            $table->string('certificate_yearReceived')->nullable();
            $table->longText('cover_letter')->nullable();
            $table->string('projects_title')->nullable();
            $table->string('projects_link')->nullable();
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
