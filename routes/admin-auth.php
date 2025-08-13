<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredAdminController::class, 'create'])
        ->name('admin.register');

    Route::post('register', [RegisteredAdminController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])
        ->name('admin.login');

    Route::post('login', [LoginController::class, 'store']);

//    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
//        ->name('password.request');

//    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
//        ->name('password.email');

//    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
//        ->name('password.reset');

//    Route::post('reset-password', [NewPasswordController::class, 'store'])
//        ->name('password.store');
});

Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    // Route::get('verify-email', EmailVerificationPromptController::class)
    //     ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //     ->middleware(['signed', 'throttle:6,1'])
    //     ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //     ->middleware('throttle:6,1')
    //     ->name('verification.send');

    // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //     ->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard',  'index')->name('dashboard');
        Route::get('profile', 'ProfileIndex')->name('profile');
        Route::patch('profile', 'ProfileUpdate')->name('profile.update');
        Route::put('password', 'PasswordUpdate')->name('password.update');
    });

    Route::controller(StudentController::class)->group(function () {
        Route::get('students/{user}','__invoke')->name('student');
        Route::post('students/search',  'search')->name('students.search');
    });

    Route::controller(BookController::class)->group(function () {
        Route::get('books',  'index')->name('books');
        Route::get('books/create',  'create')->name('books.create');
        Route::post('books', 'store')->name('books.store');
        Route::get('books/{book}/edit',  'edit')->name('books.edit');
        Route::patch('books/{book}',  'update')->name('books.update');
        Route::delete('books/{book}',  'destroy')->name('books.destroy');
    });

    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});




