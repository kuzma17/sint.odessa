@extends('layouts.app')

@section('style', asset('/css/services.css'))

@section('content')
    <section class="page-hero">
        <div class="container">
            <h1>Ремонт компьютеров и ноутбуков в Одессе</h1>
            <p>
                Профессиональный ремонт ПК, ноутбуков и офисной техники.
                Диагностика, модернизация, установка лицензионного программного обеспечения.
            </p>
        </div>
    </section>

    <section class="service-text">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <h2>Профессиональный ремонт компьютерной техники</h2>

                    <p>
                        Наш сервисный центр выполняет ремонт компьютеров и ноутбуков
                        любой сложности. Мы обслуживаем офисные и домашние компьютеры,
                        ноутбуки, мониторы, источники бесперебойного питания (UPS)
                        и другую компьютерную технику.
                    </p>

                    <p>
                        Специалисты сервиса имеют большой опыт в диагностике
                        и ремонте компьютерного оборудования. Мы быстро определяем
                        причину неисправности и выполняем качественный ремонт
                        с использованием надежных комплектующих.
                    </p>

                    <p>
                        В нашем сервисе можно устранить такие проблемы как:
                    </p>
                    <ul>
                        <li>не запускается компьютер</li>
                        <li>почистить пк, ноутбук</li>
                        <li>заменить батарею в УПС</li>
                        <li>замена матрицы в мониторе, ноутбуке</li>
                        <li>установка лицензионного ПО, драйверов</li>
                        <li>чистка системы, оптимизаци работы ОС</li>
                        <li>другие работы</li>
                    </ul>

                    <p>
                        Мы предоставляем <strong>гарантию на выполненные работы</strong>.
                    </p>

                </div>

                <div class="col-lg-6">

                    <img src="/images/pages/pc-repair2.webp"
                         class="img-fluid service-image"
                         alt="Ремонт компьютеров">

                </div>

            </div>

        </div>
    </section>

    <section class="section">
        <div class="container">

            <h2 class="text-center mb-5">Какие работы мы выполняем</h2>
            <div class="section-divider"></div>

            <div class="row g-4 justify-content-center">

                <div class="col-md-4">
                    <div class="card-box service-card">
                        <h3>Ноутбуки</h3>
                        <p>
                            Диагностика, ремонт и модернизация ноутбуков
                            различных производителей.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box service-card">
                        <h3>Компьютеры</h3>
                        <p>
                            Ремонт системных блоков, замена комплектующих
                            и модернизация ПК.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box service-card">
                        <h3>Мониторы</h3>
                        <p>
                            Ремонт мониторов и диагностика неисправностей
                            дисплеев.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box service-card">
                        <h3>Источники бесперебойного питания</h3>
                        <p>
                            Ремонт и обслуживание блоков бесперебойного
                            питания (UPS).
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box service-card">
                        <h3>Программное обеспечение</h3>
                        <p>
                            Установка операционных систем, драйверов
                            и лицензионного программного обеспечения.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box service-card">
                        <h3>Очистка ПК, ноутбуков</h3>
                        <p>
                            Очистка ПК, ноутбуков физически, а также програмно (вирусы, меделенная работа)
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="problems">
        <div class="container">

            <h2 class="text-center mb-5">Типичные неисправности</h2>
            <div class="section-divider"></div>

            <div class="row g-4 justify-content-center">

                <div class="col-md-4">
                    <div class="card-box problem-card">
                        Компьютер не включается
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box problem-card">
                        Ноутбук сильно нагревается
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box problem-card">
                        Медленно работает система
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box problem-card">
                        Не работает монитор
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box problem-card">
                        Не загружается Windows
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-box problem-card">
                        Компьютер сам перезагружается
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{--    <section class="section">--}}
    {{--        <div class="container">--}}
    {{--            <h2 class="text-center mb-5">Наши преимущества</h2>--}}
    {{--            <div class="row g-4">--}}
    {{--                <div class="col-md-4">--}}
    {{--                    <div class="adv-card">--}}
    {{--                        <i class="fas fa-tools fa-3x mb-3"></i>--}}
    {{--                        <h3>Более 20 лет опыта</h3>--}}
    {{--                        <p>Наши специалисты имеют большой опыт в ремонте принтеров и МФУ.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4">--}}
    {{--                    <div class="adv-card">--}}
    {{--                        <i class="fas fa-bolt fa-3x mb-3"></i>--}}
    {{--                        <h3>Быстрое обслуживание</h3>--}}
    {{--                        <p>Большинство неисправностей устраняется в кратчайшие сроки.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-md-4">--}}
    {{--                    <div class="adv-card">--}}
    {{--                        <i class="fas fa-shield-alt fa-3x mb-3"></i>--}}
    {{--                        <h3>Гарантия на ремонт</h3>--}}
    {{--                        <p>Мы предоставляем официальную гарантию на все выполненные работы.</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

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

{{--    <section class="section">--}}
{{--        <div class="container">--}}

{{--            <h2 class="text-center mb-5">Стоимость ремонта</h2>--}}
{{--            <div class="section-divider"></div>--}}

{{--            <div class="row g-4 justify-content-center">--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Диагностика</h3>--}}
{{--                        <p>--}}
{{--                            от 200 грн.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Ремонт компьютера</h3>--}}
{{--                        <p>--}}
{{--                            от 400 грн.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Ремонт ноутбука</h3>--}}
{{--                        <p>--}}
{{--                            от 500 грн.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Ремонт монитора</h3>--}}
{{--                        <p>--}}
{{--                            от 400 грн.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Ремонт УПС</h3>--}}
{{--                        <p>--}}
{{--                            от 300 грн.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Чистка ноутбука</h3>--}}
{{--                        <p>--}}
{{--                            от 1000 грн.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="service-card">--}}
{{--                        <h3>Установка ПО</h3>--}}
{{--                        <p>--}}
{{--                            от 1000 грн.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    <section class="section">
        <div class="container">

            <h2 class="text-center mb-5">Стоимость ремонта</h2>
            <div class="section-divider"></div>

            <div class="price-list">

                <div class="price-item">
                    <span class="service">Диагностика</span>
                    <span class="dots"></span>
                    <span class="price">от 200 грн</span>
                </div>

                <div class="price-item">
                    <span class="service">Ремонт компьютера</span>
                    <span class="dots"></span>
                    <span class="price">от 400 грн</span>
                </div>

                <div class="price-item">
                    <span class="service">Ремонт ноутбука</span>
                    <span class="dots"></span>
                    <span class="price">от 500 грн</span>
                </div>

                <div class="price-item">
                    <span class="service">Ремонт монитора</span>
                    <span class="dots"></span>
                    <span class="price">от 400 грн</span>
                </div>

                <div class="price-item">
                    <span class="service">Ремонт УПС</span>
                    <span class="dots"></span>
                    <span class="price">от 300 грн</span>
                </div>

                <div class="price-item">
                    <span class="service">Чистка ноутбука</span>
                    <span class="dots"></span>
                    <span class="price">от 1000 грн</span>
                </div>

                <div class="price-item">
                    <span class="service">Установка ПО</span>
                    <span class="dots"></span>
                    <span class="price">от 1000 грн</span>
                </div>

            </div>

            <p class="text-center mt-4">
                * Точная стоимость ремонта определяется после диагностики устройства
            </p>

        </div>
    </section>

    <section class="section py-5 bg-light fade-in">
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

                <div class="text-center mt-4">
                    <a href="/faq" class="btn btn-blue">Все вопросы →</a>
                </div>

            </div>


        </div>
    </section>

{{--    <section class="cta-section">--}}
{{--        <div class="container">--}}
{{--            <div class="cta-card">--}}
{{--                <div class="cta-text">--}}
{{--                    <h2>Нужен ремонт вашего устройства?</h2>--}}
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
