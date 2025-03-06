<?php

use Illuminate\Support\Facades\Route;

Route::domain('recruiter.localhost')->group(function () {
    Route::get('/', function () {
        echo "<h1>Recruiter Domain</h1><p>This is the domain for recruiter</p>";
    });
});
