@extends('layouts.appSite')

@section('content')

    <section class="page-hero">
        <div class="container">

            <h1>Доставка техники в сервис и обратно</h1>

            <p>
                Заберём вашу технику, выполним ремонт и доставим обратно.
                Удобно для дома и офиса.
            </p>

        </div>
    </section>

    <section class="service-text">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <h2>Удобная доставка техники</h2>

                    <p>
                        Мы предлагаем удобную услугу доставки техники в наш сервисный центр.
                        Если у вас нет возможности самостоятельно привезти принтер, компьютер или другое оборудование,
                        наш курьер может забрать устройство по указанному адресу.
                    </p>

                    <p>
                        Современная техника часто используется ежедневно, поэтому её поломка
                        может серьёзно повлиять на работу или домашние задачи.
                        Чтобы ремонт не занимал много времени и не создавал дополнительных неудобств,
                        мы предлагаем услугу доставки техники в сервисный центр.
                    </p>

                    <p>
                        Наши специалисты аккуратно принимают оборудование, выполняют диагностику,
                        устраняют неисправность и проверяют устройство перед возвратом клиенту.
                        Благодаря этому вы получаете полностью исправную технику без необходимости
                        самостоятельно заниматься транспортировкой.
                    </p>

                    <p>
                        Мы работаем с различными видами техники: принтерами, МФУ, компьютерами, ноутбуками,
                        мониторами и источниками бесперебойного питания. Вся техника доставляется
                        в сервис аккуратно и безопасно.
                    </p>

                    <p>
                        Это особенно удобно для офисов, компаний и клиентов, у которых нет времени
                        на поездку в сервисный центр. Мы аккуратно транспортируем технику,
                        выполняем диагностику и ремонт, после чего доставляем устройство обратно.
                    </p>

                    <p>
                        Услуга доставки позволяет сэкономить время и получить профессиональный ремонт
                        без лишних хлопот. Мы работаем как с частными клиентами, так и с организациями.
                    </p>

                </div>

                <div class="col-lg-6">

                    <img src="/images/pages/delivery.webp"
                         class="img-fluid service-image"
                         alt="Доставка техники">

                </div>

            </div>

        </div>
    </section>

    <section class="workflow fade-in">
        <div class="container">

            <h2 class="text-center mb-5">Как работает доставка</h2>
            <div class="section-divider"></div>

            <div class="workflow-row">

                <div class="workflow-step">
                    <div class="step-number">1</div>
                    <div class="step-card">
                        <h3>Оставляете заявку</h3>
                        <p>Свяжитесь с нами по телефону или через сайт</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">2</div>
                    <div class="step-card">
                        <h3>Курьер забирает технику</h3>
                        <p>Мы заберём устройство у вас дома или в офисе</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">3</div>
                    <div class="step-card">
                        <h3>Диагностика и ремонт</h3>
                        <p>Техника проходит диагностику и обслуживание</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">4</div>
                    <div class="step-card">
                        <h3>Доставка обратно</h3>
                        <p>После ремонта техника возвращается к вам</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="section-light">
        <div class="container">

            <h2 class="text-center mb-5">Преимущества доставки</h2>
            <div class="section-divider"></div>

            <div class="row text-center g-4">

                <div class="col-md-3">
                    <div class="adv-card">
                        <i class="fa-solid fa-truck"></i>
                        <h4>Удобно</h4>
                        <p>Не нужно ехать в сервисный центр</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card">
                        <i class="fa-solid fa-clock"></i>
                        <h4>Экономия времени</h4>
                        <p>Курьер приедет в удобное время</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card">
                        <i class="fa-solid fa-shield"></i>
                        <h4>Безопасность</h4>
                        <p>Техника аккуратно транспортируется</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <h4>Профессиональный сервис</h4>
                        <p>Диагностика и ремонт в сервисном центре</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <div class="cta-text">
                    <h2>Нужно забрать технику на ремонт?</h2>
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