<?php

namespace App\Models;

use App\Models\Employer;
use App\Models\JobFunction;
use App\Models\JobIndustry;
use App\Models\JobLocation;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['jobIndustry_id', 'jobFunction_id', 'jobLocation_id', 'employer_id', 'title', 'type', 'qualification', 'experience', 'level', 'salary_currency', 'monthly_salary', 'days_online', 'available_openings', 'summary', 'responsibilities', 'requirements'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function employer () {
        return $this->belongsTo(Employer::class, 'employer_id');
    }

    public function jobFunction () {
        return $this->belongsTo(JobFunction::class, 'jobFunction_id');
    }

    public function jobIndustry () {
        return $this->belongsTo(JobIndustry::class, 'jobIndustry_id');
    }

    public function jobLocation () {
        return $this->belongsTo(JobLocation::class, 'jobLocation_id');
    }


}
