<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');

Route::get('/login/admin', [AuthenticatedSessionController::class, 'showAdminLoginForm'])->middleware(['web','guest:admin']);
Route::get('/register/admin', [RegisteredUserController::class, 'showAdminRegistrationForm'])->middleware(['web','guest:admin']);
Route::post('/login/admin', [AuthenticatedSessionController::class, 'adminLogin'])->middleware(['web','guest:admin']);
Route::post('/logout/admin', [AuthenticatedSessionController::class, 'destroyAdmin'])->middleware(['web','auth:admin']);
Route::post('/register/admin', [RegisteredUserController::class, 'storeAdmin'])->middleware(['web','guest:admin']);
Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit')->middleware(['web','auth:admin']);
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['web','auth:admin'])->name('admin.dashboard');
Route::get('/admin/students/{user}', StudentController::class)->middleware(['web','auth:admin'])->name('admin.student');
Route::post('/admin/students/search', [StudentController::class, 'search'])->middleware(['web','auth:admin'])->name('admin.students.search');
Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books')->middleware(['web','auth:admin']);
Route::get('/admin/books/create', [BookController::class, 'create'])->middleware(['web','auth:admin'])->name('admin.books.create');
Route::post('/admin/books', [BookController::class, 'store'])->middleware(['web','auth:admin'])->name('admin.books.store');
Route::get('/admin/books/{book}/edit', [BookController::class, 'edit'])->middleware(['web','auth:admin'])->name('admin.books.edit');
Route::patch('/admin/books/{book}', [BookController::class, 'update'])->middleware(['web','auth:admin'])->name('admin.books.update');
Route::delete('/admin/books/{book}', [BookController::class, 'destroy'])->middleware(['web','auth:admin'])->name('admin.books.destroy');

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
