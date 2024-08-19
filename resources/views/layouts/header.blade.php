<header class="container vertical-line px-4" itemscope itemtype="https://schema.org/Organization">
    <nav class="navbar navbar-light sticky-top">
        <div class="container d-flex justify-content-between p-0" style="flex-wrap:initial">
            <a class="navbar-brand" href="#" itemprop="url">
                <img src="img/logo.png" alt="Company Logo" itemprop="logo">
            </a>
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-light d-md-none" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item" itemprop="url">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item" itemprop="url">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse d-none d-md-flex justify-content-end" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <ul class="navbar-nav mb-2 mb-lg-0" style="flex-direction: row">
                    <li class="nav-item mx-2" itemprop="url">
                        <a class="nav-link" href="#aboutus">{{ __('translation.menu_about') }}</a>
                    </li>
                    <li class="nav-item mx-2" itemprop="url">
                        <a class="nav-link" href="#services">{{ __('translation.menu_services') }}</a>
                    </li>
                    <li class="nav-item mx-2" itemprop="url">
                        <a class="nav-link" href="#products">{{ __('translation.menu_products') }}</a>
                    </li>
                    <li class="nav-item mx-2" itemprop="url">
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

                        <a href="#"><img class="flag-icon" src="{{ asset($currentFlag) }}" alt="Current Language"></a>
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