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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained()->onDelete('cascade');
            $table->foreignId('jobIndustry_id');
            $table->foreignId('jobFunction_id');
            $table->foreignId('jobLocation_id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('type');
            $table->string('qualification');
            $table->string('experience');
            $table->string('level');
            $table->string('salary_currency');
            $table->string('monthly_salary');
            $table->integer('days_online');
            $table->string('available_openings');
            $table->text('summary');
            $table->longText('responsibilities');
            $table->longText('requirements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
