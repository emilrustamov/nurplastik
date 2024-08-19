<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nur Plastik - Производитель Пластиковых Изделий</title>

    <!-- Описание для поисковых систем -->
    <meta name="description" content="Nur Plastik - ведущий производитель пластиковых изделий в Туркменистане. Мы предлагаем качественные и надежные продукты.">

    <!-- Атрибуты hreflang -->
    <link rel="alternate" href="https://nur-plastik.com/ru" hreflang="ru" />
    <link rel="alternate" href="https://nur-plastik.com/en" hreflang="en" />
    <link rel="alternate" href="https://nur-plastik.com/tm" hreflang="tk" />

    <!-- x-default для русской страницы по умолчанию -->
    <link rel="alternate" href="https://nur-plastik.com/ru" hreflang="x-default" />

    <!-- Каноническая ссылка на русскую версию -->
    <link rel="canonical" href="https://nur-plastik.com/ru" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nur Plastik - Производитель Пластиковых Изделий">
    <meta property="og:description" content="Nur Plastik - ведущий производитель пластиковых изделий в Туркменистане. Мы предлагаем качественные и надежные продукты.">
    <meta property="og:image" content="https://nur-plastik.com/img/logo.png">
    <meta property="og:url" content="https://nur-plastik.com/ru">
    <meta property="og:site_name" content="Nur Plastik">
    <meta property="og:locale" content="ru_RU">

    <!-- Дополнительные метатеги для Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Nur Plastik - Производитель полипропиленовых изделий">
    <meta name="twitter:description" content="Nur Plastik - ведущий производитель полипропиленовых изделий в Туркменистане. Мы предлагаем качественные и надежные продукты.">
    <meta name="twitter:image" content="https://nur-plastik.com/img/logo.png">
    <meta name="twitter:url" content="https://nur-plastik.com/ru">

    <!-- JSON-LD разметка для организации -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Nur Plastik",
            "url": "https://nur-plastik.com",
            "logo": "https://nur-plastik.com/img/logo.png",
            "telephone": "+99312345678",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Улица, дом",
                "addressLocality": "Ашхабад",
                "addressCountry": "Туркменистан"
            },
            "sameAs": [
                "https://www.instagram.com/nur.plastiktm",
                "https://wa.me/99363413181"
            ]
        }
    </script>

    <!-- Подключение скриптов и стилей -->
    <script src="/js/jquery.js"></script>
    <script src="/js/slick.js"></script>
    @vite([ 'resources/scss/app.scss', 'resources/js/app.js'])
</head>


