@extends('layouts.appSite')

@section('content')

    <section class="page-hero">

        <div class="container">

            <h1>Наші послуги</h1>

            <p>
                Професійний ремонт техніки та обслуговування
                принтерів, комп'ютерів і картриджів в Одесі
            </p>

        </div>

    </section>


    <section class="services fade-in">
        <div class="container">
            <h2 class="text-center mb-5">Наши основные услуги</h2>
            <div class="row g-4">
                <div class="col-md-4 justify-content-center">
                    <a href="/services/cartridge-refill" class="service-box">
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
                    <a href="/services/printer-repair" class="service-box">
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
                    <a href="/services/pc-repair" class="service-box">
                        <img src="/images/services/repair.webp">
                        <div class="service-info">
                            <h3>Ремонт ПК</h3>
                            <p>
                                Діагностика та ремонт
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="services fade-in">
        <div class="container">
            <h2 class="text-center mb-5">Дополнительные услуги</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <a href="/services/printer-repair" class="service-box">
                        <img src="/images/services/diagnostic2.webp">
                        <div class="service-info">
                            <h3>Диагностика</h3>
                            <p>
                                Осмотр, выявление неисправностей, согласование с заказчиком.
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

                    <a href="/contacts" class="btn btn-primary-modern">
                        Залишити заявку
                    </a>

                </div>

            </div>

        </div>

    </section>

@endsection