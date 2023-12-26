<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/', function () {
    return view('auth.login');
});