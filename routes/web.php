<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ForHireController;
use App\Http\Controllers\ReaderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('forHires', ForHireController::class);
Route::get('/forHires/destroy/{forHire}', [ForHireController::class, 'destroy'])->name('forHires.destroy');


Route::resource('readers', ReaderController::class);
Route::get('/readers/destroy/{reader}', [App\Http\Controllers\ReaderController::class, 'destroy'])->name('readers.destroy');

Route::resource('books', BookController::class);
Route::get('/books/destroy/{book}', [App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
