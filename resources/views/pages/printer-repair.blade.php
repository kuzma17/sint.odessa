@extends('layouts.appSite')

@section('content')

    <section class="page-hero">
        <div class="container">
            <h1>Ремонт принтеров в Одессе</h1>
            <p>
                Профессиональный ремонт принтеров, МФУ и плоттеров.
                Быстрая диагностика и гарантия на выполненные работы.
            </p>
        </div>
    </section>

    <section class="service-text">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <h2>Профессиональный ремонт принтеров</h2>

{{--                    <p>--}}
{{--                        Наш сервисный центр выполняет профессиональный ремонт принтеров любой сложности.--}}
{{--                        Мы обслуживаем лазерные и струйные принтеры, многофункциональные устройства (МФУ),--}}
{{--                        а также плоттеры различных производителей.--}}
{{--                    </p>--}}

{{--                    <p>--}}
{{--                        Наши специалисты имеют более 20 лет опыта работы с офисной и печатной техникой.--}}
{{--                        Благодаря большому практическому опыту большинство неисправностей удаётся выявить и устранить в кратчайшие сроки.--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        Мы выполняем диагностику, ремонт, обслуживание и профилактику оборудования,--}}
{{--                        используем качественные комплектующие и профессиональные расходные материалы.--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        В нашем сервисе можно устранить такие проблемы как:--}}
{{--                    </p>--}}
{{--                        <ul>--}}
{{--                        <li>принтер не печатает</li>--}}
{{--                        <li>появляются полосы на печати</li>--}}
{{--                        <li>зажёвывает бумагу</li>--}}
{{--                        <li>возникают ошибки картриджа</li>--}}
{{--                        <li>устройство не включается</li>--}}
{{--                    </ul>--}}
{{--                    <p>--}}
{{--                        После ремонта техника проходит проверку, и мы предоставляем гарантию на выполненные работы.--}}
{{--                    </p>--}}
                    <p>
                        Наш сервисный центр выполняет <strong>ремонт принтеров в Одессе</strong> любой сложности.
                        Мы обслуживаем лазерные и струйные принтеры, многофункциональные устройства (МФУ),
                        а также плоттеры различных производителей.
                    </p>

                    <p>
                        Специалисты нашего сервиса имеют <strong>более 20 лет опыта работы</strong>
                        с офисной и печатной техникой. Благодаря большому практическому опыту
                        мы быстро выявляем причину неисправности и выполняем ремонт в кратчайшие сроки.
                    </p>

                    <p>
                        Мы выполняем диагностику, ремонт, профилактическое обслуживание и замену
                        неисправных деталей. Используем качественные комплектующие и профессиональные
                        расходные материалы, что позволяет обеспечить надежную и долгую работу техники.
                    </p>

                    <p>
                        Наш сервисный центр ремонтирует принтеры и МФУ таких брендов как
                        <strong>HP, Canon, Epson, Brother, Samsung, Xerox, Kyocera</strong>
                        и других производителей.
                    </p>

                                        <p>
                                            В нашем сервисе можно устранить такие проблемы как:
                                        </p>
                                            <ul>
                                            <li>принтер не печатает</li>
                                            <li>появляются полосы на печати</li>
                                            <li>зажёвывает бумагу</li>
                                            <li>возникают ошибки картриджа</li>
                                            <li>устройство не включается</li>
                                        </ul>

                    <p>
                        После выполнения ремонта оборудование проходит проверку,
                        и мы предоставляем <strong>гарантию на выполненные работы</strong>.
                    </p>

                </div>

                <div class="col-lg-6">

                    <img src="/images/pages/printer-repair.webp"
                         class="img-fluid service-image"
                         alt="Ремонт принтеров">

                </div>

            </div>

        </div>
    </section>

{{--    <section class="section">--}}
{{--        <div class="container">--}}

{{--            <h2 class="text-center mb-5">Какие устройства мы ремонтируем</h2>--}}
{{--            <div class="section-divider"></div>--}}

