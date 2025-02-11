<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


</head>
<body>
<header>
    <div class="top-header">
        <div class="container">
            <h1>Trvlilch</h1>
        </div>
        <div class="social-icons" >
            <a href="https://t.me/username" target="_blank">
                <img src="/images/телеграм.svg" alt="Telegram">
            </a>
            <a href="https://vk.com/club229293452" target="_blank">
                <img src="/images/vk.svg" alt="VK">
            </a>
            <a href="https://www.instagram.com/username" target="_blank">
                <img src="/images/instagram.svg" alt="Instagram">
            </a>
        </div>

    </div>
    <nav class="main-header">
        <div class="container">
            <h1 class="logo">Trvlilch</h1>
            <ul class="nav-menu">
                <li><a href="/">Главная</a></li>
                <li><a href="/about">О нас</a></li>
                <li><a href="/travel">Путешествия</a></li>
                <li><a href="/contact">Контакты</a></li>
                <li><a href="#">Фотографии</a></li>
            </ul>
        </div>
    </nav>
</header>


</body>
</html>

@yield('main_content')
