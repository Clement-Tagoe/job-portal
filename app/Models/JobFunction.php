<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobFunction extends Model
{
    use HasFactory;

    public function job() {
        return $this->hasMany(Job::class);
    }

    public function user() {
        return $this->hasMany(User::class);
    }

    public function workExperience() {
        return $this->hasMany(WorkExperience::class);
    }
}