{{--            <div class="row g-4 text-center">--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Принтеры</h3>--}}
{{--                        <p>Лазерные и струйные модели</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>МФУ</h3>--}}
{{--                        <p>Принтер, сканер и копир в одном устройстве</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Плоттеры</h3>--}}
{{--                        <p>Ремонт широкоформатных устройств</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
            <section class="devices">
                <div class="container">

                    <h2 class="text-center mb-5">Какие устройства мы ремонтируем</h2>
                    <div class="section-divider"></div>

                    <div class="row g-4">

                        <div class="col-md-3">
                            <div class="service-card">
                                <h3>Лазерные принтеры</h3>
                                <p>
                                    Ремонт лазерных принтеров всех популярных производителей.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="service-card">
                                <h3>Струйные принтеры</h3>
                                <p>
                                    Обслуживание и ремонт струйных принтеров и систем СНПЧ.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="service-card">
                                <h3>МФУ</h3>
                                <p>
                                    Ремонт многофункциональных устройств: печать, сканирование, копирование.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="service-card">
                                <h3>Плоттеры</h3>
                                <p>
                                    Ремонт широкоформатных плоттеров для печати чертежей и графики.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

{{--        </div>--}}
{{--    </section>--}}

    <section class="brands bg-light py-4 fade-in">
        <div class="container text-center">
            <h2 class="text-center mb-5">Ми ремонтуємо техніку всіх популярних брендів</h2>
            <div class="section-divider"></div>
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

    <section class="section-light">
        <div class="container">

            <h2 class="text-center mb-5">Частые неисправности</h2>
            <div class="section-divider"></div>

            <div class="row g-4 service-card">

                <div class="col-md-6">

                    <ul class="service-list">
                        <li>Принтер не включается</li>
                        <li>Не захватывает бумагу</li>
                        <li>Печатает полосами</li>
                        <li>Замятие бумаги</li>
                    </ul>

                </div>

                <div class="col-md-6">

                    <ul class="service-list">
                        <li>Ошибка картриджа</li>
                        <li>Не печатает по сети</li>
                        <li>Плохое качество печати</li>
                        <li>Не определяется компьютером</li>
                    </ul>

                </div>

            </div>

        </div>
    </section>

{{--    <section class="advantages">--}}
{{--        <div class="container">--}}
{{--            <h2 class="text-center mb-5">Наши преимущества</h2>--}}
{{--            <div class="row g-4">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="adv-card">--}}
{{--                        <img src="/images/icons/experience.svg" alt="Опыт">--}}
{{--                        <h3>Более 20 лет опыта</h3>--}}
{{--                        <p>Наши специалисты имеют большой опыт в ремонте принтеров и МФУ.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="adv-card">--}}
{{--                        <img src="/images/icons/fast.svg" alt="Скорость">--}}
{{--                        <h3>Быстрое обслуживание</h3>--}}
{{--                        <p>Большинство неисправностей устраняется в кратчайшие сроки.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="adv-card">--}}
{{--                        <img src="/images/icons/guarantee.svg" alt="Гарантия">--}}
{{--                        <h3>Гарантия на ремонт</h3>--}}
{{--                        <p>Мы предоставляем официальную гарантию на все выполненные работы.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="section">
        <div class="container">
            <h2 class="text-center mb-5">Наши преимущества</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="adv-card">
                        <i class="fas fa-tools fa-3x mb-3"></i>
                        <h3>Более 20 лет опыта</h3>
                        <p>Наши специалисты имеют большой опыт в ремонте принтеров и МФУ.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="adv-card">
                        <i class="fas fa-bolt fa-3x mb-3"></i>
                        <h3>Быстрое обслуживание</h3>
                        <p>Большинство неисправностей устраняется в кратчайшие сроки.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="adv-card">
                        <i class="fas fa-shield-alt fa-3x mb-3"></i>
                        <h3>Гарантия на ремонт</h3>
                        <p>Мы предоставляем официальную гарантию на все выполненные работы.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="workflow fade-in">
        <div class="container">
            <h2 class="text-center mb-5">Как проходит ремонт</h2>
            <div class="section-divider"></div>
            <div class="workflow-row">

                <div class="workflow-step">
                    <div class="step-number">1</div>
                    <div class="step-card">
                        <h4>Диагностика</h4>
                        <p>Определяем причину неисправности и оцениваем стоимость ремонта.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">2</div>
                    <div class="step-card">
                        <h4>Согласование</h4>
                        <p>Обсуждаем с вами условия и стоимость ремонта перед началом работ.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">3</div>
                    <div class="step-card">
                        <h4>Ремонт</h4>
                        <p>Выполняем ремонт с использованием качественных деталей и материалов.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="step-number">4</div>
                    <div class="step-card">
                        <h4>Тестирование и выдача</h4>
                        <p>Проверяем работоспособность и возвращаем технику с гарантией.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="faq-section py-5 bg-light fade-in section-light">
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

    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <div class="cta-text">
                    <h2>Нужен ремонт принтера?</h2>
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