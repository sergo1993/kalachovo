<?php
$this->title = "Аэросъемка";
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
            <div style="width: 100%" class="description"><h1 style="text-align: center">Аэросъемка Калачево</h1>
            </div>

            <div style="width: 100%;">
                <div class="width-768" style="width: 70%; display: inline-block; vertical-align: top;">
                    <iframe style="margin: 0 auto; display: block;" width="653" height="370"
                            src="https://www.youtube.com/embed/TGlfB1SUBT4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="width-1024" style="width: 70%; display: none; vertical-align: top;">
                    <iframe style="margin: 0 auto; display: block;" width="400" height="270"
                            src="https://www.youtube.com/embed/TGlfB1SUBT4" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="img_none" style="width: 19%; display: inline-block; vertical-align: top;">
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
margin-top: -455px;" class="footer-bg"></div>
</div>


