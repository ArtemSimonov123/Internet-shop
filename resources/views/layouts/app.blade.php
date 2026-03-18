<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Internet-shop')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Internet-shop</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Головна</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Про проєкт</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Вхід</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Реєстрація</a>
                        </li>
                    @endif
                @endguest

                @auth
                    <li class="nav-item">
                        <span class="nav-link text-warning">
                            {{ Auth::user()->name }}
                        </span>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="mb-0">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link text-decoration-none" style="border: none;">
                                Вихід
                            </button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<header class="py-4">
    <div class="container">
        <h1 class="h3 mb-0">@yield('page_title', 'Сторінка')</h1>
    </div>
</header>

<main class="flex-fill pb-5">
    <div class="container">
        @yield('content')
    </div>
</main>

<footer class="bg-dark text-white py-3">
    <div class="container d-flex justify-content-between small">
        <span>© {{ date('Y') }} Internet-shop</span>
        <span>Laravel навчальний проєкт</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>