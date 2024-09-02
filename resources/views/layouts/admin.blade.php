<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Admin Panel') }}</title>
    <script src="/js/jquery.js"></script>
    <script src="/js/slick.js"></script>
    @vite(['resources/scss/admin.scss', 'resources/js/admin.js'])

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="{{ url('/admin') }}">Admin Panel</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="display: ruby !important;">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">На сайт</a>
                        <a class="nav-link" href="{{ route('products.index') }}">Товары</a>
                        <a class="nav-link" href="{{ route('admin.submissions') }}">Заявки</a>
                    </li>
                    <!-- Другие ссылки навигации можно добавить здесь -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>

</html>