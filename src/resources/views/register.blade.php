@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="register-container">
        <h1 class="register-title">会員登録</h1>
        
        <!-- バリデーションエラーメッセージの表示 -->
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="名前" class="form-input" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="メールアドレス" class="form-input" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="パスワード" class="form-input">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="確認用パスワード" class="form-input">
            </div>
            <button type="submit" class="btn-submit">会員登録</button>
        </form>

        <p class="login-link">アカウントをお持ちの方はこちらから <a href="{{ route('login') }}">ログイン</a></p>
    </div>
@endsection
