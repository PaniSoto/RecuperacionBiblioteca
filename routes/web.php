<?php

use App\Http\Controllers\ForHireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('forHires', ForHireController::class);
Route::post('/forHires', [ForHireController::class, 'store'])->name('forHires.store');
Route::put('/forHires/create', [ForHireController::class, 'create'])->name('forHires.create');
Route::get('/forHires/destroy/{forHire}', [ForHireController::class, 'destroy'])->name('forHires.destroy');
Route::get('/forHires/edit/{forHire}', [ForHireController::class, 'edit'])->name('forHires.edit');
Route::put('/forHires/{forHire}', [ForHireController::class, 'update'])->name('forHires.update');
Route::get('/forHires/show/{forHire}',[ForHireController::class, 'show'])->name('forHires.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
