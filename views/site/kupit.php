<?php
$this->title = "В калачево участок купить.";

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Список объявлений для тех кто хочет в Калачево участок купить.Свежая актуальная информация от продавцов'
]);

$this->registerMetaTag([
    'name' => 'Keywords',
    'content' => 'калачево участок купить'
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
            <div style="width: 100%" class="description"><h1 style="text-align: center">Хотите в Калачево купить участок
                    или чтобы Ваше
                    объявление о продаже появилось на этой странице, звоните - 8-920-673-8001</h1>

                <p style="margin-top: 25px;">На сайте публичной кадастровой карты <a
                        href="http://maps.rosreestr.ru/PortalOnline/">
                        http://pkk5.rosreestr.ru/</a> Вы можете посмотреть расположение заинтересовавшего
                    Вас участка.Скопировав полностью его кадастровый номер и вставив в строку поиска. </p>
                <div style="width: 100%; margin-top: 20px;">
                    <div class="vertical" style="display: inline-block; width: 29%">
                        <img class="modal_1" style="width: 100%; height: 180px;" src="/images/index/kalachevo-1.png" />
                    </div>
                    <div class="vertical" style="display: inline-block; width: 29%; margin-left:  20px">
                        <img class="modal_1" style="width: 100%; height: 180px; " src="/images/index/kalachevo-2.png" />
                    </div>
                    <div class="vertical" style="display: inline-block; width: 29%; margin-left:  20px;">
                        <img class="modal_1" style="width: 100%; height: 180px; " src="/images/index/kalachevo-3.png" />
                    </div>
                </div>
                <div class="img_add" style="display: none; width: 25%">
                    <img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама">
                </div>
            </div>
            <div class="all-house-projects projects-container">
                <div>
                    <div style="vertical-align: top; display: inline-block; width: 70%">
                        <h2 style="    font-size: 33px;    font-weight: bold;    color: #ff002f;    text-align: center;    margin: 20px 0;">
                            Срочная продажа
                        </h2>
                        <div class="main_line_table_srochn">
                            <div class="main_line_table_cadastr_srochn">
                                Кадастровый номер
                            </div>
                            <div class="main_line_table_sotki_srochn">
                                Количество соток
                            </div>
                            <div class="main_line_table_price_srochn">
                                Цена
                            </div>
                            <div class="main_line_table_price_one_srochn">
                                Цена за сотку
                            </div>
                        </div>
						<a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_175')?>">
							<div  class="primari_line_table_srochn">
                                <div class="primari_line_table_cadastr_srochn">
                                    ФОТО 37:05:030560:175
                                </div>
                                <div class="primari_table_sotki_srochn">
                                    8,86
                                </div>
                                <div class="primari_table_price_srochn">
                                    260 000 р
                                </div>
                                <div class="primari_table_price_one_srochn">
                                    29 345р
                                </div>
                            </div>
						</a>
						
						<a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_217')?>">
                        <div  class="primari_line_table_srochn">
                                <div class="primari_line_table_cadastr_srochn">
                                   ФОТО 37:05:030560:217
                                </div>
                                <div class="primari_table_sotki_srochn">
                                    8
                                </div>
                                <div class="primari_table_price_srochn">
                                    310 000 р
                                </div>
                                <div class="primari_table_price_one_srochn">
                                    38 750 р
                                </div>
						</div>
						</a>
						
						
						
						<a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_481')?>">
                        <div  class="primari_line_table_srochn">
                                <div class="primari_line_table_cadastr_srochn">
                                   ФОТО 37:05:030560:481
                                </div>
                                <div class="primari_table_sotki_srochn">
                                    8
                                </div>
                                <div class="primari_table_price_srochn">
                                    420 000 р
                                </div>
                                <div class="primari_table_price_one_srochn">
                                    52 500 р
                                </div>
						</div>
						</a>
						
						<a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_618')?>">
                        <div  class="primari_line_table_srochn">
                                <div class="primari_line_table_cadastr_srochn">
                                   ФОТО 37:05:030560:618
                                </div>
                                <div class="primari_table_sotki_srochn">
                                    8,08
                                </div>
                                <div class="primari_table_price_srochn">
                                    430 000 р
                                </div>
                                <div class="primari_table_price_one_srochn">
                                    53 217 р
                                </div>
						</div>
						</a>
						
						
						
                        <a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_482')?>">
                            <div style="margin-bottom: 30px;" class="primari_line_table_srochn link">
                                <div class="primari_line_table_cadastr_srochn">
                                    ФОТО 37:05:030560:482
                                </div>
                                <div class="primari_table_sotki_srochn">
                                    11,06
                                </div>
                                <div class="primari_table_price_srochn">
                                    500 000 р
                                </div>
                                <div class="primari_table_price_one_srochn">
                                    45 207 р
                                </div>
                            </div>
                        </a>


                        <h2 style="    font-size: 33px;    font-weight: bold;    color: #603813;    text-align: center;    margin: 20px 0;">
                            Участки III очереди(всех ближе к дороге Харинка-Кохма)
                        </h2>
                        <div class="main_line_table">
                            <div class="main_line_table_cadastr">
                                Кадастровый номер
                            </div>
                            <div class="main_line_table_sotki">
                                Количество соток
                            </div>
                            <div class="main_line_table_price">
                                Цена
                            </div>
                            <div class="main_line_table_price_one">
                                Цена за сотку
                            </div>
                        </div>

                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:640
                            </div>
                            <div class="primari_table_sotki">
                                9,09
                            </div>
                            <div class="primari_table_price">
                                360 000 р
                            </div>
                            <div class="primari_table_price_one">
                                49 757р
                            </div>
                        </div>
                        
						
						
                        
                        <a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_481')?>">
                            <div class="primari_line_table link">
                                <div class="primari_line_table_cadastr">
                                    ФОТО 37:05:030560:481
                                </div>
                                <div class="primari_table_sotki">
                                    8
                                </div>
                                <div class="primari_table_price">
                                    420 000 р
                                </div>
                                <div class="primari_table_price_one">
                                    52 500 р
                                </div>
                            </div>
                        </a>
						
						<a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_618')?>">
						<div class="primari_line_table link">
                            <div class="primari_line_table_cadastr">
                               ФОТО 37:05:030560:618
                            </div>
                            <div class="primari_table_sotki">
                                8,08
                            </div>
                            <div class="primari_table_price">
                                430 000 р
                            </div>
                            <div class="primari_table_price_one">
                                53 217 р
                            </div>
                        </div>
						</a>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:622
                            </div>
                            <div class="primari_table_sotki">
                                8,24
                            </div>
                            <div class="primari_table_price">
                                440 000 р
                            </div>
                            <div class="primari_table_price_one">
                                53 398 р
                            </div>
                        </div>
						
						
						 
						
						
						 <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:556
                            </div>
                            <div class="primari_table_sotki">
                                8,78
                            </div>
                            <div class="primari_table_price">
                                450 000 р
                            </div>
                            <div class="primari_table_price_one">
                                51 252 р
                            </div>
                        </div>
						
						
						 <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:634
                            </div>
                            <div class="primari_table_sotki">
                                8,24
                            </div>
                            <div class="primari_table_price">
                                460 000 р
                            </div>
                            <div class="primari_table_price_one">
                                55 825 р
                            </div>
                        </div>
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:579
                            </div>
                            <div class="primari_table_sotki">
                                9,27
                            </div>
                            <div class="primari_table_price">
                                480 000 р
                            </div>
                            <div class="primari_table_price_one">
                                51 779 р
                            </div>
                        </div>
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:643
                            </div>
                            <div class="primari_table_sotki">
                                8,46
                            </div>
                            <div class="primari_table_price">
                                480 000 р
                            </div>
                            <div class="primari_table_price_one">
                                56 737 р
                            </div>
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:628
                            </div>
                            <div class="primari_table_sotki">
                                8,09
                            </div>
                            <div class="primari_table_price">
                                480 000 р
                            </div>
                            <div class="primari_table_price_one">
                                59 332 р
                            </div>
                        </div>
                        
                       
                        <a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_482')?>">
                            <div class="primari_line_table link">
                                <div class="primari_line_table_cadastr">
                                    ФОТО 37:05:030560:482
                                </div>
                                <div class="primari_table_sotki">
                                    11,06
                                </div>
                                <div class="primari_table_price">
                                    500 000 р
                                </div>
                                <div class="primari_table_price_one">
                                    45 207 р
                                </div>
                            </div>
                        </a>
                        
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:477
                            </div>
                            <div class="primari_table_sotki">
                                8,08
                            </div>
                            <div class="primari_table_price">
                                510 000 р
                            </div>
                            <div class="primari_table_price_one">
                                63 118 р
                            </div>
                        </div>
                      
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:534
                            </div>
                            <div class="primari_table_sotki">
                                10,87
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                48 758 р
                            </div>
                        </div>
                        
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:545
                            </div>
                            <div class="primari_table_sotki">
                                8,95
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                59 217 р
                            </div>
                        </div>
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:546
                            </div>
                            <div class="primari_table_sotki">
                                8,79
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                60 295 р
                            </div>
                        </div>
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:548
                            </div>
                            <div class="primari_table_sotki">
                                8,77
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                60 433 р
                            </div>
                        </div>
						
						 <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:635
                            </div>
                            <div class="primari_table_sotki">
                                8,07
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                65 675 р
                            </div>
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:480
                            </div>
                            <div class="primari_table_sotki">
                                8,07
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                65 675 р
                            </div>
                        </div>
                        
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:604
                            </div>
                            <div class="primari_table_sotki">
                                8,48
                            </div>
                            <div class="primari_table_price">
                                550 000 р
                            </div>
                            <div class="primari_table_price_one">
                                64 858 р
                            </div>
                        </div>
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:562
                            </div>
                            <div class="primari_table_sotki">
                                8,42
                            </div>
                            <div class="primari_table_price">
                                580 000 р
                            </div>
                            <div class="primari_table_price_one">
                                68 883 р
                            </div>
                        </div>
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:652
                            </div>
                            <div class="primari_table_sotki">
                                8,68
                            </div>
                            <div class="primari_table_price">
                                580 000 р
                            </div>
                            <div class="primari_table_price_one">
                                66 820 р
                            </div>
                        </div>
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:614
                            </div>
                            <div class="primari_table_sotki">
                                11,4
                            </div>
                            <div class="primari_table_price">
                                610 000 р
                            </div>
                            <div class="primari_table_price_one">
                                53 508 р
                            </div>
                        </div>
                       
                       
                        



                        <h2 style="    font-size: 33px;    font-weight: bold;    color: #603813;    text-align: center;    margin: 20px 0;">
                            Участки II очереди
                        </h2>
                        <div class="main_line_table">
                            <div class="main_line_table_cadastr">
                                Кадастровый номер
                            </div>
                            <div class="main_line_table_sotki">
                                Количество соток
                            </div>
                            <div class="main_line_table_price">
                                Цена
                            </div>
                            <div class="main_line_table_price_one">
                                Цена за сотку
                            </div>
                        </div>
						
						
						
						
                        
                        
						 <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:336
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                330 000 р
                            </div>
                            <div class="primari_table_price_one">
                                41 250 р
                            </div>
                        </div>
                       
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:418
                            </div>
                            <div class="primari_table_sotki">
                                8,28
                            </div>
                            <div class="primari_table_price">
                                380 000 р
                            </div>
                            <div class="primari_table_price_one">
                                45 893 р
                            </div>
                        </div>
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:400
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                380 000 р
                            </div>
                            <div class="primari_table_price_one">
                                47 500 р
                            </div>                     
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:313
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                380 000 р
                            </div>
                            <div class="primari_table_price_one">
                                47 500 р
                            </div>
                        </div>
                       
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:435
                            </div>
                            <div class="primari_table_sotki">
                                9,56
                            </div>
                            <div class="primari_table_price">
                                400 000 р
                            </div>
                            <div class="primari_table_price_one">
                                41 841 р
                            </div>
                        </div>
						
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:287
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                410 000 р
                            </div>
                            <div class="primari_table_price_one">
                                51 250 р
                            </div>
                        </div>
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:414
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                410 000 р
                            </div>
							 <div class="primari_table_price_one">
                                51 250 р
                            </div>
						 </div>	
							
							
						
						
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:450
                            </div>
                            <div class="primari_table_sotki">
                                7,2
                            </div>
                            <div class="primari_table_price">
                                410 000 р
                            </div>
                            <div class="primari_table_price_one">
                                56 914р
                            </div>
                        </div>
                       
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:394
                            </div>
                            <div class="primari_table_sotki">
                                8,1
                            </div>
                            <div class="primari_table_price">
                                430 000 р
                            </div>
                            <div class="primari_table_price_one">
                                53 086р
                            </div>
                        </div>
                        
                        
						
						
                        
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:384
                            </div>
                            <div class="primari_table_sotki">
                                9,75
                            </div>
                            <div class="primari_table_price">
                                450 000 р
                            </div>
                            <div class="primari_table_price_one">
                                46 153 р
                            </div>
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:349
                            </div>
                            <div class="primari_table_sotki">
                                8,01
                            </div>
                            <div class="primari_table_price">
                                450 000 р
                            </div>
                            <div class="primari_table_price_one">
                                56 179 р
                            </div>
                        </div>
						
                        
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:377
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                460 000 р
                            </div>
                            <div class="primari_table_price_one">
                                57 500 р
                            </div>
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:385 
                            </div>
                            <div class="primari_table_sotki">
                                9,8
                            </div>
                            <div class="primari_table_price">
                                480 000 р
                            </div>
                            <div class="primari_table_price_one">
                                48 979 р
                            </div>
                        </div>
						
						
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:306
                            </div>
                            <div class="primari_table_sotki">
                                 8
                            </div>
                            <div class="primari_table_price">
                                480 000 р
                            </div>
                            <div class="primari_table_price_one">
                                60 000 р
                            </div>
                        </div>
                        
						
						<div class="primari_line_table">
						
                           <div class="primari_line_table_cadastr">
                                37:05:030560:338
                            </div>
							
                            <div class="primari_table_sotki">
                                8
                            </div>
							
                            <div class="primari_table_price">
                                510 000 р
                            </div>
							
                            <div class="primari_table_price_one">
                                63 750 р
                            </div>
							
                        </div>
                     
                       
                         
						
						
						
						


                        <h2 style="    font-size: 33px;    font-weight: bold;    color: #603813;    text-align: center;    margin: 20px 0;">
                            Участки I очереди (всех ближе к деревням Боевик и Тарбаево)
                        </h2>
                        <div class="main_line_table">
                            <div class="main_line_table_cadastr">
                                Кадастровый номер
                            </div>
                            <div class="main_line_table_sotki">
                                Количество соток
                            </div>
                            <div class="main_line_table_price">
                                Цена
                            </div>
                            <div class="main_line_table_price_one">
                                Цена за сотку
                            </div>
                        </div>
						
						
						
						<a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_175')?>">
                         <div class="primari_line_table link">					
                            <div class="primari_line_table_cadastr">
                                ФОТО 37:05:030560:175
                            </div>
                            <div class="primari_table_sotki">
                                8,86
                            </div>
                            <div class="primari_table_price">
                                260 000 р
                            </div>
                            <div class="primari_table_price_one">
                                29 345 р !!!
                            </div>
                        </div>

                        </a>
						
						<a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_217')?>">
                         <div class="primari_line_table link">					
                            <div class="primari_line_table_cadastr">
                                ФОТО 37:05:030560:217
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                310 000 р
                            </div>
                            <div class="primari_table_price_one">
                                38 750 р !!!
                            </div>
                        </div>

                        </a>
						
						
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:117
                            </div>
                            <div class="primari_table_sotki">
                                8,83
                            </div>
                            <div class="primari_table_price">
                                330 000 р
                            </div>
                            <div class="primari_table_price_one">
                                37 372 р !!!
                            </div>
                        </div>
						
						 <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:137
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                330 000 р
                            </div>
                            <div class="primari_table_price_one">
                                41 250 р
                            </div>
                        </div>
						
                        <a href="<?=Yii::$app->urlManager->createUrl('site/uchastok_172')?>">
                            <div class="primari_line_table link">
                                <div class="primari_line_table_cadastr">
                                    ФОТО 37:05:030560:172
                                </div>
                                <div class="primari_table_sotki">
                                    8,56
                                </div>
                                <div class="primari_table_price">
                                    350 000 р
                                </div>
                                <div class="primari_table_price_one">
                                    40 887р !!!
                                </div>
                            </div>
                        </a>

                       
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:181
                            </div>
                            <div class="primari_table_sotki">
                                9,8
                            </div>
                            <div class="primari_table_price">
                                360 000 р
                            </div>
                            <div class="primari_table_price_one">
                                36 734 р !!!
                            </div>
                        </div>
						
						
						 <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:224
                            </div>
                            <div class="primari_table_sotki">
                                8,17
                            </div>
                            <div class="primari_table_price">
                                380 000 р
                            </div>
                            <div class="primari_table_price_one">
                                46 511 р
                            </div>
                        </div>
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:177
                            </div>
                            <div class="primari_table_sotki">
                                8,33
                            </div>
                            <div class="primari_table_price">
                                390 000 р
                            </div>
                            <div class="primari_table_price_one">
                                46 818 р
                            </div>
                        </div>
						
						 <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:195
                            </div>
                            <div class="primari_table_sotki">
                                8,38
                            </div>
                            <div class="primari_table_price">
                                390 000 р
                            </div>
                            <div class="primari_table_price_one">
                                46 539 р
                            </div>
                        </div>
                      
                       
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:211
                            </div>
                            <div class="primari_table_sotki">
                                10,01
                            </div>
                            <div class="primari_table_price">
                                410 000 р
                            </div>
                            <div class="primari_table_price_one">
                                40 959 р
                            </div>
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:234
                            </div>
                            <div class="primari_table_sotki">
                                8,31
                            </div>
                            <div class="primari_table_price">
                                410 000 р
                            </div>
                            <div class="primari_table_price_one">
                                49 338 р
                            </div>
                        </div>
                       
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:178
                            </div>
                            <div class="primari_table_sotki">
                                10,79
                            </div>
                            <div class="primari_table_price">
                                430 000 р
                            </div>
                            <div class="primari_table_price_one">
                                39 851 р
                            </div>
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:135
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                430 000 р
                            </div>
                            <div class="primari_table_price_one">
                                53 750 р
                            </div>
                        </div>
						
						
                        
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:185
                            </div>
                            <div class="primari_table_sotki">
                                8,67
                            </div>
                            <div class="primari_table_price">
                                480 000 р
                            </div>
                            <div class="primari_table_price_one">
                                55 363 р
                            </div>
                        </div>
                        
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:174
                            </div>
                            <div class="primari_table_sotki">
                                10,18
                            </div>
                            <div class="primari_table_price">
                                480 000 р
                            </div>
                            <div class="primari_table_price_one">
                                47 151 р
                            </div>
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:132
                            </div>
                            <div class="primari_table_sotki">
                                8,18
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                64 792 р
                            </div>
                        </div>
						
						 <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:100
                            </div>
                            <div class="primari_table_sotki">
                                8
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                66 250 р
                            </div>
                        </div>
						
						<div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:105
                            </div>
                            <div class="primari_table_sotki">
                                13,25
                            </div>
                            <div class="primari_table_price">
                                530 000 р
                            </div>
                            <div class="primari_table_price_one">
                                40 000 р !!!
                            </div>
                        </div>
						
						
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:116
                            </div>
                            <div class="primari_table_sotki">
                                10,03
                            </div>
                            <div class="primari_table_price">
                                540 000 р
                            </div>
                            <div class="primari_table_price_one">
                                53 838 р
                            </div>
                        </div>
                        
                       
                        
                        <div class="primari_line_table">
                            <div class="primari_line_table_cadastr">
                                37:05:030560:112
                            </div>
                            <div class="primari_table_sotki">
                                13,09
                            </div>
                            <div class="primari_table_price">
                                680 000 р
                            </div>
                            <div class="primari_table_price_one">
                                51 948 р
                            </div>
                        </div>
                    </div>
                    <div class="img_none" style="display: inline-block; width: 25%">
                        <img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама">
                    </div>

                    <div style="position: relative;
z-index: -4;
left: -407px;
float: left;
margin-top: -535px;" class="footer-bg"></div>
                </div>
            </div>
        </section>
    </article>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <div id="modal_form"><!-- Сaмo oкнo -->
        <span id="modal_close"></span> <!-- Кнoпкa зaкрыть -->
        <div id="slider" class="slider_wrap">
            <img class="modal_1" style="width: 95%" src="/images/index/kalachevo-1.png" />
            <img class="modal_1" style="width: 95%; " src="/images/index/kalachevo-2.png" />
            <img class="modal_1" style="width: 95%; " src="/images/index/kalachevo-3.png" />
        </div>
    </div>
    <div id="overlay"></div><!-- Пoдлoжкa -->
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./lib/jquery-1.11.1.min.js"><\/script>')</script>

<script>




    $(document).ready(function() {


        $('.modal_1').click(function () {
            var link = $(this).attr('src');
            $('#slider img').each(function () {
                $(this).css({'display':'none'});
            });
            var perem = '#slider img[src = "'+link+'"]';
            $(perem).css({'display':'inline'});

        });

        // вся мaгия пoсле зaгрузки стрaницы
        $('.modal_1').click( function(event){ // лoвим клик пo ссылки с id="go"
            event.preventDefault(); // выключaем стaндaртную рoль элементa
            $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
                function(){ // пoсле выпoлнения предъидущей aнимaции
                    $('#modal_form')
                        .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                        .animate({opacity: 1, top: '25%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
                });
        });
        /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
        $('#modal_close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
            $('#modal_form')
                .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                    function(){ // пoсле aнимaции
                        $(this).css('display', 'none'); // делaем ему display: none;
                        $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                    }
                );
        });
    });
</script>
<script>
    $(function () {
        var elWrap = $('#slider'),
            el =  elWrap.find('img'),
            indexImg = 1,
            indexMax = el.length,
            phase = 30000000;

        function change () {
            el.fadeOut(500);
            el.filter(':nth-child('+indexImg+')').fadeIn(500);
        }

        function autoCange () {
            indexImg++;
            if(indexImg > indexMax) {
                indexImg = 1;
            }
            change ();
        }
        var interval = setInterval(autoCange, phase);

        elWrap.mouseover(function() {
            clearInterval(interval);
        });
        elWrap.mouseout(function() {
            interval = setInterval(autoCange, phase);
        });

        elWrap.append('<span class="next"></span><span class="prev"></span>');
        var	btnNext = $('span.next'),
            btnPrev = $('span.prev');

        btnNext.click(function() {
            indexImg++;
            if(indexImg > indexMax) {
                indexImg = 1;
            }
            change ();
        });
        btnPrev.click(function() {
            indexImg--;
            if(indexImg < 1) {
                indexImg = indexMax;
            }
            change ();
        });
    });

</script>
