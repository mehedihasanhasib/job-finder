<?php

use App\Http\Controllers\User\EducationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\WorkExperienceController;

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

        Route::controller(WorkExperienceController::class)->group(function () {
            Route::get('/add/exp', 'create')->name('add.work.exp');
        });

        Route::controller(EducationController::class)->group(function () {
            Route::get('/add/education', 'create')->name('add.education');
        });
    });
});

require __DIR__ . '/auth.php';
