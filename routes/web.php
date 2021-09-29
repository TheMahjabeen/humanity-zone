<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RootController;
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


Route::get('/protected', [RootController::class, 'protected_rote']);