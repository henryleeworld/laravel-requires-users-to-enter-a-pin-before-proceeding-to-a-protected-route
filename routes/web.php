<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/', '/login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('require.pin')->name('home');
/*
Route::middleware('auth')->group(function () {
    Route::get('create/book', function () {
        return view('requirepin::pin.createbook');
    })->name('createBook');

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
*/