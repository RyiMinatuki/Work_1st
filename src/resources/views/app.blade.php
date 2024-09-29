<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <title>Atte</title>
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilites">
                <a href="" class="header__logo">
                    Atte
                </a>
                @if (!in_array(Route::currentRouteName(), ['login', 'register']))
                    <nav>
                        <ul class="header-nav">
                            <li class="header-nav__item">
                                <a href="" class="header-nav__link">
                                   ホーム
                                </a>
                                <a href="" class="header-nav__link">
                                    日付一覧
                                </a>
                                <a href="" class="header-nav__link">
                                    ログアウト
                                </a>
                            </li>
                        </ul>
                    </nav>
                @endif
            </div>
        </div>
    </header>
    
    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <p>&copy; 2024 Atte, inc.</p>
        </div>
    </footer>
</body>

</html>