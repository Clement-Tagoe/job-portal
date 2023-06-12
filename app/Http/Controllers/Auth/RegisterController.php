<?php

namespace App\Http\Controllers\Auth;

use App\Models\Employer;
use App\Models\JobIndustry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployerRequest;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.sign-up');
    }

    public function createEmployer () {
        return view('auth.employer-create');
    }

    public function createJobSeeker () {
        return view('auth.job-seeker-create');
    }
}
