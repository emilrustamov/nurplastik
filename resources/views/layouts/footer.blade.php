<footer itemscope itemtype="https://schema.org/WPFooter">
    <section class="container vertical-line px-4 py-4">
        <div class="row">
            <!-- Левая колонка: пункты меню -->
            <div class="col-md-4 col-6 order-2 order-md-1" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <ul class="list-unstyled footer-links">
                    <li><a href="#aboutus" itemprop="url">{{ __('translation.menu_about') }}</a></li>
                    <li><a href="#services" itemprop="url">{{ __('translation.menu_services') }}</a></li>
                    <li><a href="#products" itemprop="url">{{ __('translation.menu_products') }}</a></li>
                    <li><a href="#contacts" itemprop="url">{{ __('translation.menu_contacts') }}</a></li>
                </ul>
            </div>

            <!-- Центральная колонка: логотип -->
            <div class="col-md-4 text-center col-12 order-3 order-md-2" style="background-color: white" itemscope itemtype="https://schema.org/Organization">
                <a href="#" itemprop="url"><img src="img/logo.png" alt="Company Logo" class="img-fluid" itemprop="logo"></a>
            </div>

            <!-- Правая колонка: контакты -->
            <div class="col-md-4 text-md-end col-6 order-1 order-md-3" itemscope itemtype="https://schema.org/Organization">
                <ul class="list-unstyled  footer-links">
                    <li itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
                        <a href="tel:+99363413181">
                            <i class="fas fa-phone-alt"></i>
                            <span itemprop="telephone">+993(63)-41-31-81</span>
                        </a>
                    </li>
                    <li itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
                        <a href="mailto:info@nur-plastik.com">
                            <i class="fas fa-envelope"></i>
                            <span itemprop="email">info@nur-plastik.com</span>
                        </a>
                    </li>
                    <li itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <i class="fas fa-map-marker-alt"></i>
                        <span itemprop="addressLocality">{{ __('translation.adres_1') }}</span>,
                        <span itemprop="addressCountry">{{ __('translation.adres_2') }}</span>
                    </li>
                    <li>
                        <a href="https://wa.me/99363413181" target="_blank">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/nur.plastiktm" target="_blank">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>