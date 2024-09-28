<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BreaksController;
use App\Http\Controllers\UserController;

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
Route::get('/', [HomeController::class, 'index']);

// 勤怠管理ページ
Route::get('/attendance', [AttendanceController::class, 'index']);

// ログインページ
Route::get('/login', [UserController::class, 'index']);

// 会員登録ページ
Route::get('/register', [UserController::class, 'index']);
