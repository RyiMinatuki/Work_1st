@extends('app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="login-container">
        <h1 class="login-title">ログイン</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" name="email" placeholder="メールアドレス" class="form-input">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="パスワード" class="form-input">
            </div>
            <button type="submit" class="btn-submit">ログイン</button>
        </form>
        <p class="register-text">アカウントをお持ちでない方はこちらから 
            <br><a class="register-link" href="{{ route('register') }}">会員登録</a>
        </p>
    </div>
@endsection
