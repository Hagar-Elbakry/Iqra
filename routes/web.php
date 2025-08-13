<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::controller(HomeController::class)->group(function () {
    Route::get('/', '__invoke')->name('home');
    Route::get('/books','index')->name('books.index');
    Route::get('/books/{book}',  'show')->name('books.show');
});

Route::controller(BorrowController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard',  'index')->name('dashboard');
    Route::post('/borrow/{book}', 'borrow')->name('borrow');
    Route::post('/return/{book}',  'return')->name('return');
});

Route::controller(ProfileController::class)->prefix('profile')->middleware('auth')->name('profile.')->group(function () {
    Route::get('/',  'edit')->name('edit');
    Route::patch('/',  'update')->name('update');
    Route::delete('/',  'destroy')->name('destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';

