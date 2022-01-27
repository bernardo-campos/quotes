<?php

use App\Http\Controllers\Admin\AuthorController as AdminAuthor;
use App\Http\Controllers\Admin\QuoteController as AdminQuote;

use App\Http\Controllers\Guest\AuthorController as GuestAuthor;
use App\Http\Controllers\Guest\QuoteController as GuestQuote;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.welcome');
});

Route::get('/home', function() {
    return redirect()->route('admin.home');
})->name('home');

Route::group([
    'as' => 'guest.',
], function () {
    Route::get('/authors', [GuestAuthor::class, 'index'])->name('authors.index');
    Route::get('/authors/{author}', [GuestAuthor::class, 'show'])->name('authors.show');
    Route::get('/quotes', [GuestQuote::class, 'index'])->name('quotes.index');
});


Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => ['auth'],
], function () {

    Route::get('/', function() {
        return view('home');
    })->name('home');

    Route::get('/authors', [AdminAuthor::class, 'index'])->name('authors.index');
    Route::get('/quotes', [AdminQuote::class, 'index'])->name('quotes.index');

});
