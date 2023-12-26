<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\DashboardController;

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');    

    // For example:
    Route::get('/publics', [PublicController::class, 'index'])->name('publics.index');
    Route::get('/contests', [ContestController::class, 'index'])->name('contests.index');
});

// Example: other non-authenticated routes
Route::get('/publics', [PublicController::class, 'index'])->name('publics.index');
Route::get('/contests', [ContestController::class, 'index'])->name('contests.index');
