<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');




Route::get('/books',[HomeController::class,'index'])->name('books.index');
Route::get('/books/{book}', [HomeController::class, 'show'])->name('books.show');
Route::get('/dashboard', [BorrowController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/borrow/{book}', [BorrowController::class, 'borrow'])->middleware('auth')->name('borrow');
Route::post('/return/{book}', [BorrowController::class, 'return'])->middleware('auth')->name('return');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';

