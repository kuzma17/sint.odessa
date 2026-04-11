@extends('layouts.appSite')

@section('content')

    <section class="page-hero">
        <div class="container">
            <h1>Наші послуги</h1>
            <p>
                Мы выполняем профессиональный ремонт и обслуживание офисной
                и компьютерной техники. Наш сервисный центр предлагает
                полный спектр услуг — от заправки картриджей до ремонта
                принтеров и компьютеров.
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