<body>
    <div class="preloader-wrapper">
        <div class="preloader"></div>
    </div>

    <div>
        @include('layouts.header')

        <!-- Полоса -->
        <div class="line">
        </div>

        <main data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example">
            <section class="container vertical-line">
                <div class="row">
                    <div class="col-lg-7 col-xl-6 py-4 px-4 brd-right">
                        <h1 class="mb-4">
                            {{ __('translation.h1') }}
                        </h1>
                        <p class="mb-4"> {{ __('translation.h1_d') }}</p>
                        <button class="contact-btn"> <span>{{ __('translation.contact') }}</span><i
                                class="far fa-arrow-alt-circle-right" style="z-index:10"></i></button>
                    </div>
                    <div class="col-lg-5 col-xl-6 py-4 px-4 text-center">
                        <img data-src="/storage/photos/1/another/rulony.png" class="img-fluid lazy sticky">
                    </div>
                </div>
            </section>

            <div class="line">
            </div>

            <!-- Следующий контент -->
            <section class="container vertical-line px-0" id="aboutus">
                <h2 class="text-uppercase text-center m-0 py-4 px-4">{{__('translation.title_about')}}</h2>
                <p class="m-0 px-4"> {!! nl2br(e(__('translation.about'))) !!}</p>

                <div class="center slider py-4">
                    <div class="img-wrapper1">
                        <img data-src="/storage/photos/1/slider/slider1.jpg" class="lazy">
                    </div>
                    <div class="img-wrapper1">
                        <img data-src="/storage/photos/1/slider/slider2.jpg" class="lazy">
                    </div>
                    <div class="img-wrapper1">
                        <img data-src="/storage/photos/1/slider/slider3.jpg" class="lazy">
                    </div>
                    <div class="img-wrapper1">
                        <img data-src="/storage/photos/1/slider/slider4.jpg" class="lazy">
                    </div>
                    <div class="img-wrapper1">
                        <img data-src="/storage/photos/1/slider/slider5.jpg" class="lazy">
                    </div>
                </div>
            </section>

            <style>
                .center.slider {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    overflow: hidden;
                }

                .img-wrapper1 {
                    flex: 1 1 auto;
                    margin: 0 10px;
                    /* Отступы между слайдами */
                    overflow: hidden;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    max-height: 400px;
                    /* Задаем максимальную высоту, чтобы изображения не выходили за рамки */
                }

                .img-wrapper1 img {
                    width: auto;
                    height: 100%;
                    max-width: 100%;
                    object-fit: contain;
                    /* Изображение вписывается в контейнер, сохраняя пропорции */
                    object-position: center;
                }
            </style>
            <div class="line">
            </div>


            <section class="container vertical-line" id="services">
                <div class="arrow-r"></div>
                <h2 class="text-uppercase m-0 py-4 px-4">{{ __('translation.title_service') }}</h2>
                <div class="row brd-top">
                    <div class="col-lg-6 brd-right">
                        @php
                        $services = [
                        [
                        'image' => 'img/icon-1.png',
                        'title' => __('translation.service1_t'),
                        'description' => __('translation.service1_d')
                        ],
                        [
                        'image' => 'img/icon-2.png',
                        'title' => __('translation.service2_t'),
                        'description' => __('translation.service2_d')
                        ],
                        [
                        'image' => 'img/icon-3.png',
                        'title' => __('translation.service3_t'),
                        'description' => __('translation.service3_d')
                        ],
                        ];
                        @endphp

                        <div class="row">
                            @foreach($services as $service)
                            <div class="col-xl-12 brd-bottom px-4 py-4" itemscope itemtype="https://schema.org/Service">
                                <div class="row">
                                    <div class="col-lg-3 mb-md-0 mb-3">
                                        <img data-src="{{ $service['image'] }}" alt="Service Icon" itemprop="image" class="lazy">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <h3 class="col-lg-12" itemprop="name">
                                                {{ $service['title'] }}
                                            </h3>
                                            <p class="col-lg-12 m-0" itemprop="description">
                                                {{ $service['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-lg-6 py-4 px-4 text-center text-center">
                        <img data-src="/storage/photos/1/another/rulony2.png" class="w-100 lazy fluid-i sticky">
                    </div>
                    <div class="col-xl-3 col-md-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="220">0<small>т</small></div>
                        <div>Объемы экспортируемой продукции в месяц</div>
                    </div>
                    <div class="col-xl-3 col-md-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="5">0<small>цветов</small></div>
                        <div>Возможно нансение печати</div>
                    </div>
                    <div class="col-xl-3 col-md-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="2000">0<small>кг</small></div>
                        <div>МКР выдерживают широкий диапазон нагрузок</div>
                    </div>
                    <div class="col-xl-3 col-md-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="9">0</div>
                        <div>Лет на рынке</div>
                    </div>
                </div>
            </section>


        </main>

        <!-- Еще одна полоса -->
        <div class="line">
        </div>

        <section class="container vertical-line px-0" id="products">
            <div class="arrow-l"></div>
            <h2 class="text-uppercase text-center m-0 py-4 px-4">{{__('translation.title_products')}}</h2>
            <div class="products slider px-0">
                @foreach ($products as $product)
                <div itemscope itemtype="https://schema.org/Product">
                    <div class="img-wrapper mb-2">
                        <img data-src="{{$product->img}}" itemprop="image" alt="{{ $product->{'title_' . app()->getLocale()} }}" class="lazy">
                    </div>
                    <div class="justify-content-between d-flex align-items-center py-2">
                        <h6 class="d-flex m-0" itemprop="name">{{ $product->{'title_' . app()->getLocale()} }}</h6>
                        <button class="product-btn custom-btn d-flex" data-bs-toggle="modal"
                            data-bs-target="#productModal{{ $product->id }}"> {{ __('translation.more') }}</button>
                    </div>
                    <meta itemprop="description" content="{{ strip_tags($product->{'description_' . app()->getLocale()}) }}">
                </div>
                @endforeach
            </div>

            <!-- Модальные окна вынесены за пределы слайдера -->
            @foreach ($products as $product)
            <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1"
                aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel{{ $product->id }}">{{ $product->{'title_' .
                        app()->getLocale()} }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img data-src="{{$product->img}}" class="w-100 lazy fluid-i" alt="{{ $product->{'title_' . app()->getLocale()} }}">
                                </div>
                                <div class="col-lg-6">
                                    <div class="pb-3 mb-2 product-modal-title">
                                        <h4>
                                            {{$product->{'title_' . app()->getLocale()} }}
                                        </h4>
                                    </div>
                                    <p class="desc">
                                        {!! $product->{'description_' . app()->getLocale()} !!}
                                    </p>
                                    <div class="d-flex" style="margin-top: 100px">
                                        <button class="contact-btn me-4">{{__('translation.phone')}}<i
                                                class="fas fa-phone ms-2"></i></button>
                                        <button class="contact-btn">{{__('translation.leave_email')}}<i
                                                class="fas fa-envelope ms-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>





        <!-- Еще одна полоса -->
        <div class="line">
        </div>

        <section class="px-0 gradient-section">
            <section class="container vertical-line px-4">
                <div class="row align-items-center py-4">
                    <div class="col-xl-8 col-md-7">
                        <p class="py-4 m-0">
                            {{__('translation.catalog_text')}}
                        </p>
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
            <h2 class="text-uppercase m-0 py-4 px-4">{{__('translation.title_etapy')}}</h2>
            <div class="row brd-top">
                <div class="col-lg-6 py-4 px-4 text-center text-center">
                    <img data-src="/storage/photos/1/another/rulony-right.jpg" class="w-100 lazy fluid-i sticky">
                </div>
                <div class="col-lg-6 brd-right">
                    <div class="row">
                        <div class="col-xl-12 brd-bottom brd-left px-4 py-4">
                            <div class="row">
                                <div class="col-xl-3 col-lg-2 col-3">
                                    <div class="sqr-num">
                                        <div></div>
                                        01
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            Подготовка сырья
                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            Изначально полипропилен, кальцит (мастербатч) и красители загружаются в бункеры для подготовки к производству. Это позволяет предприятию оперативно реагировать на запросы клиентов и изготавливать продукцию, ориентируясь на рыночный спрос
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
                                <div class="col-xl-9 col-lg-10 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            Экструзия
                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            Загруженное сырье расплавляется в экструдере и формируется в пленочный стержень
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
                                <div class="col-xl-9 col-lg-10 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            Ткачество

                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            Полученные стержни обрабатываются на ткацких станках, где формируются мешочные ткани различных размеров
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 brd-left px-4 py-4">
                            <div class="row">
                                <div class="col-xl-3 col-lg-2 col-3">
                                    <div class="sqr-num">
                                        04
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            Шитье мешков
                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            Ткани переносятся на мешкозашивочные машины, где создаются готовые мешки различной конфигурации и размеров
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 brd-left px-4 py-4">
                            <div class="row">
                                <div class="col-xl-3 col-lg-2 col-3">
                                    <div class="sqr-num">
                                        05
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            Контроль качества
                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            На завершающем этапе продукция проходит тщательное тестирование в заводской лаборатории для гарантии высокого стандарта качества
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
            <h2 class="text-uppercase text-center m-0 py-4 px-4">{{ __('translation.title_contact') }}</h2>
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
            <form method="POST" action="{{ route('contacts.submit', ['locale' => app()->getLocale()]) }}">

                @csrf
                <div class="row">
                    <div class="form-group col-lg-6 col-12 mb-4">
                        <label for="form-name" class="mb-3">{{ __('translation.name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="form-name" aria-describedby="name" placeholder="Рустам">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6 col-12 mb-4">
                        <label for="form-surname" class="mb-3">{{ __('translation.surname') }}</label>
                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror"
                            id="form-surname" aria-describedby="surname" placeholder="Эмильев">
                        @error('surname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6 col-12 mb-4">
                        <label for="form-phone" class="mb-3">{{ __('translation.phone') }}</label>
                        <input type="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            id="form-phone" placeholder="+99364927422">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6 col-12 mb-4">
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
        @include('layouts.footer')

        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    </div>



    <style>

    </style>
    <div class="custom-cursor"></div>

</body>

</html>