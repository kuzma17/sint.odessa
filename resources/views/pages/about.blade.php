@extends('layouts.appSite')

@section('content')

    <section class="page-hero">
        <div class="container">
            <h1>О компании</h1>
            <p>
                Более 25 лет мы занимаемся ремонтом офисной техники,
                заправкой картриджей и обслуживанием компьютеров в Одессе.
            </p>
        </div>
    </section>

    <section class="service-text">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <h2>Сервисный центр с многолетним опытом</h2>

                    <p>
                        Наш сервисный центр уже более 25 лет занимается ремонтом и обслуживанием офисной и компьютерной техники в Одессе.
                        За годы работы мы приобрели большой практический опыт и заслужили доверие тысяч клиентов —
                        как частных пользователей, так и компаний.
                    </p>

                    <p>
                        Основное направление нашей работы — профессиональный ремонт и обслуживание принтеров,
                        многофункциональных устройств (МФУ), плоттеров, компьютеров и ноутбуков, а также заправка и
                        восстановление картриджей. Мы используем современное диагностическое оборудование и качественные комплектующие,
                        что позволяет выполнять ремонт быстро и надежно.
                    </p>

                    <p>
                        Наш сервисный центр является официальным авторизованным сервисным центром Epson, что подтверждает
                        высокий уровень квалификации наших специалистов и соответствие международным стандартам обслуживания техники.
                    </p>

{{--                    <h2>Наши филиалы в Одессе</h2>--}}

{{--                    <p>--}}
{{--                        Для удобства клиентов мы открыли четыре сервисных пункта в разных районах города. Это позволяет--}}
{{--                        быстро принимать технику на обслуживание и значительно сокращает время ремонта.--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        Наши филиалы расположены:--}}
{{--                    </p>--}}
{{--                    <ul>--}}
{{--                        <li>в центре Одессы</li>--}}
{{--                        <li>на Черемушках</li>--}}
{{--                        <li>на Таирово</li>--}}
{{--                        <li>на поселке Котовского</li>--}}
{{--                    </ul>--}}
{{--                    <p>--}}
{{--                        Благодаря такому расположению клиенты могут выбрать наиболее удобный сервисный центр рядом с домом или офисом.--}}
{{--                    </p>--}}

                    <h2>Наши клиенты</h2>
                    <p>
                        Мы работаем как с частными клиентами, так и с корпоративным сектором. Среди наших постоянных
                        клиентов — компании, офисы, организации и банковские учреждения.
                    </p>
                    <p>
                        Для корпоративных клиентов мы предлагаем комплексное обслуживание офисной техники, оперативную
                        диагностику и профессиональный ремонт оборудования.
                    </p>

{{--                    <h2>Современный сервис</h2>--}}
{{--                    <p>--}}
{{--                        Мы постоянно развиваемся и стараемся идти в ногу со временем, внедряя новые технологии и сервисы для удобства клиентов.--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        Сегодня вы можете:--}}
{{--                    </p>--}}
{{--                    <ul>--}}
{{--                        <li>оставить онлайн-заявку на ремонт</li>--}}
{{--                        <li>получить консультацию специалиста</li>--}}
{{--                        <li>выбрать ближайший филиал на карте</li>--}}
{{--                        <li>быстро передать технику в сервис</li>--}}
{{--                        <li>получить качественное обслуживание по ремонту</li>--}}
{{--                    </ul>--}}
{{--                    <p>--}}
{{--                        Мы стремимся сделать обслуживание максимально простым, удобным и быстрым.--}}
{{--                    </p>--}}

{{--                    <h2>Наша команда</h2>--}}

