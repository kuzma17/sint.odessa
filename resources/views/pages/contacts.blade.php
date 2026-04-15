@extends('layouts.app')

@section('style', asset('/css/contacts.css'))

@section('content')
    <section class="page-hero">
        <div class="container">
            <h1>Наши офисы</h1>
            <p>
                Вы можете обратиться в любой из наших сервисных центров в Одессе.
                Выберите ближайший филиал на карте и приезжайте в удобное время.
            </p>
        </div>
    </section>

{{--    <section class="offices-section fade-in">--}}
{{--        <div class="container">--}}

{{--            <h2 class="text-center mb-5">Наші офіси</h2>--}}
{{--            <div class="section-divider"></div>--}}

{{--            <div class="row">--}}

{{--                <!-- КАРТА -->--}}
{{--                <div class="col-md-9">--}}
{{--                    <div id="mapdiv" class="map"></div>--}}
{{--                </div>--}}

{{--                <!-- СПИСОК ОФИСОВ -->--}}
{{--                <div class="col-md-3">--}}

{{--                    <div class="office-list">--}}

{{--                        <div class="office-card" data-lat="46.43711" data-lng="30.730315">--}}
{{--                            <h5>Адміральський</h5>--}}
{{--                            <p>Одеса</p>--}}
{{--                        </div>--}}

{{--                        <div class="office-card" data-lat="46.482146" data-lng="30.730281">--}}
{{--                            <h5>Соборка</h5>--}}
{{--                            <p>Одеса</p>--}}
{{--                        </div>--}}

{{--                        <div class="office-card" data-lat="46.575718" data-lng="30.7951071">--}}
{{--                            <h5>Дніпродорога</h5>--}}
{{--                            <p>Одеса</p>--}}
{{--                        </div>--}}

