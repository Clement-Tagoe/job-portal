<?php

namespace App\Models;

use App\Models\Job;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    protected $guard = 'employer';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'jobIndustry_id', 
        'company_name', 
        'number_of_employees', 
        'type_of_employer', 
        'website', 
        'contact_person', 
        'notification_email', 
        'application_notifications', 
        'country_code', 
        'phone_number', 
        'country', 
        'address', 
        'username', 
        'position', 
        'first_name', 
        'last_name', 
        'personal_country_code', 
        'personal_phone_number', 
        'email', 
        'password', 
        'company_logo'
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

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'company_name'
            ]
        ];
    }
    public function jobs() {
        return $this->hasMany(Job::class, 'employer_id');
    }

    public function jobIndustry () {
        return $this->belongsTo(JobIndustry::class, 'jobIndustry_id');
    }
}
