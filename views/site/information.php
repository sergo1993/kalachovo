<?php
$this->title = "Информация";
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
                                        href="<?= Yii::$app->urlManager->createUrl('site/information'); ?>">Информация</a>
                </li>

                <li class="nav-item last"><a class="second"
                                             href="<?= Yii::$app->urlManager->createUrl('site/raspolojenie'); ?>">Расположение</a>
                </li>
            </ul>
        </div>
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
    <article class="main-content one-column">
        <section class="text-info">
            <div style="width: 100%" class="description ">
                <h1 style="text-align: center">Важная информация для собственников.</h1>
                <div class="width-60-proc" style="width: 100%;">
                    <div style="width: 70%; display: inline-block;">
                        <div style="width: 100%; ">
                            <div
                                style="display: inline-block; width: 5%; color: #603813; font-size: 90px; vertical-align: top;">
                                1
                            </div>
                            <div style="width: 90%; display: inline-block; text-indent: 30px; font-size: 26px;">
                                Деревня Калачево находится в Ивановском районе и относится к Богданихскому сельскому поселению.
                                Администрация Богданихского сельского поселения находится по адресу: 153550, Ивановская область,
                                Ивановский район, д. Богданиха, д. 89. http://www.ivrayon.ru/mo/bogdanikhskoe/ . Сюда можно
                                обращаться за присвоением адресной части Вашему участку, в четверг неприемный день, перед
                                посещением лучше заранее созвониться с землеустроителем Татьяной Витальевной 55-24-36.
                            </div>
                        </div>
                        <div style="width: 100%; margin-top: 30px; ">
                            <div
                                style="display: inline-block; width: 5%; color: #603813; font-size: 90px; vertical-align: top;">
                                2
                            </div>
                            <div style="width: 90%; display: inline-block; text-indent: 30px; font-size: 26px;">
                                Публичная кадастровая карта онлайн http://pkk5.rosreestr.ru/. По этой ссылке Вы
                                всегда можете посмотреть примерное расположение Вашего участка по его кадастровому номеру.
                                Первая часть кадастрового номера одинаковая у всех участков - "37:05:030560:", последняя же
                                часть у каждого участка уникальная.
                            </div>
                        </div>
                        <div style="width: 100%; margin-top: 30px; ">
                            <div
                                style="display: inline-block; width: 5%; color: #603813; font-size: 90px; vertical-align: top;">
                                3
                            </div>
                            <div style="width: 90%; display: inline-block; text-indent: 30px; font-size: 26px;">
                                Для получения технических условий на подключение электричества нужно обращаться по адресу
                                г.Иваново, ул.Новая д.15, тел. 93-67-25.Приёмные дни ВТ и ЧТ, время работы с 8:00 до 17:00, обед
                                с 12:00 до 13:00.С собой нужно иметь ксерокопию свидетельства о праве собственности на участок,
                                ксерокопию паспорта и схему Вашего участка относительно соседних(её можно сделать принт-скрином
                                с публичной кадастровой карты).
                            </div>
                        </div>

                        <div style="width: 100%; margin-top: 30px; ">
                            <div
                                style="display: inline-block; width: 5%; color: #603813; font-size: 90px; vertical-align: top;">
                                4
                            </div>
                            <div style="width: 90%; display: inline-block; text-indent: 30px; font-size: 26px;">
                                Для разметки границ понадобятся услуги кадастрового специалиста, чтобы установить колышки в
                                крайних точках участка.На данный момент самая дешевая цена по городу 500р за точку, в сумму
                                выполненных работ входит и отчет. <br/><br/> ООО Изыскания, телефоны 48-59-81 / 54-57-54
                            </div>
                        </div>
                        <div style="width: 100%; margin-top: 30px; ">
                            <div
                                style="display: inline-block; width: 5%; color: #603813; font-size: 90px; vertical-align: top;">
                                5
                            </div>
                            <div style="width: 90%; display: inline-block; text-indent: 30px; font-size: 26px;">
                                Разрешение на строительство нужно получать в МФЦ находящемся в торговом центре Тополь на
                                четвертом этаже.Нужно взять талончик на приём в окно №32, приёмные дни вторник и пятница. При
                                себе нужно иметь ксерокопии паспорта и свидетельства о регистрации права на земельный участок.
                                Также подготовьте номер своего ИНН, т.к. будет нужен при заполнении заявления.
                            </div>
                        </div>
                        <div class="img_add" style="display: none; width: 25%">
                            <img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама">
                            <img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/banner2.jpg" alt="Реклама">
                        </div>
                    </div>
                    <div class="img_none" style="width: 19%; vertical-align: top; display: inline-block;">
                    <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама"></a>
                    <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/banner2.jpg" alt="Реклама"></a>
                    </div>
                </div>


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
