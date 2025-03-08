<?php

use App\Http\Controllers\User\EducationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\WorkExperienceController;

require __DIR__ . "/recruiter.php";

Route::get('/', function () {
    return view('user.home');
})->name('home');

Route::get('jobs', function () {
    return view('user.jobs');
})->name('jobs');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => "/profile", 'as' => 'profile.'], function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/', 'edit')->name('edit');
            Route::patch('/', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });

        Route::resource('/work-exp', WorkExperienceController::class);
        // Route::controller(WorkExperienceController::class)->group(function () {
        //     Route::get('/add/exp', 'create')->name('work.exp');
        //     Route::post('/add/exp/store', 'store')->name('work.exp.store');
        // });

        Route::controller(EducationController::class)->group(function () {
            Route::get('/add/education', 'create')->name('education');
            Route::post('/add/education/store', 'store')->name('education.store');
        });
    });
});

require __DIR__ . '/auth.php';
