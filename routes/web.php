<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return redirect()->route('admin.home');
})->name('home');

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => ['auth'],
], function () {

    Route::get('/', function() {
        return view('home');
    })->name('home');

    Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/quotes', [QuoteController::class, 'index'])->name('quotes.index');

});
