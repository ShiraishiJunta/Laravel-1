<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/welcome', [landingController::class, 'welcome']);