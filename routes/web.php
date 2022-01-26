<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::get('dashboard', function () {
//    return view('dashboard');
//})->name('dashboard')->middleware('auth');

Route::get('dashboard', [PostController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/posts/create', [PostController::class, 'create'])->name('dashboard')->middleware('auth');

Route::post('/posts/store', [PostController::class, 'store'])->name('dashboard')->middleware('auth');

Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('dashboard')->middleware('auth');

Route::post('/posts/update/{id}', [PostController::class, 'update'])->name('dashboard')->middleware('auth');