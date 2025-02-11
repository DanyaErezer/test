@extends('layout')

@section('title')Главная страница@endsection


@section('main_content')
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Путешествия из Воронежа</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Подключение собственного стиля -->
</head>
<body>
<!-- Главная секция с изображением и текстом -->
<section class="hero-section">
    <div class="container text-center text-white">
        <h1 class="hero-title">НЕСКУЧНЫЙ ДЕНЬ</h1>
        <p class="hero-subtitle">Путешествия из Воронежа</p>
        <p class="hero-description">Крупнейшее сообщество путешественников в Черноземье</p>
        <a href="#tours" class="btn btn-primary hero-btn">ХОЧУ С ВАМИ</a>
    </div>
</section>

<!-- Блок с турами -->
<section id="tours" class="tours-section py-5">
    <div class="container text-center">
        <h2 class="section-title">СМОТРЕТЬ ТУРЫ</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="tour-card">
                    <img src="tour1.jpg" alt="Тур 1" class="img-fluid">
                    <h3>Тур по Черноземью</h3>
                    <p>Необычные маршруты, интересные места.</p>
                    <a href="#" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tour-card">
                    <img src="tour2.jpg" alt="Тур 2" class="img-fluid">
                    <h3>Тур в Крым</h3>
                    <p>Морские побережья и живописные виды.</p>
                    <a href="#" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tour-card">
                    <img src="tour3.jpg" alt="Тур 3" class="img-fluid">
                    <h3>Тур в Европу</h3>
                    <p>Европейские города и культура.</p>
                    <a href="#" class="btn btn-secondary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Блок с бронированием отелей -->
<section id="hotels" class="hotels-section bg-light py-5">
    <div class="container text-center">
        <h2 class="section-title">ЗАБРОНИРОВАТЬ ОТЕЛЬ</h2>
        <p class="section-subtitle">Мы поможем выбрать лучший отель для вашего отдыха.</p>
        <a href="#" class="btn btn-primary">Забронировать отель</a>
    </div>
</section>


</body>
</html>


@endsection
