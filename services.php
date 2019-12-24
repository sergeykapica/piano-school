<?require_once($_SERVER['DOCUMENT_ROOT'] . '/server-scripts/services.php');?>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/header.php');?>

<?if($serviceList !== false):?>
    
    <?if(!empty($serviceList)):?>

        <div class="row mt-3 mb-3">
            <div class="col">
                <div class="alert alert-info" role="alert">
                    Предлагаем Вашему вниманию различные услуги
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3" id="services-list-wrapper" itemscope itemtype="http://schema.org/Product">
            
            <?$cElements = count($serviceList) - 1;?>
            
            <?foreach($serviceList as $si => $service):?>
            
                <div class="col-12 mb-3 pt-3 pb-3 add-shadow" <?=( $si == $cElements ? 'data-items-offset=' . count($serviceList) : '' );?>>
                    <div class="row">
                        <div class="col-md-4">
                            <img itemscope="logo" src="<?=$service['IMAGE_URL'];?>" class="card-img" alt="Картинка не найдена">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-left-side float-left">
                                    <h5 class="card-title" itemprop="name"><?=$service['TITLE'];?></h5>
                                    <p class="card-text" itemprop="description"><?=$service['DESCRIPTION'];?></p>
                                    <div class="price-wrapper">
                                        <h5 class="mb-3"><?=$service['SERVICE_TYPE_TITLE'];?></h5>
                                        <div class="price-data mb-3" itemprop="offer" itemscope itemtype="http://schema.org/Offer">
                                            <span>Цена: </span>
                                            <span class="price" itemprop="price"><?=$service['PRICE'];?></span>
                                            <div class="dropdown price-menu ml-2">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" itemprop="priceCurrency">
                                                    Гривны
                                                </button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <button class="dropdown-item" type="button" data-currency-value="<?=$service['PRICE'];?>">Гривны</button>
                                                    <button class="dropdown-item" type="button" data-currency-value="<?=$service['PRICE_RUR'];?>">Рубли</button>
                                              </div>
                                            </div>
                                        </div>
                                        <p class="text-info"><?=$service['LESSONS_COUNT'] . ' ' . $service['LESSONS_COUNT_TITLE'];?></p>
                                        <p class="text-secondary">Длительность урока: <?=$service['LESSON_DURATION'];?> минут</p>
                                    </div>
                                </div>
                                <div class="card-right-side float-left">
                                    <a href="/contacts" class="btn btn-success float-right">Заказать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?endforeach;?>
            
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-12 text-center text-primary">
                <div class="loader rotate-360 loader-hide" id="services-loader">&#9991;</div>
            </div>
        </div>

        <script type="text/javascript">
            $(window).ready(function(){$(document).on("click",function(t){if(t=t||window.event,(t=$(t.target)).hasClass("dropdown-item")){for(var e=t;!e.hasClass("price-data");)e=e.parent();e.find(".dropdown-toggle").text(t.text()),e.parent().find(".price").text(t.attr("data-currency-value"))}})});
        </script>

        <script type="text/javascript" src="/files/js/template-compilator.js"></script>

        <script type="text/template" id="service-item-template">

            <div class="col-12 mb-3 pt-3 pb-3 add-shadow" {{DATA_ITEMS_OFFSET}}>
                <div class="row">
                    <div class="col-md-4">
                        <img itemscope="logo" src="{{IMAGE_URL}}" class="card-img" alt="Картинка не найдена">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="card-left-side float-left">
                                <h5 class="card-title" itemprop="name">{{TITLE}}</h5>
                                <p class="card-text" itemprop="description">{{DESCRIPTION}}</p>
                                <div class="price-wrapper">
                                    <h5 class="mb-3">{{SERVICE_TYPE_TITLE}}</h5>
                                    <div class="price-data mb-3" itemprop="offer" itemscope itemtype="http://schema.org/Offer">
                                        <span>Цена: </span>
                                        <span class="price" itemprop="price">{{PRICE}}</span>
                                        <div class="dropdown price-menu ml-2">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" itemprop="priceCurrency">
                                                Гривны
                                            </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item" type="button" data-currency-value="{{PRICE}}">Гривны</button>
                                                <button class="dropdown-item" type="button" data-currency-value="{{PRICE_RUR}}">Рубли</button>
                                          </div>
                                        </div>
                                    </div>
                                    <p class="text-info">{{LESSONS_COUNT}} {{LESSONS_COUNT_TITLE}}</p>
                                    <p class="text-secondary">Длительность урока: {{LESSON_DURATION}} минут</p>
                                </div>
                            </div>
                            <div class="card-right-side float-left">
                                <a href="/contacts" class="btn btn-success float-right">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </script>

        <script type="text/javascript">
            $(window).ready(function(){$(window).on("scroll",function(){let e=window.pageYOffset||document.documentElement.scrollTop,t=document.body.scrollHeight||document.documentElement.scrollHeight;var E=$("#services-list-wrapper"),s=$("#service-item-template"),a=$("#services-loader");if(e+$(window).height()>=t){var o=E.children().eq(E.children().length-1);a.addClass("loader-show"),$.ajax({url:"/server-scripts/ajax/services-list.php?OFFSET="+o.attr("data-items-offset")+"&LIMIT=2",method:"GET",dataType:"json",success:function(e){if(e.SERVICES_LIST.length>0){var t="";for(let E in e.SERVICES_LIST)if(!isNaN(parseInt(E))){let a=e.SERVICES_LIST[E],S={IMAGE_URL:a.IMAGE_URL,TITLE:a.TITLE,DESCRIPTION:a.DESCRIPTION,SERVICE_TYPE_TITLE:a.SERVICE_TYPE_TITLE,PRICE:a.PRICE,PRICE_RUR:a.PRICE_RUR,LESSONS_COUNT:a.LESSONS_COUNT,LESSONS_COUNT_TITLE:a.LESSONS_COUNT_TITLE,LESSON_DURATION:a.LESSON_DURATION,DATA_ITEMS_OFFSET:E==e.SERVICES_LIST.length-1?"data-items-offset="+(parseInt(o.attr("data-items-offset"))+2):""};t+=templateCompilator.compile(s.html(),S)}E.append(t)}a.removeClass("loader-show"),a.addClass("loader-hide")}})}})});
        </script>
    
    <?else:?>

        <div class="row mt-3 mb-3">
            <div class="col">
                <div class="alert alert-dark" role="alert">
                    Услуги отсутствуют
                </div>
            </div>
        </div>

    <?endif;?>

<?else:?>
    
    <div class="row mt-3 mb-3">
        <div class="col">
            <div class="alert alert-danger" role="alert">
                При выводе списка услуг возникла ошибка
            </div>
        </div>
    </div>

<?endif;?>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/footer.php');?>