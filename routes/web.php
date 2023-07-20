<?php

use App\Models\WorkExperience;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\WorkExperienceController;
use App\Models\Education;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::controller(RegisterController::class)->group(function () { 
    Route::get('/account/sign-up', 'index')->name('sign-up');
    Route::get('/account/employer/sign-up', 'createEmployer')->name('employer.sign-up');
    Route::get('/account/job-seeker/create', 'createJobSeeker')->name('job-seeker.sign-up');
});

//Show Login Form
Route::get('/account/login', [LoginController::class, 'login'])->name('login');
//Log User In
Route::post('/account/authenticate', [LoginController::class, 'authenticate']);
//Log User Out
Route::post('/account/logout', [LogoutController::class, 'logout'])->middleware(['auth:web,employer']);

Route::get('/job-seeker/profile', [UserController::class, 'profile'])->name('job-seeker.profile')->middleware('auth');
Route::get('/job-seeker/dashboard', [UserController::class, 'dashboard'])->name('job-seeker.dashboard')->middleware('auth');
Route::get('/job-seeker/employment-availability', [UserController::class, 'employmentAvailabilityEdit'])->middleware('auth');
Route::put('/job-seeker/employment-availability', [UserController::class, 'employmentAvailabilityUpdate'])->middleware('auth');
Route::get('/job-seeker/about-me', [UserController::class, 'aboutMeEdit'])->middleware('auth');
Route::put('/job-seeker/about-me/update', [UserController::class, 'aboutMeUpdate'])->middleware('auth');

Route::get('/job-seeker/experiences', [WorkExperienceController::class, 'index'])->middleware('auth');
Route::get('/job-seeker/experience/create', [WorkExperienceController::class, 'create'])->middleware('auth');
Route::post('/job-seeker/experience', [WorkExperienceController::class, 'store'])->middleware('auth');
Route::get('/job-seeker/experiences/{workExperience}/edit', [WorkExperienceController::class, 'edit'])->name('work-experience.edit')->middleware('auth');
Route::put('/job-seeker/experiences/{workExperience}', [WorkExperienceController::class, 'update'])->name('work-experience.update')->middleware('auth');
Route::delete('/job-seeker/experiences/{workExperience}', [WorkExperienceController::class, 'destroy'])->name('work-experience.destroy')->middleware('auth');

Route::get('/job-seeker/educations', [EducationController::class, 'index'])->middleware('auth');
Route::get('/job-seeker/education/create', [EducationController::class, 'create'])->middleware('auth');
Route::post('/job-seeker/education', [EducationController::class, 'store'])->middleware('auth');
Route::get('/job-seeker/educations/{education}/edit', [EducationController::class, 'edit'])->name('education.edit')->middleware('auth');
Route::put('/job-seeker/educations/{education}', [EducationController::class, 'update'])->name('education.update')->middleware('auth');
Route::delete('/job-seeker/educations/{education}', [EducationController::class, 'destroy'])->name('education.destroy')->middleware('auth');







Route::get('/job-seeker/associations', [UserController::class, 'associationsCreate'])->middleware('auth');
Route::get('/job-seeker/cerfitications', [UserController::class, 'certificationsCreate'])->middleware('auth');
Route::get('/job-seeker/cover-letter', [UserController::class, 'coverLetterCreate'])->middleware('auth');
Route::get('/job-seeker/resume', [UserController::class, 'resumeUpload'])->middleware('auth');


Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create')->middleware('auth:employer');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth:employer');
Route::get('/jobs/{job:slug}/edit', [JobController::class, 'edit'])->name('jobs.edit')->middleware('auth:employer');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update')->middleware('auth:employer');;
Route::get('/jobs/{job:slug}', [JobController::class, 'show'])->name('jobs.show');

Route::get('/employers', [EmployerController::class, 'index'])->name('employers.index');
Route::get('/employers/dashboard', [EmployerController::class, 'dashboard'])->name('employers.dashboard')->middleware('auth:employer');
Route::get('/employers/{employer:slug}/edit', [EmployerController::class, 'edit'])->name('employers.edit')->middleware('auth:employer');




