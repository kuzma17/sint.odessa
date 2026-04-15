<section class="cta-section">
    <div class="container">
        <div class="cta-card">
            <div class="cta-text">
                <h2>Нужен ремонт вашего устройства?</h2>
                <p>
                    Залиште заявку і наш менеджер зв'яжеться з вами
                    протягом декількох хвилин
                </p>
            </div>
            <div class="cta-action">
{{--                <a href="/contacts" class="btn btn-blue">--}}
{{--                    Залишити заявку--}}
{{--                </a>--}}
                <button class="btn btn-blue"
                        data-bs-toggle="modal"
                        data-bs-target="#orderModal">
                    Оставить заявку
                </button>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="orderModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Оставить заявку</h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text"
                                   class="form-control"
                                   placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6">
                            <input type="tel"
                                   class="form-control"
                                   placeholder="Телефон"
                                   required>
                        </div>
                        <div class="col-12">
                            <select class="form-select">
                                <option>Выберите услугу</option>
                                <option>Заправка картриджа</option>
                                <option>Ремонт принтера</option>
                                <option>Ремонт компьютера</option>
                                <option>Диагностика</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control"
                                      rows="3"
                                      placeholder="Опишите проблему"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-blue btn-lg">
                                Отправить заявку
                            </button>
                            <p class="small mt-2 text-muted">
                                Мы перезвоним в течение 5–10 минут
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>