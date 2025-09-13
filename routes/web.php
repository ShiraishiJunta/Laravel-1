<?php

use App\Http\Controllers\landingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/welcome', [landingController::class, 'welcome']);