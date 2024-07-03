<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::post('/users/import', [UsersController::class, 'import'])->name('users.import');
Route::get('/users/export', [UsersController::class, 'export'])->name('users.export');
