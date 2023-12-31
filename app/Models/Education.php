<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'school_name',
        'minimum_qualification',
        'qualification',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
        'still_studying_here',
        'description',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