{{--                        <div class="office-card" data-lat="46.400676" data-lng="30.72347">--}}
{{--                            <h5>Корольова</h5>--}}
{{--                            <p>Одеса</p>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    <section class="section">
        <div class="container">

            <h2 class="text-center mb-5">Наши сервисные центры</h2>
            <div class="section-divider"></div>

            <div class="row g-4">

                <!-- Филиал -->

                <div class="col-md-6 col-lg-6">
                    <div class="card-box contact-office-card office-card" data-lat="46.43711" data-lng="30.730315">

                        <h4>Центр (Соборка)</h4>

                        <p>
                            Сервисный центр расположен в центральной части Одессы
                            и удобен для клиентов из делового центра города.
                        </p>

                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            Соборная площадь, 12
                        </p>

                        <p>
                            <i class="fa-solid fa-phone"></i>
                            +38 (048) XXX-XX-XX
                        </p>
                        <p>
                            <i class="fa-solid fa-map"></i> показать на карте
                        </p>

                    </div>
                </div>

                <!-- Филиал -->

                <div class="col-md-6 col-lg-6">
                    <div class="card-box contact-office-card">

                        <h4>Черемушки</h4>

                        <p>
                            Филиал обслуживает клиентов Малиновского района
                            и прилегающих кварталов.
                        </p>

                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            Адмиральский проспект, 33а
                        </p>

                        <p>
                            <i class="fa-solid fa-phone"></i>
                            +38 (048) XXX-XX-XX
                        </p>
                        <p>
                            <i class="fa-solid fa-map"></i> показать на карте
                        </p>

                    </div>
                </div>

                <!-- Филиал -->

                <div class="col-md-6 col-lg-6">
                    <div class="card-box contact-office-card">

                        <h4>Таирово</h4>

                        <p>
                            Удобный сервисный пункт для жителей Киевского района
                            и жилмассива Таирово.
                        </p>

                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            ул. Королева, 33
                        </p>

                        <p>
                            <i class="fa-solid fa-phone"></i>
                            +38 (048) XXX-XX-XX
                        </p>
                        <p>
                            <i class="fa-solid fa-map"></i> показать на карте
                        </p>

                    </div>
                </div>

                <!-- Филиал -->

                <div class="col-md-6 col-lg-6">
                    <div class="card-box contact-office-card">

                        <h4>Посёлок Котовского</h4>

                        <p>
                            Филиал обслуживает северную часть города
                            и позволяет быстро принять технику на ремонт.
                        </p>

                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            ул. Семена Палия, 94
                        </p>

                        <p>
                            <i class="fa-solid fa-phone"></i>
                            +38 (048) XXX-XX-XX
                        </p>
                        <p>
                            <i class="fa-solid fa-map"></i> показать на карте
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>

{{--    <section class="offices-section fade-in">--}}
{{--        <div class="container">--}}

{{--            <h2 class="text-center mb-5">Наши офисы на карте</h2>--}}

{{--            <div class="row">--}}

{{--                <!-- КАРТА -->--}}
{{--                <div class="col-md-9">--}}
{{--                    <div id="mapdiv" class="map"></div>--}}
{{--                </div>--}}

{{--                <!-- СПИСОК ОФИСОВ -->--}}
{{--                <div class="col-md-3">--}}

{{--                    <div class="office-list">--}}

{{--                        <div class="office-card" data-lat="46.482146" data-lng="30.730281">--}}
{{--                            <h5>Центр (Соборка)</h5>--}}
{{--                            <p>--}}
{{--                                <i class="fa-solid fa-location-dot"></i>--}}
{{--                                Соборная площадь, 12--}}
{{--                            </p>--}}
{{--                            <p>--}}
{{--                                <i class="fa-solid fa-phone"></i>--}}
{{--                                +38 (048) XXX-XX-XX--}}
{{--                            </p>--}}
{{--                        </div>--}}

{{--                        <div class="office-card" data-lat="46.43711" data-lng="30.730315">--}}
{{--                            <h5>Адміральський</h5>--}}
{{--                            <p>--}}
{{--                                <i class="fa-solid fa-location-dot"></i>--}}
{{--                                Адмиральский проспект, 33а--}}
{{--                            </p>--}}
{{--                            <p>--}}
{{--                                <i class="fa-solid fa-phone"></i>--}}
{{--                                +38 (048) XXX-XX-XX--}}
{{--                            </p>--}}
{{--                        </div>--}}

{{--                        <div class="office-card" data-lat="46.575718" data-lng="30.7951071">--}}
{{--                            <h5>пос. Котовского</h5>--}}
{{--                            <p>--}}
{{--                                <i class="fa-solid fa-location-dot"></i>--}}
{{--                                ул. Семена Палия, 94--}}
{{--                            </p>--}}
{{--                            <p>--}}
{{--                                <i class="fa-solid fa-phone"></i>--}}
{{--                                +38 (048) XXX-XX-XX--}}
{{--                            </p>--}}
{{--                        </div>--}}

{{--                        <div class="office-card" data-lat="46.400676" data-lng="30.72347">--}}
{{--                            <h5>Таирово</h5>--}}
{{--                            <p>--}}
{{--                                <i class="fa-solid fa-location-dot"></i>--}}
{{--                                ул. Королева, 33--}}
{{--                            </p>--}}
{{--                            <p>--}}
{{--                                <i class="fa-solid fa-phone"></i>--}}
{{--                                +38 (048) XXX-XX-XX--}}
{{--                            </p>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    @include('layouts.map')

{{--    <section class="section">--}}
{{--        <div class="container">--}}

{{--            <h2 class="text-center mb-5">Режим работы</h2>--}}
{{--            <div class="section-divider"></div>--}}

{{--            <div class="row justify-content-center">--}}

{{--                <div class="col-md-6 text-center">--}}

{{--                    <p><strong>Понедельник — Пятница</strong></p>--}}
{{--                    <p>09:00 – 18:00</p>--}}

{{--                    <p><strong>Суббота</strong></p>--}}
{{--                    <p>10:00 – 15:00</p>--}}

{{--                    <p><strong>Воскресенье</strong></p>--}}
{{--                    <p>Выходной</p>--}}

{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    <section class="section worktime-section">
        <div class="container">

            <h2 class="text-center mb-5">Режим работы</h2>
            <div class="section-divider"></div>

            <div class="row justify-content-center">

                <div class="col-md-6">

                    <div class="card-box worktime-card">

                        <div class="worktime-row">
                            <i class="fa-regular fa-calendar"></i>
                            <div>
                                <strong>Понедельник — Пятница</strong>
                                <span>09:00 – 18:00</span>
                            </div>
                        </div>

                        <div class="worktime-row">
                            <i class="fa-regular fa-calendar"></i>
                            <div>
                                <strong>Суббота</strong>
                                <span>10:00 – 15:00</span>
                            </div>
                        </div>

                        <div class="worktime-row">
                            <i class="fa-regular fa-calendar-xmark"></i>
                            <div>
                                <strong>Воскресенье</strong>
                                <span>Выходной</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

{{--    <section class="cta-section">--}}
{{--        <div class="container">--}}
{{--            <div class="cta-card">--}}
{{--                <div class="cta-text">--}}
{{--                    <h2>Потрібен ремонт техніки?</h2>--}}
{{--                    <p>--}}
{{--                        Залиште заявку і наш менеджер зв'яжеться з вами--}}
{{--                        протягом декількох хвилин--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="cta-action">--}}
{{--                    <a href="/contacts" class="btn btn-blue">--}}
{{--                        Залишити заявку--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    @include('layouts.cta')


@endsection
