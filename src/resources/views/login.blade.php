@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="login-container">
        <h1 class="login-title">ログイン</h1>
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <label for="email">メールアドレス</label>
                <input type="email" name="email" required>

                <label for="password">パスワード</label>
                <input type="password" name="password" required>

                <button type="submit">ログイン</button>
                    <p class="register-link">アカウントをお持ちでない方はこちらから 
                        <a href="">会員登録</a>
                    </p>
            </form>
    </div>
@endsection