{{--                    <p>--}}
{{--                        Главная ценность нашей компании — это дружная и сплочённая команда профессионалов.--}}
{{--                        В сервисном центре работают специалисты с большим опытом ремонта техники, которые постоянно--}}
{{--                        повышают свою квалификацию и следят за новыми технологиями в сфере обслуживания оборудования.--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        Благодаря этому большинство неисправностей устраняется в кратчайшие сроки, а качество--}}
{{--                        выполненных работ соответствует высоким профессиональным стандартам.--}}
{{--                    </p>--}}

                    <h2>
                        Гарантия качества
                    </h2>
                    <p>
                        Мы уверены в качестве нашей работы, поэтому предоставляем гарантию на выполненные услуги и установленные комплектующие.
                    </p>

                </div>

                <div class="col-lg-6">

                    <img src="/images/pages/office.webp"
                         class="img-fluid service-image"
                         alt="Сервисный центр">

                </div>

            </div>

        </div>
    </section>

    <section class="bg-light fade-in py-5">
        <div class="container">
            <h2 class="text-center mb-5">Чому обирають нас</h2>
            <div class="section-divider"></div>
            <div class="row text-center g-4">

                <div class="col-md-3">
                    <div class="adv-card-circle-modern">
                        <div class="adv-number" data-target="25"><span class="num">0</span><span class="unit">р.</span></div>
                        <p>Років досвіду</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card-circle-modern">
                        <div class="adv-number" data-target="1000"><span class="num">0</span><span class="unit"></span></div>
                        <p>Клієнтів</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card-circle-modern">
                        <div class="adv-number" data-target="24"><span class="num">0</span><span class="unit">ч</span></div>
                        <p>Реакція на заявку</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card-circle-modern">
                        <div class="adv-number" data-target="100"><span class="num">0</span><span class="unit">%</span></div>
                        <p>Гарантія ремонту</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.adv-number');

            const options = { threshold: 0.5 };

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const numSpan = counter.querySelector('.num');
                const unitSpan = counter.querySelector('.unit');
                const unit = unitSpan.textContent || '';
                const increment = target / 100;
                let current = 0;

                const update = () => {
                    current += increment;
                    if(current < target){
                        numSpan.textContent = Math.ceil(current);
                        requestAnimationFrame(update);
                    } else {
                        numSpan.textContent = target;
                    }
                };
                update();
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            counters.forEach(counter => observer.observe(counter));
        });
    </script>



    <section class="section">
        <div class="container">

            <h2 class="text-center mb-5">История компании</h2>
            <div class="section-divider"></div>

            <div class="timeline-advanced">

                <div class="timeline-row left">
                    <div class="timeline-card">
                        <span class="year">1999</span>
                        <h4>Основание компании</h4>
                        <p>Начало работы сервисного центра по ремонту офисной техники.</p>
                    </div>
                </div>

                <div class="timeline-row right">
                    <div class="timeline-card">
                        <span class="year">2002</span>
                        <h4>Открытие первоого офиса</h4>
                        <p>Відкриття офісу на Соборній площі,12</p>
                    </div>
                </div>

                <div class="timeline-row left">
                    <div class="timeline-card">
                        <span class="year">2005</span>
                        <h4>Открытие офиса на пос. Котовского</h4>
                        <p>відкриття офісу на Семена Палія, 94</p>
                    </div>
                </div>

                <div class="timeline-row right">
                    <div class="timeline-card">
                        <span class="year">207</span>
                        <h4>Открытие офиса на Черемушках</h4>
                        <p>відкриття офісу на Адміральському проспекті, 33 а</p>
                    </div>
                </div>

                <div class="timeline-row left">
                    <div class="timeline-card">
                        <span class="year">2009</span>
                        <h4>Открытие офиса на пос. таирово</h4>
                        <p>відкриття офісу на Королева, 33</p>
                    </div>
                </div>

                <div class="timeline-row right">
                    <div class="timeline-card">
                        <span class="year">2010</span>
                        <h4>Работа с корпоративными клиентами</h4>
                        <p>Более 50-ти корпоративних клієнтів по Україні</p>
                    </div>
                </div>

                <div class="timeline-row left">
                    <div class="timeline-card">
                        <span class="year">2015</span>
                        <h4>Развитие новых направлений</h4>
                        <p>Развитие новых направлений, ремонт ноутбуків та планшетів,  ремонт поліграфічного обладнання</p>
                    </div>
                </div>

                <div class="timeline-row right">
                    <div class="timeline-card">
                        <span class="year">2020</span>
                        <h4>Cервісний центр EPSON</h4>
                        <p>Стали официальным авторизований сервісним центром EPSON.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="section">
        <div class="container">

            <h2 class="text-center mb-5">Почему выбирают наш сервис</h2>
            <div class="section-divider"></div>

            <div class="row g-4 text-center">

                <div class="col-md-3">
                    <div class="adv-card">
                        <i class="fa-solid fa-user-tie"></i>
                        <h4>Опытные инженеры</h4>
                        <p>Специалисты с опытом более 20 лет</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <h4>Современное оборудование</h4>
                        <p>Используем профессиональные инструменты</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="adv-card">
                        <i class="fa-solid fa-truck"></i>
                        <h4>Быстрая доставка</h4>
                        <p>Заберем и вернем технику после ремонта</p>
                    </div>
                </div>

                <div class="col-md-3">
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
                    <h2>Нужен ремонт техники?</h2>
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