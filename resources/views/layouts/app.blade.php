<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СИНТ-Мастер — Ремонт принтерів та картриджів</title>

    <!-- Bootstrap 5 CDN -->
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">--}}

{{--    <!-- FontAwesome -->--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

{{--    <!-- Google Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Ваш CSS -->
{{--    <link rel="stylesheet" href="{{ asset('css/site.css') }}">--}}

{{--    <link rel="stylesheet" href="{{ asset('css/service.css') }}">--}}

{{--    <link rel="stylesheet" href="{{ asset('css/repair.css') }}">--}}

{{--    <link rel="stylesheet" href="{{ asset('css/about.css') }}">--}}

    <link rel="stylesheet" href="@yield('style')">


{{--    Header--}}
    <script>
        // window.addEventListener("scroll", () => {
        //     const header = document.querySelector(".site-header");
        //
        //     if (!header) return;
        //
        //     if (window.scrollY > 10) {  // Когда прокрутили больше чем на 100px
        //        // header.classList.add("fixed");
        //         // document.body.classList.add("fixed-header");
        //     } else {
        //         //header.classList.remove("fixed");
        //         // document.body.classList.remove("fixed-header");
        //     }
        // });

        document.addEventListener("DOMContentLoaded", () => {

            const phoneBlock = document.querySelector(".header-phone-dropdown");

            if(!phoneBlock) return;

            phoneBlock.addEventListener("click", () => {
                phoneBlock.classList.toggle("open");
            });

            document.addEventListener("click", (e) => {

                if(!phoneBlock.contains(e.target)){
                    phoneBlock.classList.remove("open");
                }

            });

        });


        document.addEventListener("DOMContentLoaded", () => {
            const header = document.querySelector(".site-header");
            const toggle = document.querySelector(".mobile-toggle");

            if (!toggle || !header) {
                console.log("burger elements not found");
                return;
            }

            toggle.addEventListener("click", () => {
                header.classList.toggle("open");  // Меняем класс, который откроет меню
                console.log("burger clicked");
            });
        });

    </script>


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

{{--    <script>--}}

{{--        window.addEventListener('scroll', function(){--}}

{{--            let header = document.querySelector('.site-header');--}}

{{--            if(window.scrollY > 50){--}}
{{--                header.classList.add('scrolled');--}}
{{--            }else{--}}
{{--                header.classList.remove('scrolled');--}}
{{--            }--}}

{{--        });--}}

{{--    </script>--}}

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

{{--    <script async--}}
{{--            defer--}}
{{--            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBVVcWv1BhicBJlD8xidprjt39Z_ZO2pU&callback=initMap&v=weekly&libraries=marker"--}}
{{--    ></script>--}}

{{--    <script>--}}
{{--        let map;--}}
{{--        let markers = [];--}}
{{--        let bounds;--}}

{{--        function initMap() {--}}
{{--            map = new google.maps.Map(document.getElementById("mapdiv"), {--}}
{{--                center: { lat: 46.48, lng: 30.73 },--}}
{{--                zoom: 11--}}
{{--            });--}}

{{--            bounds = new google.maps.LatLngBounds();--}}

{{--            // Добавляем офисы--}}
{{--            addMarker(46.43711, 30.730315, "Адміральський");--}}
{{--            addMarker(46.482146, 30.730281, "Соборка");--}}
{{--            addMarker(46.575718, 30.7951071, "Дніпродорога");--}}
{{--            addMarker(46.400676, 30.72347, "Корольова");--}}

{{--            map.fitBounds(bounds);--}}
{{--        }--}}

{{--        function addMarker(lat, lng, title) {--}}
{{--            const position = { lat: lat, lng: lng };--}}

{{--            const marker = new google.maps.Marker({--}}
{{--                position: position,--}}
{{--                map: map,--}}
{{--                title: title,--}}
{{--                icon: {--}}
{{--                    url: '/images/marker.svg',--}}
{{--                    scaledSize: new google.maps.Size(40, 40)--}}
{{--                }--}}
{{--            });--}}

{{--            const infowindow = new google.maps.InfoWindow({--}}
{{--                content: `<strong>${title}</strong>`--}}
{{--            });--}}

{{--            marker.addListener('mouseover', () => infowindow.open(map, marker));--}}
{{--            marker.addListener('mouseout', () => infowindow.close());--}}

{{--            marker.addListener('click', () => focusOffice(lat, lng));--}}

{{--            markers.push(marker);--}}
{{--            bounds.extend(position);--}}
{{--        }--}}

{{--        function focusOffice(lat, lng) {--}}

{{--            // перемещаем карту--}}
{{--            map.panTo({ lat: lat, lng: lng });--}}
{{--            map.setZoom(15);--}}

{{--            // прокрутка страницы к карте--}}
{{--            const mapBlock = document.getElementById("mapdiv");--}}
{{--            mapBlock.scrollIntoView({--}}
{{--                behavior: "smooth",--}}
{{--                block: "center"--}}
{{--            });--}}

{{--            // подсветка карточки--}}
{{--            document.querySelectorAll(".office-card").forEach(card => {--}}
{{--                card.classList.remove("active");--}}

{{--                if (--}}
{{--                    parseFloat(card.dataset.lat) === lat &&--}}
{{--                    parseFloat(card.dataset.lng) === lng--}}
{{--                ) {--}}
{{--                    card.classList.add("active");--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}

{{--        // Клик на карточку → карта фокус--}}
{{--        document.addEventListener("DOMContentLoaded", () => {--}}
{{--            document.querySelectorAll(".office-card").forEach(card => {--}}
{{--                card.addEventListener("click", function () {--}}
{{--                    const lat = parseFloat(this.dataset.lat);--}}
{{--                    const lng = parseFloat(this.dataset.lng);--}}
{{--                    focusOffice(lat, lng);--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}


</head>

<body>
@include('layouts.header')

@yield('content')

@include('layouts.footer')

{{--<script type="module" src="{{asset('/js/app.js')}}"></script>--}}
{{--<script type="module" src="@yield('script')"></script>--}}

{{--<div class="floating-cta"--}}
{{--     data-bs-toggle="modal"--}}
{{--     data-bs-target="#orderModal">--}}

{{--    <i class="fa-solid fa-phone"></i>--}}

{{--</div>--}}

<script>
    window.pageModules = @yield('pageModules', '[]');
</script>

<script type="module" src="{{ asset('js/app.js') }}"></script>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>