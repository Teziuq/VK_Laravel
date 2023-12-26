<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PublicController;


Route::view('/login', 'auth.login')->name('login');
Route::post('/login', 'LoginController@login')->name('login');


Route::get('/', function () {
    return view('auth.login');
});

/**Route::middleware(['auth'])->group(function () {
    // Маршрут для отображения списка пабликов
    Route::get('/publics', [PublicController::class, 'index'])->name('publics.index');

    // Маршруты для добавления и сохранения нового паблика
    Route::get('/publics/create', [PublicController::class, 'create'])->name('publics.create');
    Route::post('/publics', [PublicController::class, 'store'])->name('publics.store');

    // Маршруты для редактирования и обновления существующего паблика
    Route::get('/publics/{public}', [PublicController::class, 'edit'])->name('publics.edit');
    Route::put('/publics/{public}', [PublicController::class, 'update'])->name('publics.update');

    // Маршрут для удаления паблика
    Route::delete('/publics/{public}', [PublicController::class, 'destroy'])->name('publics.destroy');
});*/

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});