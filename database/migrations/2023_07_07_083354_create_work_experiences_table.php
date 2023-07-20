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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('jobIndustry_id');
            $table->foreignId('jobFunction_id');
            $table->boolean('no_work_experience')->default(false)->nullable();
            $table->string('employer');
            $table->string('job_title');
            $table->string('job_level');
            $table->string('country');
            $table->string('monthly_salary');
            $table->string('work_type');
            $table->string('city');
            $table->string('start_month');
            $table->string('start_year');
            $table->string('end_month');
            $table->string('end_year');
            $table->boolean('currently_work_here')->default(false)->nullable();
            $table->longText('job_responsibilities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
