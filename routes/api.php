<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('v1/sample/books')->group(function () {
        // These APIs require a user's pin before requests are processed
        Route::middleware(['require.pin'])->group(function () {
            Route::post('/', [\Ikechukwukalu\Requirepin\Controllers\BookController::class,
                'createBook'])->name('createBookTest');
            Route::delete('{id}', [\Ikechukwukalu\Requirepin\Controllers\BookController::class,
                'deleteBook'])->name('deleteBookTest');
        });
    });
});
