<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Models\Employer;
use Illuminate\Support\Facades\Route;

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
});


Route::controller(RegisterController::class)->group(function () {
    
    Route::get('/account/sign-up', 'index')->name('sign-up');

    Route::get('/account/employer/sign-up', 'createEmployer')->name('employer.sign-up');

    Route::get('/account/job-seeker/create', 'createJobSeeker')->name('job-seeker.sign-up');
});





Route::get('/account/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job:slug}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::get('/jobs/{job:slug}', [JobController::class, 'show'])->name('jobs.show');

Route::get('/employers', [EmployerController::class, 'index'])->name('employers.index');
Route::get('/employers/{employer}/dashboard', [EmployerController::class, 'dashboard'])->name('employers.dashboard');



