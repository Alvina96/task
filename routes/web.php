<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::post('/change-theme', [ThemeController::class, 'changeTheme'])->name('change.theme');
