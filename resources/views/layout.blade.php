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
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>  //иконка
        <span class="fs-4">Trvlilch</span>
    </a>

    <ul class="nav nav-pills" style="">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
        <li class="nav-item"><a href="#" class="nav-link">О нас</a></li>
    </ul>
</header>

</body>
</html>

@yield('main_content')
