<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index'])->name('contact.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::delete('/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');
    Route::get('/show/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::patch('/update/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
});

require __DIR__.'/auth.php';
