<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // ユーザーモデル
use Illuminate\Support\Facades\Hash; // パスワードのハッシュ化
use Illuminate\Support\Facades\Auth; // ログイン処理

class UsersController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // ログインページを表示
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // ログイン成功したら、勤怠管理ページにリダイレクト
            return redirect()->route('attendance', ['date' => now()->toDateString()]);
        }

        // ログイン失敗したらエラーメッセージ
        return back()->withErrors(['login' => 'ログイン情報が間違っています']);
    }

    public function showRegisterForm()
    {
        return view('register'); // 会員登録ページを表示
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // ユーザー作成
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // パスワードをハッシュ化
        ]);

        return redirect()->route('login')->with('success', '登録が完了しました');
    }
}
