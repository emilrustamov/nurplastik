<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="/js/jquery.js"></script>
    <script src="/js/slick.js"></script>
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div>
        <header class="container vertical-line px-4">
            <nav class="navbar navbar-light sticky-top">
                <div class="container d-flex justify-content-between p-0" style="flex-wrap:initial">
                    <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
                    <!-- Кнопка offcanvas, показывается только на мобильных устройствах -->
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Offcanvas меню, показывается только на мобильных устройствах -->
                    <div class="offcanvas offcanvas-end text-bg-light d-md-none" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Обычное горизонтальное меню, показывается только на экранах шире 768px -->
                    <div class="collapse navbar-collapse d-none d-md-flex justify-content-end">
                        <ul class="navbar-nav mb-2 mb-lg-0" style="flex-direction: row">
                            {{-- <li class="nav-item mx-2">
                                <a class="nav-link active" aria-current="page" href="#">Главная</a>
                            </li> --}}
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#aboutus">{{ __('translation.menu_about') }}</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#services">{{ __('translation.menu_services') }}</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#products">{{ __('translation.menu_products') }}</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#contacts">{{ __('translation.menu_contacts') }}</a>
                            </li>
                            <div class="dropdown d-flex">
                                @php
                                $currentLocale = app()->getLocale();
                                $flagIcons = [
                                'en' => 'img/eng.svg',
                                'tm' => 'img/tkm.svg',
                                'ru' => 'img/ru.svg'
                                ];
                                $currentFlag = $flagIcons[$currentLocale];
                                @endphp

                                <a href="#"><img class="flag-icon" src="{{ asset($currentFlag) }}"
                                        alt="Current Language"></a>
                                <div class="dropdown-content">
                                    <a href="{{ url('en') }}">
                                        <img class="flag-icon" src="{{ asset('img/eng.svg') }}" alt="English"> English
                                    </a>
                                    <a href="{{ url('tm') }}">
                                        <img class="flag-icon" src="{{ asset('img/tkm.svg') }}" alt="Turkmen"> Türkmen
                                    </a>
                                    <a href="{{ url('ru') }}">
                                        <img class="flag-icon" src="{{ asset('img/ru.svg') }}" alt="Russian"> Русский
                                    </a>
                                </div>
                            </div>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Полоса -->
        <div class="line">
        </div>

        <main data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example">
            <section class="container vertical-line">
                <div class="row">
                    <div class="col-xl-6 py-4 px-4 brd-right">
                        <h1 class="mb-4">
                            {{ __('translation.h1') }}
                        </h1>
                        <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto
                            laudantium magnam
                            ratione. Nostrum
                            voluptatibus est ab dolorum, temporibus possimus cupiditate eligendi omnis totam illo
                            placeat? Nam est in
                            sint corrupti.</p>
                        <button class="contact-btn"> {{ __('translation.contact') }}<i
                                class="far fa-arrow-alt-circle-right"></i></button>
                    </div>
                    <div class="col-xl-6 py-4 px-4 text-center">
                        <img src="img/rulony.png" class="img-fluid w-100">
                    </div>
                </div>
            </section>

            <div class="line">
            </div>

            <!-- Следующий контент -->
            <section class="container vertical-line px-0" id="aboutus">
                <h2 class="text-uppercase text-center m-0 py-4 px-2">Nur Plastik - производитель в Туркменистане</h2>
                <p class="m-0 px-4">{{ __('translation.about') }}</p>

                <div class="center slider py-4">
                    <div>
                        <img src="http://placehold.it/350x300?text=1">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=2">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=3">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=4">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=5">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=6">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=7">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=8">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=9">
                    </div>
                </div>
            </section>


            <div class="line">
            </div>


            <section class="container vertical-line" id="services">
                <div class="arrow-r"></div>
                <h2 class="text-uppercase m-0 py-4 px-2">Nur Plastik - производитель в Туркменистане</h2>
                <div class="row brd-top">
                    <div class="col-xl-6 brd-right">
                        <div class="row">
                            <div class="col-xl-12 brd-bottom px-4 py-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="img/icon-1.png">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <h3 class="col-lg-12">
                                                Производство полипропиленовой ткани
                                            </h3>
                                            <p class="col-lg-12 m-0">
                                                Sodales aenean at commodo curabitur et.
                                                Senectus vitae duis sit at adipiscing nulla. Urna ut
                                                ac amet faucibus dignissim. Orci neque sem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 brd-bottom px-4 py-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="img/icon-1.png">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <h3 class="col-lg-12">
                                                Производство полипропиленовой ткани
                                            </h3>
                                            <p class="col-lg-12 m-0">
                                                Sodales aenean at commodo curabitur et.
                                                Senectus vitae duis sit at adipiscing nulla. Urna ut
                                                ac amet faucibus dignissim. Orci neque sem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12  px-4 py-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="img/icon-1.png">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <h3 class="col-lg-12">
                                                Производство полипропиленовой ткани
                                            </h3>
                                            <p class="col-lg-12 m-0">
                                                Sodales aenean at commodo curabitur et.
                                                Senectus vitae duis sit at adipiscing nulla. Urna ut
                                                ac amet faucibus dignissim. Orci neque sem.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 py-4 px-4 text-center text-center">
                        <img src="img/rulony2.png" class="w-100" height="400px">
                    </div>
                    <div class="col-xl-3 col-md-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="10">0<span>K +</span>
                        </div>
                        <div class="">Satisfied customers
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 brd-right brd-top px-4 py-4  text-center">
                        <div class="number" data-num="50">0<span>+</span>
                        </div>
                        <div class="">Global Reach
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="15">0<span>+</span>
                        </div>
                        <div class="">Years of experiance
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="1">0<span>M +</span>
                        </div>
                        <div class="">Products printed
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- Еще одна полоса -->
        <div class="line">
        </div>

        <section class="container vertical-line px-0" id="products">
            <div class="arrow-l"></div>
            <h2 class="text-uppercase text-center m-0 py-4 px-4">Полипропиленовые решения, которым доверяют по всему
                миру</h2>
            <div class="products slider px-0">
                <div>
                    <img src="img/product.png">
                    <div class="justify-content-between d-flex align-items-center py-2">
                        <h6 class="d-flex m-0">Product title</h6>
                        <button class="product-btn custom-btn d-flex" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"> {{ __('translation.more') }}</button>
                    </div>
                </div>
                <div>
                    <img src="img/product.png">
                    <div class="justify-content-between d-flex align-items-center py-2">
                        <h6 class="d-flex m-0">Product title</h6>
                        <button class="product-btn custom-btn d-flex">Подробнее</button>
                    </div>
                </div>
                <div>
                    <img src="img/product.png">
                    <div class="justify-content-between d-flex align-items-center py-2">
                        <h6 class="d-flex m-0">Product title</h6>
                        <button class="product-btn custom-btn d-flex">Подробнее</button>
                    </div>
                </div>
                <div>
                    <img src="img/product.png">
                    <div class="justify-content-between d-flex align-items-center py-2">
                        <h6 class="d-flex m-0">Product title</h6>
                        <button class="product-btn custom-btn d-flex">Подробнее</button>
                    </div>
                </div>
                <div>
                    <img src="img/product.png">
                    <div class="justify-content-between d-flex align-items-center py-2">
                        <h6 class="d-flex m-0">Product title</h6>
                        <button class="product-btn custom-btn d-flex">Подробнее</button>
                    </div>
                </div>
            </div>
        </section>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <img src="img/product.png" class="w-100">
                            </div>
                            <div class="col-xl-6">
                                <div class="pb-3 mb-2 product-modal-title">
                                    <h4>
                                        Product title
                                    </h4>
                                </div>
                                <p>
                                    Количество и тип строп: Наша компания является ведущим производителем
                                    полипропиленовой ткани и мешков
                                    для пищевой промышленности.
                                    Размеры дна: Наша компания является ведущим производителем полипропиленовой ткани и
                                    мешков для пищевой
                                    промышленности.
                                    Высота загрузки: Наша компания является ведущим производителем полипропиленовой
                                    ткани и мешков для
                                    пищевой промышленности.
                                </p>
                                <div class="d-flex" style="margin-top: 100px">
                                    <button class="contact-btn me-4">Позвонить<i class="fas fa-phone ms-2"></i></button>
                                    <button class="contact-btn">Написать<i class="fas fa-envelope ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Еще одна полоса -->
        <div class="line">
        </div>

        <section class="px-0 gradient-section">
            <section class="container vertical-line px-4">
                <div class="row align-items-center py-4">
                    <div class="col-xl-8 col-md-7">
                        <p class="py-4 m-0">Sed ipsum ut nisi vitae. Elit euismod aliquet pulvinar consequat vulputate
                            at. Lorem
                            eros
                            mattis quisque mollis ut odio a. Velit facilisi hac vitae nisi purus.</p>
                    </div>
                    <div class="col-xl-4 col-md-5">
                        <div class="d-flex justify-content-md-end justify-content-center">
                            <button class="catalog-btn">{{ __('translation.catalog') }}<i
                                    class="fas fa-file-download"></i></button>
                        </div>
                    </div>
            </section>
        </section>


        <div class="line">
        </div>


        <section class="container vertical-line">
            <div class="arrow-r"></div>
            <h2 class="text-uppercase m-0 py-4 px-2">Nur Plastik - производитель в Туркменистане</h2>
            <div class="row brd-top">
                <div class="col-xl-6 py-4 px-4 text-center text-center">
                    <img src="img/rulony2.png" class="w-100" height="400px">
                </div>
                <div class="col-xl-6 brd-right">
                    <div class="row">
                        <div class="col-xl-12 brd-bottom brd-left px-4 py-4">
                            <div class="row">
                                <div class="col-xl-3 col-lg-2 col-3">
                                    <div class="sqr-num">
                                        01
                                    </div>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            Производство полипропиленовой ткани
                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            Sodales aenean at commodo curabitur et.
                                            Senectus vitae duis sit at adipiscing nulla. Urna ut
                                            ac amet faucibus dignissim. Orci neque sem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 brd-bottom brd-left px-4 py-4">
                            <div class="row">
                                <div class="col-xl-3 col-lg-2 col-3">
                                    <div class="sqr-num">
                                        02
                                    </div>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            Производство полипропиленовой ткани
                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            Sodales aenean at commodo curabitur et.
                                            Senectus vitae duis sit at adipiscing nulla. Urna ut
                                            ac amet faucibus dignissim. Orci neque sem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 brd-left px-4 py-4">
                            <div class="row">
                                <div class="col-xl-3 col-lg-2 col-3">
                                    <div class="sqr-num">
                                        03
                                    </div>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            Производство полипропиленовой ткани
                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            Sodales aenean at commodo curabitur et.
                                            Senectus vitae duis sit at adipiscing nulla. Urna ut
                                            ac amet faucibus dignissim. Orci neque sem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="line">
        </div>


        <section class="container vertical-line">
            <div class="arrow-l"></div>
            <h2 class="text-uppercase text-center m-0 py-4 px-4">{{ __('translation.contact_us') }}</h2>
        </section>

        <div class="line">
        </div>

        <section class="container vertical-line px-4 py-4" id="contacts">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <form method="POST" action="{{ route('contacts.submit') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-xl-6 col-12 mb-4">
                        <label for="form-name" class="mb-3">{{ __('translation.name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="form-name" aria-describedby="name" placeholder="Рустам">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-xl-6 col-12 mb-4">
                        <label for="form-surname" class="mb-3">{{ __('translation.surname') }}</label>
                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror"
                            id="form-surname" aria-describedby="surname" placeholder="Эмильев">
                        @error('surname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-xl-6 col-12 mb-4">
                        <label for="form-phone" class="mb-3">{{ __('translation.phone') }}</label>
                        <input type="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            id="form-phone" placeholder="+99364927422">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-xl-6 col-12 mb-4">
                        <label for="form-email" class="mb-3">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="form-email" placeholder="test@mail.ru">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-xl-12 col-12 mb-4">
                        <label for="form-message" class="mb-3">{{ __('translation.message') }}</label>
                        <textarea rows="4" cols="50" name="message"
                            class="form-control @error('message') is-invalid @enderror" id="form-message"></textarea>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-xl-12 col-12">
                        <button type="submit" class="submit-btn w-100 justify-content-center">{{ __('translation.send')
                            }}
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </form>
        </section>
        <footer>
            <section class="container vertical-line px-4 py-4">
            </section>
            {{-- <script>
                // Topup
      let mybutton = document.getElementById("myBtn");
      window.onscroll = function () { scrollFunction() };
    
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
    
      function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }
            </script> --}}

            {{-- <script>
                window.onscroll = function () { moveArrows() };

function moveArrows() {
    // Получаем текущую позицию прокрутки
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;

    // Получаем все элементы с классом arrow-container
    var arrows = document.querySelectorAll('.arrow-l');

    arrows.forEach(function (arrow) {
        var arrowPosition = arrow.getBoundingClientRect().top;

        // Вычисляем, насколько близко стрелка к верхней границе окна
        var distanceFromTop = arrowPosition - window.innerHeight / 2;

        // Ограничиваем значение top от 0 до 70px, основываясь на прокрутке
        var newTop = Math.min(Math.max(0, 170 - Math.abs(distanceFromTop) / 10), 170);

        // Применяем новое значение top к псевдоэлементу через изменение свойства стиля родительского элемента
        arrow.style.setProperty('--arrow-top', newTop + 'px');
    });
}


            </script> --}}
        </footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    </div>
</body>

</html>