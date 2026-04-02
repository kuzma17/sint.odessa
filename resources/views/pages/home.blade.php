@extends('layouts.appSite')

@section('content')

    <header class="site-header">

        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">

                <!-- ЛОГО -->
                <a class="navbar-brand d-flex align-items-center logo" href="/">
                    <img src="/images/logo_sint-master.jpg" alt="СИНТ-Мастер" height="75">
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
                            <a class="nav-link" href="/about">О нас</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/services">Услуги</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/promo">Акции</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/faq">FAQ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/contacts">Контакты</a>
                        </li>

                    </ul>

                    <!-- ПОИСК -->
                    <form class="d-flex me-3" action="/search">
                        <input class="form-control form-control-sm" type="search" placeholder="Поиск" name="q">
                    </form>

                    <!-- ТЕЛЕФОН -->
                    <div class="header-phone me-3">
                        <a href="tel:+380000000000">📞 +38 (000) 000-00-00</a>
                    </div>

                    <!-- КНОПКА -->
                    <a href="#contact" class="btn btn-primary btn-sm">
                        Заявка
                    </a>

                </div>

            </nav>

        </div>

    </header>

        <!-- Hero Slider -->
        <section class="hero">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- SLIDE 1 -->
                    <div class="carousel-item active">
                        <div class="slide-bg" style="background-image:url('/images/slider/printer-repairs.webp')"></div>
                        <div class="slide-content">
                            <h1>Ремонт принтерів</h1>
                            <p>Професійна діагностика та сервіс</p>
                            <a href="#contact" class="btn-modern btn-primary-modern">Залишити заявку</a>
                        </div>
                    </div>

                    <!-- SLIDE 2 -->
                    <div class="carousel-item">
                        <div class="slide-bg" style="background-image:url('/images/slider/cartridge.webp')"></div>
                        <div class="slide-content">
                            <h1>Заправка картриджів</h1>
                            <p>HP • Canon • Epson</p>
                        </div>
                    </div>

                    <!-- SLIDE 3 -->
                    <div class="carousel-item">
                        <div class="slide-bg" style="background-image:url('/images/slider/pc-repairs.webp')"></div>
                        <div class="slide-content">
                            <h1>Ремонт ПК та техніки</h1>
                            <p>Швидко та якісно</p>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>


    <section class="services fade-in">
        <div class="container">
            <h2 class="text-center mb-5">Наші послуги</h2>
            <div class="row g-4">
                <!-- Карточка 1 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="/images/services/cartridge.webp" alt="Заправка картриджів">
                        <div class="service-overlay">
                            <div class="service-text">
                                <h3>Заправка картриджів</h3>
                                <p>HP, Canon, Epson</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Карточка 2 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="/images/services/printer.webp" alt="Ремонт принтерів">
                        <div class="service-overlay">
                            <div class="service-text">
                                <h3>Ремонт принтерів</h3>
                                <p>Лазерні та струменеві</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Карточка 3 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <img src="/images/services/repair.webp" alt="Ремонт ПК">
                        <div class="service-overlay">
                            <div class="service-text">
                                <h3>Ремонт ПК</h3>
                                <p>Діагностика та ремонт</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Advantages -->
    <section class="bg-light fade-in py-5">
        <div class="container">
            <h2 class="text-center mb-5">Чому обирають нас</h2>
            <div class="row text-center g-4">

                <div class="col-md-3">
                    <div class="adv-card-circle-modern">
                        <div class="adv-number" data-target="25"><span class="num">0</span><span class="unit">р.</span></div>
                        <p>Років досвіду</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card-circle-modern">
                        <div class="adv-number" data-target="1000"><span class="num">0</span><span class="unit"></span></div>
                        <p>Клієнтів</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card-circle-modern">
                        <div class="adv-number" data-target="24"><span class="num">0</span><span class="unit">ч</span></div>
                        <p>Реакція на заявку</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card-circle-modern">
                        <div class="adv-number" data-target="100"><span class="num">0</span><span class="unit">%</span></div>
                        <p>Гарантія ремонту</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.adv-number');

            const options = { threshold: 0.5 };

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const numSpan = counter.querySelector('.num');
                const unitSpan = counter.querySelector('.unit');
                const unit = unitSpan.textContent || '';
                const increment = target / 100;
                let current = 0;

                const update = () => {
                    current += increment;
                    if(current < target){
                        numSpan.textContent = Math.ceil(current);
                        requestAnimationFrame(update);
                    } else {
                        numSpan.textContent = target;
                    }
                };
                update();
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            counters.forEach(counter => observer.observe(counter));
        });
    </script>


        <!-- Workflow -->
{{--        <section class="fade-in">--}}
{{--            <div class="container">--}}
{{--                <h2 class="text-center mb-5">Як ми працюємо</h2>--}}
{{--                <div class="row g-4 text-center">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <div class="card-modern p-4">--}}
{{--                            <h3>1</h3>--}}
{{--                            <p>Залишаєте заявку</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <div class="card-modern p-4">--}}
{{--                            <h3>2</h3>--}}
{{--                            <p>Зв'язується менеджер</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <div class="card-modern p-4">--}}
{{--                            <h3>3</h3>--}}
{{--                            <p>Діагностика</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <div class="card-modern p-4">--}}
{{--                            <h3>4</h3>--}}
{{--                            <p>Ремонт техніки</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

    <section class="workflow fade-in">
        <div class="container">
            <h2 class="text-center mb-5">Як ми працюємо</h2>
            <div class="workflow-row">

                <div class="workflow-step">
                    <div class="step-number">1</div>
                    <div class="step-card">
                        <h3>Залишаєте заявку</h3>
                        <p>Ми отримуємо вашу заявку і уточнюємо деталі</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">2</div>
                    <div class="step-card">
                        <h3>Зв'язується менеджер</h3>
                        <p>Менеджер уточнює деталі та планує візит</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">3</div>
                    <div class="step-card">
                        <h3>Діагностика</h3>
                        <p>Технік перевіряє обладнання і визначає проблему</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">4</div>
                    <div class="step-card">
                        <h3>Ремонт техніки</h3>
                        <p>Виправляємо проблему швидко та професійно</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">5</div>
                    <div class="step-card">
                        <h3>Доставка</h3>
                        <p>Готову техніку доставляємо назад до вас</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="brands bg-light py-4 fade-in ">
        <div class="container text-center">
            <h2 class="text-center mb-5">Бренды с которыми мы работаем</h2>
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">

                <img src="/images/brands/hp.jpg" alt="HP" class="brand-logo" width="110">
                <img src="/images/brands/epson.jpg" alt="Epson" class="brand-logo" width="130">
                <img src="/images/brands/canon.jpg" alt="Canon" class="brand-logo" width="140">
                <img src="/images/brands/brother.jpg" alt="Brother" class="brand-logo" width="140">
                <img src="/images/brands/xerox.jpg" alt="Xerox" class="brand-logo" width="140">
                <img src="/images/brands/samsung.jpg" alt="Samsung" class="brand-logo" width="140">
                <img src="/images/brands/kyocera.jpg" alt="Kyocera" class="brand-logo" width="140">
                <img src="/images/brands/panasonic.jpg" alt="Panasonic" class="brand-logo" width="160">

            </div>
        </div>
    </section>


    <section class="reviews-section fade-in">
        <div class="container">

            <h2 class="text-center mb-5">Отзывы клиентов</h2>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="review-card">

                        <div class="review-stars">
                            ★★★★★
                        </div>

                        <p>
                            Очень быстро починили принтер. Отличный сервис и адекватные цены.
                        </p>

                        <div class="review-user">

                            <img src="/images/avatars/avatar1.png">

                            <div>
                                <strong>Андрей</strong>
                                <div class="review-city">Одесса</div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="review-card">

                        <div class="review-stars">
                            ★★★★★
                        </div>

                        <p>
                            Заправляю картриджи только здесь уже несколько лет.
                        </p>

                        <div class="review-user">

                            <img src="/images/avatars/avatar2.png">

                            <div>
                                <strong>Ольга</strong>
                                <div class="review-city">Одесса</div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="review-card">

                        <div class="review-stars">
                            ★★★★★
                        </div>

                        <p>
                            Отличные специалисты. Рекомендую.
                        </p>

                        <div class="review-user">

                            <img src="/images/avatars/avatar3.png">

                            <div>
                                <strong>Игорь</strong>
                                <div class="review-city">Одесса</div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- FAQ -->
{{--    <section class="faq">--}}
{{--        <div class="container">--}}

{{--            <h2 class="text-center mb-5">Частые вопросы</h2>--}}

{{--            <div class="accordion" id="faqAccordion">--}}

{{--                <div class="accordion-item">--}}
{{--                    <h2 class="accordion-header">--}}
{{--                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">--}}
{{--                            Сколько стоит заправка картриджа?--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                    <div id="faq1" class="accordion-collapse collapse show">--}}
{{--                        <div class="accordion-body">--}}
{{--                            Цена зависит от модели принтера. В среднем от 200 грн.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="accordion-item">--}}
{{--                    <h2 class="accordion-header">--}}
{{--                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">--}}
{{--                            Сколько времени занимает ремонт?--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                    <div id="faq2" class="accordion-collapse collapse">--}}
{{--                        <div class="accordion-body">--}}
{{--                            Диагностика обычно занимает 1 день.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="accordion-item">--}}
{{--                    <h2 class="accordion-header">--}}
{{--                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">--}}
{{--                            Есть ли гарантия?--}}
{{--                        </button>--}}
{{--                    </h2>--}}
{{--                    <div id="faq3" class="accordion-collapse collapse">--}}
{{--                        <div class="accordion-body">--}}
{{--                            Да, мы предоставляем гарантию на выполненные работы.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="faq-section bg-light">--}}
{{--        <div class="container">--}}

{{--            <h2 class="text-center mb-5">Частые вопросы</h2>--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-8">--}}

{{--                    <div class="accordion" id="faqAccordion">--}}

{{--                        <!-- 1 -->--}}
{{--                        <div class="accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">--}}
{{--                                    Сколько стоит заправка картриджа?--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="faq1" class="accordion-collapse collapse show">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    Цена зависит от модели принтера. В среднем от 200 грн.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- 2 -->--}}
{{--                        <div class="accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">--}}
{{--                                    Сколько времени занимает ремонт?--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="faq2" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    Диагностика обычно занимает до 1 дня, ремонт — от 1 до 3 дней.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- 3 -->--}}
{{--                        <div class="accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">--}}
{{--                                    Вы даете гарантию?--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="faq3" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    Да, мы предоставляем гарантию на все виды работ.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- 4 -->--}}
{{--                        <div class="accordion-item">--}}
{{--                            <h2 class="accordion-header">--}}
{{--                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">--}}
{{--                                    Можно ли вызвать мастера?--}}
{{--                                </button>--}}
{{--                            </h2>--}}
{{--                            <div id="faq4" class="accordion-collapse collapse">--}}
{{--                                <div class="accordion-body">--}}
{{--                                    Да, возможен выезд мастера по Одессе.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <!-- КНОПКА -->--}}
{{--                    <div class="text-center mt-4">--}}
{{--                        <a href="/faq" class="btn-modern btn-primary-modern">--}}
{{--                            Все вопросы →--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="faq-section fade-in">--}}
{{--        <div class="container">--}}

{{--            <h2 class="text-center mb-5">Частые вопросы</h2>--}}

{{--            <div class="faq-list">--}}

{{--                <div class="faq-item">--}}
{{--                    <div class="faq-question">--}}
{{--                        Сколько стоит заправка картриджа?--}}
{{--                    </div>--}}
{{--                    <div class="faq-answer">--}}
{{--                        Цена зависит от модели принтера. В среднем от 200 грн.--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="faq-item">--}}
{{--                    <div class="faq-question">--}}
{{--                        Сколько времени занимает ремонт?--}}
{{--                    </div>--}}
{{--                    <div class="faq-answer">--}}
{{--                        Диагностика обычно занимает 1 день.--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="faq-item">--}}
{{--                    <div class="faq-question">--}}
{{--                        Есть ли гарантия?--}}
{{--                    </div>--}}
{{--                    <div class="faq-answer">--}}
{{--                        Да, мы предоставляем гарантию на все работы.--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <div class="text-center mt-4">--}}
{{--                <a href="/faq" class="btn-modern btn-primary-modern">--}}
{{--                    Все вопросы →--}}
{{--                </a>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    <section class="faq-section py-5 bg-light fade-in">
        <div class="container">

            <h2 class="text-center mb-5">Частые вопросы</h2>

            <div class="faq-list">

                <div class="faq-item card mb-3">
                    <div class="faq-question card-header d-flex justify-content-between align-items-center">
                        <span>Сколько стоит заправка картриджа?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer card-body">
                        Цена зависит от модели принтера. В среднем от 200 грн.
                    </div>
                </div>

                <div class="faq-item card mb-3">
                    <div class="faq-question card-header d-flex justify-content-between align-items-center">
                        <span>Сколько времени занимает ремонт?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer card-body">
                        Диагностика обычно занимает 1 день.
                    </div>
                </div>

                <div class="faq-item card mb-3">
                    <div class="faq-question card-header d-flex justify-content-between align-items-center">
                        <span>Есть ли гарантия?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer card-body">
                        Да, мы предоставляем гарантию на все работы.
                    </div>
                </div>

            </div>

            <div class="text-center mt-4">
                <a href="/faq" class="btn btn-primary">Все вопросы →</a>
            </div>

        </div>
    </section>

    <section class="offices-section fade-in">
        <div class="container">

            <h2 class="text-center mb-5">Наші офіси</h2>

            <div class="row">

                <!-- КАРТА -->
                <div class="col-md-9">
                    <div id="mapdiv" class="map"></div>
                </div>

                <!-- СПИСОК ОФИСОВ -->
                <div class="col-md-3">

                    <div class="office-list">

                        <div class="office-card" data-lat="46.43711" data-lng="30.730315">
                            <h5>Адміральський</h5>
                            <p>Одеса</p>
                        </div>

                        <div class="office-card" data-lat="46.482146" data-lng="30.730281">
                            <h5>Соборка</h5>
                            <p>Одеса</p>
                        </div>

                        <div class="office-card" data-lat="46.575718" data-lng="30.7951071">
                            <h5>Дніпродорога</h5>
                            <p>Одеса</p>
                        </div>

                        <div class="office-card" data-lat="46.400676" data-lng="30.72347">
                            <h5>Корольова</h5>
                            <p>Одеса</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">© СИНТ-Мастер</div>
                    <div class="col-md-6 text-md-end">Ремонт принтерів в Одесі</div>
                </div>
            </div>
        </footer>

@endsection