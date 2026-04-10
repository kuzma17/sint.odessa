@extends('layouts.appSite')

@section('content')

    <section class="page-hero">
        <div class="container">
            <h1>Наші послуги</h1>
            <p>
                Професійний ремонт техніки та обслуговування принтерів, комп'ютерів і картриджів в Одесі
            </p>
        </div>
    </section>

    <section class="services fade-in">
        <div class="container">
            <h2 class="text-center mb-5">Наши услуги</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 justify-content-center">
                    <a href="{{route('services.cartridge-refill')}}" class="service-box">
                        <img src="/images/services/cartridge.webp">
                        <div class="service-info">
                            <h3>Заправка картриджів</h3>
                            <p>
                                HP, Canon, Epson
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('services.printer-repair')}}" class="service-box">
                        <img src="/images/services/printer.webp">
                        <div class="service-info">
                            <h3>Ремонт принтерів</h3>
                            <p>
                                Лазерні та струменеві
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('services.pc-repair')}}" class="service-box">
                        <img src="/images/services/repair.webp">
                        <div class="service-info">
                            <h3>Ремонт ПК</h3>
                            <p>
                                Діагностика та ремонт
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/services/pc-repair" class="service-box">
                        <img src="/images/dellivery_023.jpg">
                        <div class="service-info">
                            <h3>Доставка</h3>
                            <p>
                                Доставка отремонтированной техники в офис, на дом
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

{{--    <section class="services fade-in">--}}
{{--        <div class="container">--}}
{{--            <h2 class="text-center mb-5">Дополнительные услуги</h2>--}}
{{--            <div class="row g-4 justify-content-center">--}}
{{--                <div class="col-md-4">--}}
{{--                    <a href="/services/printer-repair" class="service-box">--}}
{{--                        <img src="/images/services/diagnostic2.webp">--}}
{{--                        <div class="service-info">--}}
{{--                            <h3>Диагностика</h3>--}}
{{--                            <p>--}}
{{--                                Осмотр, выявление неисправностей, согласование с заказчиком.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <a href="/services/pc-repair" class="service-box">--}}
{{--                        <img src="/images/dellivery_023.jpg">--}}
{{--                        <div class="service-info">--}}
{{--                            <h3>Доставка</h3>--}}
{{--                            <p>--}}
{{--                                Доставка отремонтированной техники в офис, на дом--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="service-text">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <h2>Современный сервис</h2>
                    <p>
                        Мы постоянно развиваемся и стараемся идти в ногу со временем, внедряя новые технологии и сервисы для удобства клиентов.
                    </p>
                    <p>
                        Сегодня вы можете:
                    </p>
                    <ul>
                        <li>оставить онлайн-заявку на ремонт</li>
                        <li>получить консультацию специалиста</li>
                        <li>выбрать ближайший филиал на карте</li>
                        <li>быстро передать технику в сервис</li>
                        <li>получить качественное обслуживание по ремонту</li>
                    </ul>
                    <p>
                        Мы стремимся сделать обслуживание максимально простым, удобным и быстрым.
                    </p>

                    <h2>Наша команда</h2>

                    <p>
                        Главная ценность нашей компании — это дружная и сплочённая команда профессионалов.
                        В сервисном центре работают специалисты с большим опытом ремонта техники, которые постоянно
                        повышают свою квалификацию и следят за новыми технологиями в сфере обслуживания оборудования.
                    </p>
                    <p>
                        Благодаря этому большинство неисправностей устраняется в кратчайшие сроки, а качество
                        выполненных работ соответствует высоким профессиональным стандартам.
                    </p>

                </div>

                <div class="col-lg-6">

                    <img src="/images/pages/service.webp"
                         class="img-fluid service-image"
                         alt="Сервисный центр">

                </div>

            </div>

        </div>
    </section>

    <section class="section">
        <div class="container">

            <h2 class="text-center mb-5">Почему выбирают наш сервис</h2>
            <div class="section-divider"></div>

            <div class="row g-4 text-center justify-content-center">

                <div class="col-md-4">
                    <div class="adv-card">
                        <i class="fa-solid fa-user-tie"></i>
                        <h4>Опытные инженеры</h4>
                        <p>Специалисты с опытом более 20 лет</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="adv-card">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <h4>Современное оборудование</h4>
                        <p>Используем профессиональные инструменты</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="adv-card">
                        <i class="fa-solid fa-truck"></i>
                        <h4>Быстрая доставка</h4>
                        <p>Заберем и вернем технику после ремонта</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="adv-card">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h4>Гарантия на работы</h4>
                        <p>Гарантия на ремонт и обслуживание</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <div class="cta-text">
                    <h2>Потрібен ремонт техніки?</h2>
                    <p>
                        Залиште заявку і наш менеджер зв'яжеться з вами
                        протягом декількох хвилин
                    </p>
                </div>
                <div class="cta-action">
                    <a href="/contacts" class="btn btn-blue">
                        Залишити заявку
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection