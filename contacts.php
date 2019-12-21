<?require_once($_SERVER['DOCUMENT_ROOT'] . '/server-scripts/contacts.php');?>

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/header.php');?>

<div class="row mt-3 mb-3">
    <div class="col">
        <div class="alert alert-primary" role="alert">
            <span class="d-block mb-1">Для того, чтобы заказать товар выберите одно из двух предложений:</span>
            <ul class="order-action-menu">
                <li>
                    <span class="d-inline-block mr-1">&#9743;</span>
                    <span>Позвонить по телефону</span>
                </li>
                <li>
                    <span class="d-inline-block mr-1">&#9758;</span>
                    <span>Приехать к нам в офис</span>
                </li>
            </ul>
            <p>
                После поступления денежных средств на наш счёт Вам сразу высылается договор, который нужно заполнить и приехать к нам для дальнейшей процедуры регистрации в нашей музыкальной школе. Сроки доставки договора на почту 2-5 дней. По всем юридическим вопросам  - звоните по нашим номерам.
            </p>
        </div>
    </div>
</div>

<div class="contacts-wrapper row mt-3 mb-3 ml-0 mr-0 pt-4 pr-4 pl-4">
    <div class="col" itemscope itemtype="https://schema.org/Organization">
        <div class="row">
            <div class="col card card-country bg-info p-0 mb-4">
                <div class="card-header card-header-ukraine text-white" itemprop="areaServed">Украина</div>
                <div class="card-body card-body-ukraine text-black">
                    <h5 class="card-title">Адрес</h5>
                    <p class="card-text" itemprop="address">Город Киев, ул. Большая Васильковская 56, кор. 7, офис &#8470; 20</p>
                    <h5 class="card-title">Телефоны:</h5>
                    <p class="card-text">
                        <ol>
                            <li itemprop="telephone">(044) 404-30-21</li>
                            <li itemprop="telephone">(044) 404-67-21</li>
                        </ol>
                    </p>
                    <h5 class="card-title">График работы:</h5>
                    <p class="card-text" itemprop="address">Пн-Пт 9:00-18:00</p>
                </div>
            </div>
            <div class="col card card-country bg-info p-0 mb-4">
                <div class="card-header card-header-russia text-black" itemprop="areaServed">Россия</div>
                <div class="card-body card-body-russia text-white">
                    <h5 class="card-title">Адрес</h5>
                    <p class="card-text" itemprop="address">Город Москва, ул. Красноармейская 65, кор. 14, офис &#8470; 2</p>
                    <h5 class="card-title">Телефоны:</h5>
                    <p class="card-text">
                        <ol>
                            <li itemprop="telephone">(495) 408-03-12</li>
                            <li itemprop="telephone">(495) 408-76-12</li>
                        </ol>
                    </p>
                    <h5 class="card-title">График работы:</h5>
                    <p class="card-text" itemprop="address">Пн-Пт 9:00-18:00</p>
                    <div class="russia-flag-1"></div>
                    <div class="russia-flag-2"></div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?include_once($_SERVER['DOCUMENT_ROOT'] . '/static-views/footer.php');?>