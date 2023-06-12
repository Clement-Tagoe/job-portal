<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobIndustry extends Model
{
    use HasFactory;

    public function job() {
        return $this->hasMany(Job::class);
    }

    public function employer() {
        return $this->hasMany(Employer::class);
    }
}
