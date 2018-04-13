<?php
$this->title = "Расположение";


$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Расположение деревни Калачево на Яндекс картах, для удобства понимания географического расположения данного объекта'
]);

$this->registerMetaTag([
    'name' => 'Keywords',
    'content' => 'деревня калачево карта'
]);

?>
<div class="container">
    <header class="page-header"><a href="<?= Yii::$app->urlManager->createUrl('site/index'); ?>" class="logo"></a>
        <!--<a href="#" class="mobile-menu-switch"> </a>-->
        <div class="mobile-menu-switch"></div>
        <div class="phone">+7 (920) 673 80 01</div>
    </header>
    <nav>
        <div class="main-nav">
            <ul class="">
                <li class="nav-item first active"><a class="second"
                                                     href="<?= Yii::$app->urlManager->createUrl('site/index'); ?>">О
                        проекте</a></li>
                <li class="nav-item"><a class="second" href="<?= Yii::$app->urlManager->createUrl('site/kupit'); ?>">Участки
                        в продаже</a></li>
                <li class="nav-item last"><a class="second"
                                             href="<?= Yii::$app->urlManager->createUrl('site/aerial_photo'); ?>">Аэросъемка</a>
                </li>
                <li class="nav-item"><a class="second" href="<?= Yii::$app->urlManager->createUrl('site/photo'); ?>">Галерея</a>
                </li>
                <li class="nav-item"><a class="second"
                                        href="<?= Yii::$app->urlManager->createUrl('site/srochnyi_vykup'); ?>">Срочный
                        выкуп</a></li>
                <li class="nav-item"><a class="second"
                                        href="<?= Yii::$app->urlManager->createUrl('site/information'); ?>">Информация</a></li>

                <li class="nav-item last"><a class="second"
                                             href="<?= Yii::$app->urlManager->createUrl('site/raspolojenie'); ?>">Расположение</a>
                </li>

            </ul>
        </div>
    </nav>
    <nav class="additioanal-nav  none_400">
        <!-- <a href="strojka/proczess-strojki/" class="house"> <span class="ico house"></span> <h4 class="text">Процесс стройки</h4> </a>-->
        <a  class="house"> <span class="ico house"></span> <h4 class="text">2 км. от города
            </h4></a>
        <a  class="house"> <span class="ico genplan"></span> <h4
                class="text">Низкая стоимость</h4></a>
        <a  class="house"> <span
                class="ico film"></span> <h4 class="text">Коммуникации за счет государства</h4></a>
        <a >
            <span class="ico why"></span> <h4 class="text">2 городских автобуса</h4></a>
    </nav>
    <nav class="mobile-menu" media="only screen and (max-device-width: 768px)">
        <ul class="">
            <li class="nav-item first active"><a class="second"
                                                 href="<?= Yii::$app->urlManager->createUrl('site/index'); ?>">О
                    проекте</a></li>
            <li class="nav-item"><a class="second" href="<?= Yii::$app->urlManager->createUrl('site/kupit'); ?>">Участки
                    в продаже</a></li>
            <li class="nav-item last"><a class="second"
                                         href="<?= Yii::$app->urlManager->createUrl('site/aerial_photo'); ?>">Аэросъемка</a>
            </li>
            <li class="nav-item"><a class="second" href="<?= Yii::$app->urlManager->createUrl('site/photo'); ?>">Галерея</a>
            </li>
            <li class="nav-item"><a class="second"
                                    href="<?= Yii::$app->urlManager->createUrl('site/srochnyi_vykup'); ?>">Срочный
                    выкуп</a></li>
            <li class="nav-item"><a class="second"
                                    href="<?= Yii::$app->urlManager->createUrl('site/information'); ?>">Информация</a></li>

            <li class="nav-item last"><a class="second"
                                         href="<?= Yii::$app->urlManager->createUrl('site/raspolojenie'); ?>">Расположение</a>
            </li>
        </ul>
        <div class="close-nav-ico"></div>
    </nav>
    <article class="main-content one-column">
        <section class="text-info">
            <div style="width: 100%" class="description"><h1 style="text-align: center">Расположение д.Калачево на
                    карте.<br/>
                    Ивановская область,Ивановский район,деревня Калачево.<br/>
                    Алексей 8-920-673-8001 </h1>
            </div>
            <div style="width: 100%;">
                <div style="width: 70%; display: inline-block;">
                    <div style="display: block; border: 2px solid #a05d1f;">
                        <div id="map" style="width: 100%; height: 400px;"></div>
                    </div>
                </div>
                <div class="img_none" style="vertical-align: top; width: 19%; display: inline-block;">
                    <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама"></a>
                    <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/banner2.jpg" alt="Реклама"></a>
                </div>

            </div>
            <div class="img_add" style="display: none; width: 25%">
                    <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама"></a>
                    <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/banner2.jpg" alt="Реклама"></a>
            </div>

        </section>
    </article>


    <div style="position: relative;
z-index: -4;
left: -417px;
float: left;
margin-top: -361px;" class="footer-bg"></div>
</div>


<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>

<script type='text/javascript'>
    ymaps.ready(init);
    function init() {
        var geocoder = new ymaps.geocode(
            // Строка с адресом, который нужно геокодировать
            //'Абакан, ул.Некрасова, 23',
            'Ивановская область, деревня Калачево',
            // требуемое количество результатов
            {results: 1}
        );
        // После того, как поиск вернул результат, вызывается callback-функция
        geocoder.then(
            function (res) {
                // координаты объекта
                var coord = res.geoObjects.get(0).geometry.getCoordinates();
                var map = new ymaps.Map('map', {
                    // Центр карты - координаты первого элемента
                    center: coord,
                    // Коэффициент масштабирования
                    zoom: 14,
                    // включаем масштабирование карты колесом

                    controls: ['mapTools']
                });
                // Добавление метки на карту
                map.geoObjects.add(res.geoObjects.get(0));
                // устанавливаем максимально возможный коэффициент масштабирования - 1

                // Добавление стандартного набора кнопок
                map.controls.add('mapTools')
                    // Добавление кнопки изменения масштаба
                    .add('zoomControl')
                    // Добавление списка типов карты
                    .add('typeSelector');
            }
        );
    }
</script>
