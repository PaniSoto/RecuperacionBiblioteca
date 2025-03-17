<?php

use App\Http\Controllers\ForHireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('forHires', ForHireController::class);
Route::get('/forHires/destroy/{forHire}', [ForHireController::class, 'destroy'])->name('forHires.destroy');
// Route::post('/forHires', [ForHireController::class, 'store'])->name('forHires.store');
// Route::put('/forHires/create', [ForHireController::class, 'create'])->name('forHires.create');
// Route::get('/forHires/edit/{forHire}', [ForHireController::class, 'edit'])->name('forHires.edit');
// Route::put('/forHires/{forHire}', [ForHireController::class, 'update'])->name('forHires.update');
// Route::get('/forHires/show/{forHire}',[ForHireController::class, 'show'])->name('forHires.show');

Route::resource('readers', App\Http\Controllers\ReaderController::class);
Route::get('/readers/destroy/{reader}', [App\Http\Controllers\ReaderController::class, 'destroy'])->name('readers.destroy');
// Route::post('/readers', [App\Http\Controllers\ReaderController::class, 'store'])->name('readers.store');
// Route::put('/readers/create', [App\Http\Controllers\ReaderController::class, 'create'])->name('readers.create');
// Route::get('/readers/edit/{reader}', [App\Http\Controllers\ReaderController::class, 'edit'])->name('readers.edit');
// Route::put('/readers/{reader}', [App\Http\Controllers\ReaderController::class, 'update'])->name('readers.update');
// Route::get('/readers/show/{reader}',[App\Http\Controllers\ReaderController::class, 'show'])->name('readers.show');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
