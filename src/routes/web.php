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
Route::get('/', [UsersController::class, 'showLoginForm'])->name('home');

// ログインページ（GET）
Route::get('/login', [UsersController::class, 'showLoginForm'])->name('login');

// ログイン処理（POST）
Route::post('/login', [UsersController::class, 'login'])->name('login.submit');

// 会員登録ページ（GET）
Route::get('/register', [UsersController::class, 'showRegisterForm'])->name('register');

// 会員登録処理（POST）
Route::post('/register', [UsersController::class, 'register'])->name('register.submit');

// 勤怠管理ページ（日付を含む）
Route::get('/attendance/{date}', [AttendanceController::class, 'show'])->name('attendance');