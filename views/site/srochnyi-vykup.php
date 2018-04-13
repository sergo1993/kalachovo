<?php
$this->title = "Срочный выкуп";

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Срочный выкуп земельных участков в деревне Калачево'
]);

$this->registerMetaTag([
    'name' => 'Keywords',
    'content' => 'Срочный выкуп земельных участков в деревне Калачево'
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
            <li class="nav-item"><a class="second"
                                    href="<?= Yii::$app->urlManager->createUrl('site/photo'); ?>">Галерея</a>
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
        <div class="close-nav-ico"></div>
    </nav>

    <nav class="additioanal-nav  none_400">
        <!-- <a href="strojka/proczess-strojki/" class="house"> <span class="ico house"></span> <h4 class="text">Процесс стройки</h4> </a>-->
        <a class="house"> <span class="ico house"></span> <h4 class="text">2 км. от города
            </h4></a>
        <a class="house"> <span class="ico genplan"></span> <h4
                class="text">Низкая стоимость</h4></a>
        <a class="house"> <span
                class="ico film"></span> <h4 class="text">Коммуникации за счет государства</h4></a>
        <a>
            <span class="ico why"></span> <h4 class="text">2 городских автобуса</h4></a>
    </nav>
    <article class="main-content one-column">
        <section class="text-info">
            <div class="description"><h1 style="text-align: center">Срочный выкуп участков в Калачево</h1>
                <p style="text-align: justify; text-indent: 30px;">Все мы в жизни сталкиваемся с разными ситуациями и
                    бывают такие когда нам очень срочно нужны деньги. Если Вы владелец участка в деревне Калачево и
                    хотите его срочно продать, а ожидать своего потенциального покупателя в течении полугода у Вас
                    времени нет , тогда Вы попали по адресу, звоните по телефону 8-920-673-8001 и мы рассмотрим Ваше
                    предложение. Срочный выкуп подразумевает выкуп участка по цене ниже среднерыночной примерно на
                    15-20%. </p>
            </div>

            <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img
                    style="margin-left: 65px; width: 230px; margin-top: 35px;"
                    src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама"></a>
            <a class="block_img" href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px;
width: 230px;
margin-top: 35px;
margin-right: 70px;" src="/web/images/banner2.jpg" alt="Реклама"></a>

            <div class="img_add" style="display: none; width: 25%">
 
            </div>
        </section>
    </article>
    <div style="position: relative;
z-index: -4;
left: -417px;
float: left;
margin-top:-495px;" class="footer-bg"></div>
</div>

