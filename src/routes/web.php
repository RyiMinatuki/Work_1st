<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BreaksController;
use App\Http\Controllers\UsersController;

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

// ホームページ
Route::get('/', [HomeController::class, 'index'])->name('home');

// 勤怠管理ページ
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');

// ログインページ
Route::get('/login', [UsersController::class, 'showLoginForm'])->name('login');

// 会員登録ページ
Route::get('/register', [UsersController::class, 'showRegisterForm'])->name('register');