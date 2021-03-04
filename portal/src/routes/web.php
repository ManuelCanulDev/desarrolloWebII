<?php

use App\Http\Middleware\Checktoken;
use App\Http\Middleware\checkStartedSession;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/makan', function () {
    return view('makan');
});

Route::get('/asd', function () {
    return view('makan');
});

