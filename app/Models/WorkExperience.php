<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jobIndustry_id',
        'jobFunction_id',
        'no_work_experience',
        'employer',
        'job_title',
        'job_level',
        'country',
        'monthly_salary',
        'work_type',
        'city',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
        'currently_work_here',
        'job_responsibilities',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jobIndustry() {
        return $this->belongsTo(JobIndustry::class, 'jobIndustry_id');
    }

    public function jobFunction() {
        return $this->belongsTo(JobFunction::class, 'jobFunction_id');
    }
}
