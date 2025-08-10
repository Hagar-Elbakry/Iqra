<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\ProfileController;

Route::get('/', HomeController::class)->name('home');

Route::get('/admin', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/books',[HomeController::class,'index'])->name('books.index');
Route::get('/books/{book}', [HomeController::class, 'show'])->name('books.show');
Route::get('/dashboard', [BorrowController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/borrow/{book}', [BorrowController::class, 'borrow'])->name('borrow');
Route::post('/return/{book}', [BorrowController::class, 'return'])->name('return');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
