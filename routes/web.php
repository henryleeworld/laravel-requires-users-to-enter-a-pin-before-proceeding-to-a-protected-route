<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('require.pin')->name('home');
