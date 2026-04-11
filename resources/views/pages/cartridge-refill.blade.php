@extends('layouts.appSite')

@section('content')

<section class="page-hero">
    <div class="container">
        <h1>Заправка картриджей в Одессе</h1>
        <p>
            Профессиональная заправка лазерных и струйных картриджей
            для принтеров, МФУ и плоттеров.
        </p>
    </div>
</section>


<section class="service-text">
    <div class="container">
        <div class="row align-items-center g-5" >
            <div class="col-lg-6">
                <h2>Профессиональная заправка картриджей</h2>
                <p>
                    Заправка картриджей — это экономичный способ восстановить
                    работоспособность принтера без необходимости покупки нового
                    расходного материала. В сервисном центре «СИНТ-Мастер»
                    выполняется заправка картриджей для лазерных и струйных
                    принтеров популярных брендов: HP, Canon, Brother,
                    Samsung, Epson, Xerox и других.
                </p>
                <p>
                    Мы выполняем заправку картриджей для различной техники:
                    принтеров, МФУ и плоттеров. Используются качественные
                    тонеры и чернила, что позволяет сохранить стабильное
                    качество печати и продлить срок службы картриджа.
                </p>
                <p>
                    Процедура обслуживания включает диагностику картриджа,
                    разборку и очистку от остатков старого тонера или чернил,
                    заправку новым расходным материалом и проверку печати.
                    При необходимости выполняется замена изношенных деталей:
                    фотобарабана, чипа или других элементов.
                </p>

            </div>

            <div class="col-lg-6">
                <img src="/images/pages/cartridge_regenerate2.webp"
                        class="img-fluid service-image"
                        alt="Заправка картриджа">
            </div>

        </div>

    </div>
</section>


<section class="section">
    <div class="container">

        <h2 class="text-center mb-5">Когда требуется заправка картриджа</h2>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="problem-card">
                    <p>Принтер печатает бледно</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="problem-card">
                    <p>Появляются полосы на листе</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="problem-card">
                    <p>Сообщение о низком уровне тонера</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="problem-card">
                    <p>Печать стала неравномерной</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="workflow fade-in">
    <div class="container">
        <h2 class="text-center mb-5">Как выполняется заправка</h2>
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
                    <h4>Чистка</h4>
                    <p>Очистка от старого тонера.</p>
                </div>
            </div>

            <div class="workflow-step">
                <div class="step-number">3</div>
                <div class="step-card">
                    <h4>Заправка</h4>
                    <p>Заправка новым тонером или чернилами.</p>
                </div>
            </div>

            <div class="workflow-step">
                <div class="step-number">4</div>
                <div class="step-card">
                    <h4>Тестирование и выдача</h4>
                    <p>Тестовая печать и возвращаем картридж с гарантией.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="service-benefits">
    <div class="container">

        <h2 class="text-center mb-5">Преимущества заправки картриджей</h2>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="benefit-box">
                    <h3>Экономия</h3>
                    <p>Заправка значительно дешевле покупки нового картриджа.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="benefit-box">
                    <h3>Быстро</h3>
                    <p>Большинство картриджей заправляется в течение 15–30 минут.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="benefit-box">
                    <h3>Качественно</h3>
                    <p>Используем проверенные тонеры и чернила.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="benefit-box">
                    <h3>Экологично</h3>
                    <p>Повторное использование картриджей снижает количество отходов.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="section">
    <div class="container">

        <h2 class="text-center mb-5">Стоимость ремонта</h2>
        <div class="section-divider"></div>

        <div class="price-list">

            <div class="price-item">
                <span class="service">Картридж струйный</span>
                <span class="dots"></span>
                <span class="price">от 200 грн</span>
            </div>

            <div class="price-item">
                <span class="service">Картридж струйный цветной</span>
                <span class="dots"></span>
                <span class="price">от 200 грн</span>
            </div>

            <div class="price-item">
                <span class="service">Картридж лазерный</span>
                <span class="dots"></span>
                <span class="price">от 250 грн</span>
            </div>

            <div class="price-item">
                <span class="service">Картридж лазерный цветной</span>
                <span class="dots"></span>
                <span class="price">от 300 грн</span>
            </div>

            <div class="price-item">
                <span class="service">Картридж плотера</span>
                <span class="dots"></span>
                <span class="price">от 1000 грн</span>
            </div>

        </div>

        <p class="text-center mt-4">
            * Точная стоимость заправки определяется после диагностики картриджа
        </p>

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