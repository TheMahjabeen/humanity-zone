<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RootController;
use App\Http\Controllers\CreateProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RootController::class, 'homepage'])->name('home');
Route::get('/login', [RootController::class, 'login'])->name('login');
Route::post('/login', [RootController::class, 'login'])->name('login-post');
Route::get('/register', [RootController::class, 'register'])->name('register');
Route::post('/register', [RootController::class, 'register'])->name('register-post');

Route::middleware(['auth'])->group(function () {


    Route::get('/protected', [RootController::class, 'protected_rote']);

    Route::prefix('create-profile')->middleware('profile.created')->group(function () {
        Route::get('/hospital', [CreateProfileController::class, 'hospital'])->name('create-hospital-profile');
        Route::post('/hospital', [CreateProfileController::class, 'hospital'])->name('create-hospital-profile-post');

        Route::get('/doctor', [CreateProfileController::class, 'doctor'])->name('create-doctor-profile');
        Route::post('/doctor', [CreateProfileController::class, 'doctor'])->name('create-doctor-profile-post');
    });
});
