<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;


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
