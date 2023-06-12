<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobLocation extends Model
{
    use HasFactory;

    public function job() {
        return $this->hasMany(Job::class);
    }
}
