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

{{--    <section class="section">--}}
{{--        <div class="container">--}}
{{--            <h2 class="text-center mb-5">Наши сервисные центры</h2>--}}
{{--            <div class="section-divider"></div>--}}
{{--            <div class="row g-4">--}}

{{--                <!-- Филиал -->--}}
{{--                <div class="col-md-6 col-lg-6">--}}
{{--                    <div class="card-box contact-office-card btn-office" data-lat="46.482146" data-lng="30.730281">--}}

{{--                        <h4>Центр (Соборка)</h4>--}}
{{--                        <p>--}}
{{--                            Сервисный центр расположен в центральной части Одессы--}}
{{--                            и удобен для клиентов из делового центра города.--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-location-dot"></i>--}}
{{--                            Соборная площадь, 12--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-phone"></i>--}}
{{--                            +38 (048) XXX-XX-XX--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-map"></i> показать на карте--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Филиал -->--}}

{{--                <div class="col-md-6 col-lg-6">--}}
{{--                    <div class="card-box contact-office-card btn-office" data-lat="46.43711" data-lng="30.730315">--}}
{{--                        <h4>Черемушки</h4>--}}
{{--                        <p>--}}
{{--                            Филиал обслуживает клиентов Малиновского района--}}
{{--                            и прилегающих кварталов.--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-location-dot"></i>--}}
{{--                            Адмиральский проспект, 33а--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            <i class="fa-solid fa-phone"></i>--}}
{{--                            +38 (048) XXX-XX-XX--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-map"></i> показать на карте--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Филиал -->--}}

{{--                <div class="col-md-6 col-lg-6">--}}
{{--                    <div class="card-box contact-office-card btn-office" data-lat="46.575718" data-lng="30.7951071">--}}
{{--                        <h4>Посёлок Котовского</h4>--}}
{{--                        <p>--}}
{{--                            Филиал обслуживает северную часть города--}}
{{--                            и позволяет быстро принять технику на ремонт.--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-location-dot"></i>--}}
{{--                            ул. Семена Палия, 94--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-phone"></i>--}}
{{--                            +38 (048) XXX-XX-XX--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-map"></i> показать на карте--}}
{{--                        </p>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 col-lg-6">--}}
{{--                    <div class="card-box contact-office-card btn-office" data-lat="46.400676" data-lng="30.72347">--}}
{{--                        <h4>Таирово</h4>--}}
{{--                        <p>--}}
{{--                            Удобный сервисный пункт для жителей Киевского района--}}
{{--                            и жилмассива Таирово.--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-location-dot"></i>--}}
{{--                            ул. Королева, 33--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-phone"></i>--}}
{{--                            +38 (048) XXX-XX-XX--}}
{{--                        </p>--}}
{{--                        <p>--}}
{{--                            <i class="fa-solid fa-map"></i> показать на карте--}}
{{--                        </p>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="section offices-page">

        <div class="container">

            <h2 class="text-center mb-5">Наши сервисные центры</h2>
            <div class="section-divider"></div>

            <div class="office-list-page">

                <!-- ОФИС -->

                <div class="office-block btn-office" data-lat="46.482146" data-lng="30.730281">

                    <div class="office-photo">
                        <img src="/images/offices/soborka.webp" style="width: 500px;height: 300px">
                    </div>

                    <div class="office-info">

                        <h3>Центр</h3>

                        <p class="office-desc">
                            Сервисный центр расположен в центральной части Одессы
                            и удобен для клиентов из делового центра города.
                        </p>

                        <div class="office-meta">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                Соборная площадь, 12
                            </div>

                            <div>
                                <i class="fa-solid fa-phone"></i>
                                +38 (048) XXX-XX-XX
                            </div>
                        </div>

                        <div class="office-actions">

                            <span class="office-map-link">
                                <i class="fa-solid fa-map"></i> показать на карте
                            </span>
                        </div>

                    </div>

                </div>


                <!-- ОФИС -->

                <div class="office-block btn-office" data-lat="46.43711" data-lng="30.730315">

                    <div class="office-photo">
                        <img src="/images/offices/admiralsky.webp" style="width: 500px;height: 300px">
                    </div>

                    <div class="office-info">

                        <h3>Черемушки</h3>

                        <p class="office-desc">
                            Филиал обслуживает клиентов Малиновского района, а также часть Приморскиго
                            и прилегающих кварталов.
                        </p>

                        <div class="office-meta">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                Адмиральский проспект, 33а
                            </div>

                            <div>
                                <i class="fa-solid fa-phone"></i>
                                +38 (048) XXX-XX-XX
                            </div>
                        </div>

                        <div class="office-actions">

                            <span class="office-map-link">
                                <i class="fa-solid fa-map"></i> показать на карте
                            </span>
                        </div>

                    </div>

                </div>


                <!-- ОФИС -->

                <div class="office-block btn-office" data-lat="46.575718" data-lng="30.7951071">

                    <div class="office-photo">
                        <img src="/images/offices/dneprodoroga.webp" style="width: 500px;height: 300px">
                    </div>

                    <div class="office-info">

                        <h3>Посёлок Котовского</h3>

                        <p class="office-desc">
                            Филиал обслуживает северную часть города
                            и позволяет быстро принять технику на ремонт.
                        </p>

                        <div class="office-meta">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                ул. Семена Палия, 94
                            </div>

                            <div>
                                <i class="fa-solid fa-phone"></i>
                                +38 (048) XXX-XX-XX
                            </div>
                        </div>

                        <div class="office-actions">

                            <span class="office-map-link">
                                <i class="fa-solid fa-map"></i> показать на карте
                            </span>
                        </div>

                    </div>

                </div>


                <!-- ОФИС -->
                <div class="office-block btn-office" data-lat="46.400676" data-lng="30.72347">

                    <div class="office-photo">
                        <img src="/images/offices/koroleva.webp" style="width: 500px;height: 300px">
                    </div>

                    <div class="office-info">

                        <h3>Таирово</h3>

                        <p class="office-desc">
                            Удобный сервисный пункт для жителей Киевского района
                            и жилмассива Таирово. Удобная транспортная развязка.
                        </p>

                        <div class="office-meta">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                                ул. Королева, 70
                            </div>

                            <div>
                                <i class="fa-solid fa-phone"></i>
                                +38 (048) XXX-XX-XX
                            </div>
                        </div>

                        <div class="office-actions">

                            <span class="office-map-link">
                                <i class="fa-solid fa-map"></i> показать на карте
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    @include('layouts.map')

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

    @include('layouts.cta')

@endsection
