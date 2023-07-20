<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'date_of_birth',
        'gender',
        'nationality',
        'country_code',
        'mobile_number',
        'highest_qualification',
        'current_jobFunction_id',
        'experience',
        'availability',
        'resume',
        'location_id',
        'preferred_jobFunction_id',
        'preferred_jobLocation_id',
        'email_verified_at',
        'professional_headline',
        'career_tips',
        'job_alerts',
        'work_type',
        'salary_currency',
        'salary_amount',
        'actively_looking_for_job',
        'display_profile',
        'willing_to_relocate',
        'photo',
        'about_me',
        'job_skills',
        'association',
        'association_role',
        'certificate_title',
        'certificate_type',
        'certificate_yearReceived',
        'cover_letter',
        'projects_title',
        'projects_link',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function applicants() {
        return $this->belongsToMany(Job::class, 'applicants');
    }

    public function workExperiences() {
        return $this->hasMany(WorkExperience::class);
    }

    public function educations() {
        return $this->hasMany(Education::class);
    }

    public function jobLocation () {
        return $this->belongsTo(JobLocation::class, 'location_id');
    }

    public function preferredJobLocation () {
        return $this->belongsTo(JobLocation::class, 'preferred_jobLocation_id');
    }

    public function currentJobFunction () {
        return $this->belongsTo(JobFunction::class, 'current_jobFunction_id');
    }

    public function preferredJobFunction () {
        return $this->belongsTo(JobFunction::class, 'preferred_jobFunction_id');
    }

}
