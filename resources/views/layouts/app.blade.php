<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>

    <script src="/js/jquery.js"></script>
    <script src="/js/slick.js"></script>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="preloader-wrapper">
        <div class="preloader"></div>
    </div>

    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
</body>

</html>
