<header class="site-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- ЛОГО -->
            <a class="navbar-brand d-flex align-items-center logo" href="/">
                <img src="/images/logo_sint-master.jpg" alt="СИНТ-Мастер">
                {{--                    <span class="ms-2 fw-bold">СИНТ-Мастер</span>--}}
            </a>
            <!-- BURGER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- МЕНЮ -->
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/promo">Акции</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contacts')}}">Контакты</a>
                    </li>

                </ul>

                {{--                    <!-- ПОИСК -->--}}
                {{--                    <form class="d-flex me-3" action="/search">--}}
                {{--                        <input class="form-control form-control-sm" type="search" placeholder="Поиск" name="q">--}}
                {{--                    </form>--}}


                <div class="header-lang me-3">
                    <a href="/lang/ru" class="lang-link active">RU</a>
                    <span>|</span>
                    <a href="/lang/ua" class="lang-link">UA</a>
                </div>

                <!-- ТЕЛЕФОН -->
                {{--                    <div class="header-phone me-3">--}}
                {{--                        <a href="tel:+380000000000">📞 +38 (000) 000-00-00</a>--}}
                {{--                    </div>--}}
                <div class="header-phone me-3">
                    <a href="tel:+380000000000">
                        <i class="fa-solid fa-phone" style="color: rgb(29, 105, 165);"></i> +38 (000) 000-00-00
                    </a>
                </div>
                <!-- КНОПКА -->
{{--                <a href="#contact" class="btn btn-blue">--}}
{{--                    Залишити заявку--}}
{{--                </a>--}}

                <button class="btn btn-blue"
                        data-bs-toggle="modal"
                        data-bs-target="#orderModal">
                    Оставить заявку
                </button>
            </div>
        </nav>
    </div>
</header>