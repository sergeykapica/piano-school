<?require_once($_SERVER['DOCUMENT_ROOT'] . '/server-scripts/services.php');?>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/header.php');?>

<div class="row mt-3 mb-3">
    <div class="col">
        <div class="alert alert-info" role="alert">
            Предлагаем Вашему вниманию различные услуги
        </div>
    </div>
</div>
<div class="row mt-3 mb-3" itemscope itemtype="http://schema.org/Product">
    <div class="col-12 mb-3 pt-3 pb-3 add-shadow">
        <div class="row">
            <div class="col-md-4">
                <img itemscope="logo" src="/images/services/service-1.jpg" class="card-img" alt="Картинка не найдена">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-left-side float-left">
                        <h5 class="card-title" itemprop="name">Групповые занятия</h5>
                        <p class="card-text" itemprop="description">Занятия в группе людей с одним преподавателем. Является прекрасным источником обмена опытом друг друга.</p>
                        <div class="price-wrapper">
                            <h5 class="mb-3">Абонемент</h5>
                            <div class="price-data mb-3" itemprop="offer" itemscope itemtype="http://schema.org/Offer">
                                <span>Цена: </span>
                                <span class="price" itemprop="price">1000</span>
                                <div class="dropdown price-menu ml-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" itemprop="priceCurrency">
                                        Гривны
                                    </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" data-currency-value="1000">Гривны</button>
                                        <button class="dropdown-item" type="button" data-currency-value="2661,48">Рубли</button>
                                  </div>
                                </div>
                            </div>
                            <p class="text-info">4 занятия</p>
                            <p class="text-secondary">Длительность урока: 50 минут</p>
                        </div>
                    </div>
                    <div class="card-right-side float-left">
                        <a href="/contacts" class="btn btn-success float-right">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-3 pt-3 pb-3 add-shadow">
        <div class="row">
            <div class="col-md-4">
                <img itemscope="logo" src="/images/services/service-1.jpg" class="card-img" alt="Картинка не найдена">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-left-side float-left">
                        <h5 class="card-title">Групповые занятия</h5>
                        <p class="card-text">Занятия в группе людей с одним преподавателем. Является прекрасным источником обмена опытом друг друга.</p>
                        <div class="price-wrapper">
                            <h5 class="mb-3">Абонемент</h5>
                            <div class="price-data mb-3">
                                <span>Цена: </span>
                                <span class="price">2000</span>
                                <div class="dropdown price-menu ml-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Гривны
                                    </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" data-currency-value="2000">Гривны</button>
                                        <button class="dropdown-item" type="button" data-currency-value="5322,97">Рубли</button>
                                  </div>
                                </div>
                            </div>
                            <p class="text-info">8 занятий</p>
                            <p class="text-secondary">Длительность урока: 50 минут</p>
                        </div>
                    </div>
                    <div class="card-right-side float-left">
                        <a href="/contacts" class="btn btn-success float-right">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-3 pt-3 pb-3 add-shadow">
        <div class="row">
            <div class="col-md-4">
                <img itemscope="logo" src="/images/services/service-1.jpg" class="card-img" alt="Картинка не найдена">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-left-side float-left">
                        <h5 class="card-title">Индивидуальные занятия</h5>
                        <p class="card-text">Занятия с преподавателем наедине. Отличная подготовка имеющая большую эффективность в разы.</p>
                        <div class="price-wrapper">
                            <h5 class="mb-3">Абонемент</h5>
                            <div class="price-data mb-3">
                                <span>Цена: </span>
                                <span class="price">1600</span>
                                <div class="dropdown price-menu ml-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Гривны
                                    </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" data-currency-value="1600">Гривны</button>
                                        <button class="dropdown-item" type="button" data-currency-value="4271,46">Рубли</button>
                                  </div>
                                </div>
                            </div>
                            <p class="text-info">4 занятия</p>
                            <p class="text-secondary">Длительность урока: 50 минут</p>
                        </div>
                    </div>
                    <div class="card-right-side float-left">
                        <a href="/contacts" class="btn btn-success float-right">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-3 pt-3 pb-3 add-shadow">
        <div class="row">
            <div class="col-md-4">
                <img itemscope="logo" src="/images/services/service-1.jpg" class="card-img" alt="Картинка не найдена">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-left-side float-left">
                        <h5 class="card-title">Индивидуальные занятия</h5>
                        <p class="card-text">Занятия с преподавателем наедине. Отличная подготовка имеющая большую эффективность в разы.</p>
                        <div class="price-wrapper">
                            <h5 class="mb-3">Абонемент</h5>
                            <div class="price-data mb-3">
                                <span>Цена: </span>
                                <span class="price">3200</span>
                                <div class="dropdown price-menu ml-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Гривны
                                    </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" data-currency-value="3200">Гривны</button>
                                        <button class="dropdown-item" type="button" data-currency-value="8517,27">Рубли</button>
                                  </div>
                                </div>
                            </div>
                            <p class="text-info">8 занятий</p>
                            <p class="text-secondary">Длительность урока: 50 минут</p>
                        </div>
                    </div>
                    <div class="card-right-side float-left">
                        <a href="/contacts" class="btn btn-success float-right">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(window).ready(function(){$(".price-menu").on("click",function(t){t=t||window.event,(t=$(t.target)).hasClass("dropdown-item")&&($(this).find(".dropdown-toggle").text(t.text()),$(this).parent().find(".price").text(t.attr("data-currency-value")))})});
</script>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/footer.php');?>