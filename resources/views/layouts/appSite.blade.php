<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СИНТ-Мастер — Ремонт принтерів та картриджів</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Ваш CSS -->
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    <link rel="stylesheet" href="{{ asset('css/service.css') }}">

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            let slider = document.querySelector('#heroCarousel');

            if(!slider) return;

            slider.addEventListener('slide.bs.carousel', function () {

                document.querySelectorAll('.slide-content h1, .slide-content p, .slide-content a')
                    .forEach(el => {

                        el.style.animation = 'none';
                        el.offsetHeight; // reflow
                        el.style.animation = '';

                    });

            });

        });

    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelectorAll('.faq-item').forEach(item => {
                const question = item.querySelector('.faq-question');
                const answer = item.querySelector('.faq-answer');

                question.addEventListener('click', function() {
                    if(!answer) return;

                    item.classList.toggle('open');
                });
            });

        });
    </script>

    <script>

        window.addEventListener('scroll', function(){

            let header = document.querySelector('.site-header');

            if(window.scrollY > 50){
                header.classList.add('scrolled');
            }else{
                header.classList.remove('scrolled');
            }

        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {

            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target); // один раз
                    }
                });
            }, {threshold: 0.1});

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });

        });

    </script>

{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBVVcWv1BhicBJlD8xidprjt39Z_ZO2pU&callback=initMap" async defer></script>--}}

    <script async
            defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBVVcWv1BhicBJlD8xidprjt39Z_ZO2pU&callback=initMap&v=weekly&libraries=marker"
    ></script>

    <script>
        let map;
        let markers = [];
        let bounds;

        function initMap() {
            map = new google.maps.Map(document.getElementById("mapdiv"), {
                center: { lat: 46.48, lng: 30.73 },
                zoom: 11
            });

            bounds = new google.maps.LatLngBounds();

            // Добавляем офисы
            addMarker(46.43711, 30.730315, "Адміральський");
            addMarker(46.482146, 30.730281, "Соборка");
            addMarker(46.575718, 30.7951071, "Дніпродорога");
            addMarker(46.400676, 30.72347, "Корольова");

            map.fitBounds(bounds);
        }

        function addMarker(lat, lng, title) {
            const position = { lat: lat, lng: lng };

            const marker = new google.maps.Marker({
                position: position,
                map: map,
                title: title,
                icon: {
                    url: '/images/marker.svg',
                    scaledSize: new google.maps.Size(40, 40)
                }
            });

            const infowindow = new google.maps.InfoWindow({
                content: `<strong>${title}</strong>`
            });

            marker.addListener('mouseover', () => infowindow.open(map, marker));
            marker.addListener('mouseout', () => infowindow.close());

            marker.addListener('click', () => focusOffice(lat, lng));

            markers.push(marker);
            bounds.extend(position);
        }

        function focusOffice(lat, lng) {
            map.panTo({ lat: lat, lng: lng });
            map.setZoom(15);

            // Подсветка карточки
            document.querySelectorAll(".office-card").forEach(card => {
                card.classList.remove("active");
                if (parseFloat(card.dataset.lat) === lat && parseFloat(card.dataset.lng) === lng) {
                    card.classList.add("active");
                }
            });
        }

        // Клик на карточку → карта фокус
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".office-card").forEach(card => {
                card.addEventListener("click", function () {
                    const lat = parseFloat(this.dataset.lat);
                    const lng = parseFloat(this.dataset.lng);
                    focusOffice(lat, lng);
                });
            });
        });
    </script>


</head>

<body>
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

                {{--                    <!-- ПОИСК -->--}}
                {{--                    <form class="d-flex me-3" action="/search">--}}
                {{--                        <input class="form-control form-control-sm" type="search" placeholder="Поиск" name="q">--}}
                {{--                    </form>--}}

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
                {{--                    <a href="#contact" class="btn btn-primary btn-sm">--}}
                {{--                        Заявка--}}
                {{--                    </a>--}}
                <a href="#contact" class="btn btn-primary-modern btn-sm header-btn">
                    Залишити заявку
                </a>

            </div>

        </nav>

    </div>

</header>

{{--<header class="site-header">--}}

{{--    <div class="container">--}}

{{--        <nav class="navbar navbar-expand-lg navbar-light">--}}

{{--            <!-- ЛОГО -->--}}
{{--            <a class="navbar-brand logo" href="/">--}}
{{--                <img src="/images/logo_sint-master.jpg" alt="СИНТ-Мастер">--}}
{{--            </a>--}}

{{--            <!-- BURGER -->--}}
{{--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <!-- МЕНЮ -->--}}
{{--            <div class="collapse navbar-collapse" id="mainMenu">--}}

{{--                <ul class="navbar-nav me-auto">--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/">Главная</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/about">О нас</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/services">Услуги</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/promo">Акции</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/faq">FAQ</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/contacts">Контакты</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}

{{--                <!-- ПРАВАЯ ЧАСТЬ -->--}}
{{--                <div class="header-right d-lg-flex align-items-center">--}}

{{--                    <div class="header-phone me-3">--}}
{{--                        <a href="tel:+380000000000">--}}
{{--                            <i class="fa-solid fa-phone"></i>--}}
{{--                            +38 (000) 000-00-00--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <a href="#contact" class="btn btn-primary-modern btn-sm header-btn">--}}
{{--                        Заявка--}}
{{--                    </a>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--        </nav>--}}

{{--    </div>--}}

{{--</header>--}}

@yield('content')

<footer class="footer">

    <div class="container">

        <div class="row">

            <!-- ЛОГО + описание -->
            <div class="col-lg-4 mb-4">

                <div class="footer-logo">
                    <img src="/images/logo-inversion.png" alt="СИНТ-Мастер">
                </div>
                {{--                    <p>Сервісний центр<br>«СИНТ-Мастер»</p>--}}

                <p class="footer-text">
                    Сервісний центр «СИНТ-Мастер» — професійний ремонт принтерів,
                    ПК та заправка картриджів в Одесі.
                </p>

            </div>


            <!-- МЕНЮ -->
            <div class="col-lg-2 col-md-6 mb-4">

                <h5 class="footer-title">Навігація</h5>

                <ul class="footer-links">

                    <li><a href="/">Головна</a></li>
                    <li><a href="/about">Про нас</a></li>
                    <li><a href="/services">Послуги</a></li>
                    <li><a href="/promo">Акції</a></li>
                    <li><a href="/faq">FAQ</a></li>

                </ul>

            </div>


            <!-- УСЛУГИ -->
            <div class="col-lg-3 col-md-6 mb-4">

                <h5 class="footer-title">Послуги</h5>

                <ul class="footer-links">

                    <li><a href="#">Заправка картриджів</a></li>
                    <li><a href="#">Ремонт принтерів</a></li>
                    <li><a href="#">Ремонт ПК</a></li>
                    <li><a href="#">Діагностика техніки</a></li>

                </ul>

            </div>


            <!-- КОНТАКТЫ -->
            <div class="col-lg-3 mb-4">

                <h5 class="footer-title">Контакти</h5>

                <div class="footer-contact">

                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        Одеса
                    </p>

                    <p>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+380000000000">
                            +38 (000) 000-00-00
                        </a>
                    </p>

                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        info@sint-master.ua
                    </p>

                </div>

            </div>

        </div>
        <div class="footer-social">

            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-telegram"></i></a>

        </div>


        <!-- нижняя часть -->
        <div class="footer-bottom">

            <p>
                © 2026 СИНТ-Мастер. Всі права захищені.
            </p>

        </div>

    </div>

</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>