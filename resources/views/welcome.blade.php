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
            "telephone": "+99363413181",
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
                    <div class="col-lg-7 col-xl-6 py-4 px-4 brd-right d-flex align-items-start justify-content-center" style="flex-direction: column;">
                        <h1 class="mb-4">
                            {{ __('translation.h1') }}
                        </h1>
                        <p class="mb-4"> {{ __('translation.h1_d') }}</p>
                       <a href="#contacts" style="text-decoration: none;"> <button class="contact-btn"> <span>{{ __('translation.contact') }}</span><i
                                class="far fa-arrow-alt-circle-right" style="z-index:10"></i></button></a>
                    </div>
                    <div class="col-lg-5 col-xl-6 py-4 px-4 text-center">
                        <img data-src="/storage/photos/1/another/rulony.png" class="img-fluid lazy sticky w-100">
                    </div>
                </div>
            </section>

            <div class="line">
            </div>

            <!-- Следующий контент -->
            <section class="container vertical-line px-0" id="aboutus">

                <h2 class="text-uppercase text-center m-0 py-4 px-4">{{__('translation.title_about')}}</h2>
                <div class="m-0 px-4"> {!! nl2br(e(__('translation.about'))) !!}</div>

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

            <div class="line">
            </div>


            <section class="container vertical-line" id="services">
                <div class="arrow-r"></div>
                <h2 class="text-uppercase m-0 py-4 px-2">{{ __('translation.title_service') }}</h2>
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
                            @foreach($services as $index => $service)
                            <div class="col-xl-12 {{ $index < count($services) - 1 ? 'brd-bottom' : '' }} px-4 py-4" itemscope itemtype="https://schema.org/Service">
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
                    <div class="col-xl-3 col-md-6 col-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="220">0<small>{{ __('translation.small_tons') }}</small></div>
                        <div>{{ __('translation.num1') }}</div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="5">0<small>{{ __('translation.small_colors') }}</small></div>
                        <div>{{ __('translation.num2') }}</div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="2000">0<small>{{ __('translation.small_kg') }}</small></div>
                        <div>{{ __('translation.num3') }}</div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6 brd-right brd-top px-4 py-4 text-center">
                        <div class="number" data-num="9">0</div>
                        <div>{{ __('translation.num4') }}</div>
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
                    <div class="justify-content-between align-items-center py-2">
                        <h6 class="d-flex m-0" itemprop="name">{{ $product->{'title_' . app()->getLocale()} }}</h6>
                        <button class="product-btn custom-btn d-flex mt-2" data-bs-toggle="modal"
                            data-bs-target="#productModal{{ $product->id }}"> {{ __('translation.more') }}</button>
                    </div>
                    <meta itemprop="description" content="{{ strip_tags($product->{'description_' . app()->getLocale()}) }}">
                </div>
                @endforeach
            </div>

          
            @foreach ($products as $product)
            <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1"
                aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true" style="align-content: center;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img data-src="{{$product->img}}" class="w-100 lazy fluid-i" alt="{{ $product->{'title_' . app()->getLocale()} }}">
                                </div>
                                <div class="col-lg-6 d-flex justify-content-between" style="flex-direction:column">
                                    <div class="d-flex" style="flex-direction:column">
                                        <div class="pb-3 pb-md-0 mb-2  product-modal-title">
                                            <h4>
                                                {{$product->{'title_' . app()->getLocale()} }}
                                            </h4>
                                        </div>
                                        <p class="desc">
                                            {!! $product->{'description_' . app()->getLocale()} !!}
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <a href="tel:+99363413181" style="text-decoration: none;"> <button class="contact-btn me-4"><span>{{__('translation.phone_btn')}}</span><i
                                                    class="fas fa-phone ms-2"></i></button>
                                            <a href="mailto:info@nur-plastik.com" style="text-decoration: none;"><button class="contact-btn"><span>{{__('translation.leave_email')}}</span><i
                                                        class="fas fa-envelope ms-2"></i></button></a>
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
                        <div class="d-flex justify-content-md-end justify-content-start">
                            <a href="catalog.pdf" style="text-decoration: none;"><button class="catalog-btn" >{{ __('translation.catalog') }}<i
                                    class="fas fa-file-download"></i></button></a>
                        </div>
                    </div>
            </section>
        </section>


        <div class="line">
        </div>


        <section class="container vertical-line">
            <div class="arrow-r"></div>
            <h2 class="text-uppercase m-0 py-4 px-2">{{__('translation.title_etapy')}}</h2>
            <div class="row brd-top">
                <div class="col-lg-6 py-4 px-4 text-center text-center">
                    <img data-src="/storage/photos/1/another/rulony-right.jpg" class="w-100 lazy fluid-i sticky">
                </div>
                <div class="col-lg-6 brd-right">
                    @php
                    $steps = [
                    ['number' => '01', 'title' => __('translation.sqr-num-1-title'), 'description' => __('translation.sqr-num-1-description')],
                    ['number' => '02', 'title' => __('translation.sqr-num-2-title'), 'description' => __('translation.sqr-num-2-description')],
                    ['number' => '03', 'title' => __('translation.sqr-num-3-title'), 'description' => __('translation.sqr-num-3-description')],
                    ['number' => '04', 'title' => __('translation.sqr-num-4-title'), 'description' => __('translation.sqr-num-4-description')],
                    ['number' => '05', 'title' => __('translation.sqr-num-5-title'), 'description' => __('translation.sqr-num-5-description')],
                    ];
                    @endphp


                    <div class="row">
                        @foreach($steps as $index => $step)
                        <div class="col-xl-12 brd-left px-4 py-4 {{ $index < count($steps) - 1 ? 'brd-bottom' : '' }}">
                            <div class="row">
                                <div class="col-xl-3 col-lg-2 col-3">
                                    <div class="sqr-num">
                                        <div></div>
                                        {{ $step['number'] }}
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-10 col-9">
                                    <div class="row">
                                        <h3 class="col-lg-12">
                                            {{ $step['title'] }}
                                        </h3>
                                        <p class="col-lg-12 m-0">
                                            {{ $step['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                            id="form-name" aria-describedby="name" placeholder="John">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6 col-12 mb-4">
                        <label for="form-surname" class="mb-3">{{ __('translation.surname') }}</label>
                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror"
                            id="form-surname" aria-describedby="surname" placeholder="Doe">
                        @error('surname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6 col-12 mb-4">
                        <label for="form-phone" class="mb-3">{{ __('translation.phone') }}</label>
                        <input type="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            id="form-phone" placeholder="+1234568789">
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
                    <div class="form-group col-xl-12 col-12 d-flex justify-content-center">
                        <button type="submit" class="submit-btn justify-content-center">{{ __('translation.send')
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



    <script>
        let mybutton = document.getElementById("myBtn");

        window.onscroll = function() {
            scrollFunction()
        };

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
    </script>
    <!-- <div class="custom-cursor"></div> -->

</body>

</html>