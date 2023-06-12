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
            $table->foreignId('jobIndustry_id');
            $table->string('company_name');
            $table->string('slug')->nullable();
            $table->string('number_of_employees');
            $table->string('type_of_employer');
            $table->string('website');
            $table->string('contact_person');
            $table->string('notification_email')->nullable();
            $table->string('application_notifications')->nullable();
            $table->string('country_code');
            $table->string('phone_number');
            $table->string('country');
            $table->string('address');
            $table->string('username')->nullable();
            $table->string('position');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('personal_country_code');
            $table->string('personal_phone_number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('company_logo')->nullable();
            $table->rememberToken();
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
