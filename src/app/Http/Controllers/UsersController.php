<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // ログインページのテンプレートを表示
        return view('login'); // 'login' は login.blade.php に対応
    }

    public function index()
    {
        // 会員登録ページのテンプレートを表示
        return view('register'); // 'register' は register.blade.php に対応
    }
}
