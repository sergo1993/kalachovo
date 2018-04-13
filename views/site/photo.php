<?php
$this->title = "Фотографии деревни Калачево.";


$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Фотографии деревни Калачево Ивановского района расположенной в районе ТЭЦ-3'
]);

$this->registerMetaTag([
    'name' => 'Keywords',
    'content' => 'калачево фотографии'
]);

?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter29468350 = new Ya.Metrika({id:29524165,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script><noscript><div><img src="//mc.yandex.ru/watch/29468350" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


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
        <a class="house"> <span class="ico house"></span> <h4 class="text">2 км. от города
            </h4></a>
        <a class="house"> <span class="ico genplan"></span> <h4
                class="text">Низкая стоимость</h4></a>
        <a class="house"> <span
                class="ico film"></span> <h4 class="text">Коммуникации за счет государства</h4></a>
        <a>
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
            <div style="width: 100%" class="description"><h1 style="text-align: center">Галерея</h1>
            </div>
            <div style="width: 100%;">
                <div style="width: 70%; display: inline-block;">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-1.jpg" alt="Фото 1">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-2.jpg" alt="Фото 2">
                    <div class="img_add" style="display: none; width: 25%">
						<a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама"></a>
						<a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/banner2.jpg" alt="Реклама"></a>
                    </div>
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-3.jpg" alt="Фото 3">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-4.jpg" alt="Фото 4">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-5.jpg" alt="Фото 5">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-6.jpg" alt="Фото 6">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-7.jpg" alt="Фото 7">
                    <img class="go" style="width: 701px; width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-8.jpg" alt="Фото 8">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-10.jpg" alt="Фото 9">

                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-11.jpg" alt="Фото 10">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-12.jpg" alt="Фото 11">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-13.jpg" alt="Фото 12">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-14.jpg" alt="Фото 13">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-15.jpg" alt="Фото 14">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-16.jpg" alt="Фото 15">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-17.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-18.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-19.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-20.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-21.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-22.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-23.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-24.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-25.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-26.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-27.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-28.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-29.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-30.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-31.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-32.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-33.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-34.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-35.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-36.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-37.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-38.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-39.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-40.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-41.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-42.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-43.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-44.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-45.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-46.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-47.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-48.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-49.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-50.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-51.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-52.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-53.jpg" alt="Фото 16">
                    <img class="go" style="width: 701px; margin: 20px auto; display: block;"
                         src="/images/photki/kalachevo-derevnya-54.jpg" alt="Фото 16">
                </div>
                <div class="img_none" style="vertical-align: top; width: 19%; display: inline-block;">
                                        <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/reclama_vtoroi_variant.jpg" alt="Реклама"></a>
                                        <a href="<?= Yii::$app->urlManager->createUrl('site/reklama'); ?>"><img style="margin-left: 65px; width: 230px; margin-top: 35px;" src="/web/images/banner2.jpg" alt="Реклама"></a>
                </div>
            </div>

        </section>
    </article>

    <div id="modal_form"><!-- Сaмo oкнo -->
        <span id="modal_close"></span> <!-- Кнoпкa зaкрыть -->
        <div id="slider" class="slider_wrap">
            <img alt="Image 1" src="/images/photki/kalachevo-derevnya-1.jpg"/>
            <img alt="Image 2" src="/images/photki/kalachevo-derevnya-2.jpg"/>
            <img alt="Image 3" src="/images/photki/kalachevo-derevnya-3.jpg"/>
            <img alt="Image 4" src="/images/photki/kalachevo-derevnya-4.jpg"/>
            <img alt="Image 5" src="/images/photki/kalachevo-derevnya-5.jpg"/>
            <img alt="Image 6" src="/images/photki/kalachevo-derevnya-6.jpg"/>
            <img alt="Image 7" src="/images/photki/kalachevo-derevnya-7.jpg"/>
            <img alt="Image 8" src="/images/photki/kalachevo-derevnya-8.jpg"/>
            <img alt="Image 9" src="/images/photki/kalachevo-derevnya-9.jpg"/>
            <img alt="Image 10" src="/images/photki/kalachevo-derevnya-10.jpg"/>
            <img alt="Image 11" src="/images/photki/kalachevo-derevnya-11.jpg"/>
            <img alt="Image 12" src="/images/photki/kalachevo-derevnya-12.jpg"/>
            <img alt="Image 13" src="/images/photki/kalachevo-derevnya-13.jpg"/>
            <img alt="Image 14" src="/images/photki/kalachevo-derevnya-14.jpg"/>
            <img alt="Image 15" src="/images/photki/kalachevo-derevnya-15.jpg"/>
            <img alt="Image 16" src="/images/photki/kalachevo-derevnya-16.jpg"/>
            <img alt="Image 17" src="/images/photki/kalachevo-derevnya-17.jpg"/>
            <img alt="Image 18" src="/images/photki/kalachevo-derevnya-18.jpg"/>
            <img alt="Image 19" src="/images/photki/kalachevo-derevnya-19.jpg"/>
            <img alt="Image 20" src="/images/photki/kalachevo-derevnya-20.jpg"/>
            <img alt="Image 21" src="/images/photki/kalachevo-derevnya-21.jpg"/>
            <img alt="Image 22" src="/images/photki/kalachevo-derevnya-22.jpg"/>
            <img alt="Image 23" src="/images/photki/kalachevo-derevnya-23.jpg"/>
            <img alt="Image 24" src="/images/photki/kalachevo-derevnya-24.jpg"/>
            <img alt="Image 25" src="/images/photki/kalachevo-derevnya-25.jpg"/>
            <img alt="Image 26" src="/images/photki/kalachevo-derevnya-26.jpg"/>
            <img alt="Image 27" src="/images/photki/kalachevo-derevnya-27.jpg"/>
            <img alt="Image 28" src="/images/photki/kalachevo-derevnya-28.jpg"/>
            <img alt="Image 29" src="/images/photki/kalachevo-derevnya-29.jpg"/>
            <img alt="Image 30" src="/images/photki/kalachevo-derevnya-30.jpg"/>
            <img alt="Image 31" src="/images/photki/kalachevo-derevnya-31.jpg"/>
            <img alt="Image 32" src="/images/photki/kalachevo-derevnya-32.jpg"/>
            <img alt="Image 33" src="/images/photki/kalachevo-derevnya-33.jpg"/>
            <img alt="Image 34" src="/images/photki/kalachevo-derevnya-34.jpg"/>
            <img alt="Image 35" src="/images/photki/kalachevo-derevnya-35.jpg"/>
            <img alt="Image 36" src="/images/photki/kalachevo-derevnya-36.jpg"/>
            <img alt="Image 37" src="/images/photki/kalachevo-derevnya-37.jpg"/>
            <img alt="Image 38" src="/images/photki/kalachevo-derevnya-38.jpg"/>
            <img alt="Image 39" src="/images/photki/kalachevo-derevnya-39.jpg"/>
            <img alt="Image 40" src="/images/photki/kalachevo-derevnya-40.jpg"/>
            <img alt="Image 41" src="/images/photki/kalachevo-derevnya-41.jpg"/>
            <img alt="Image 42" src="/images/photki/kalachevo-derevnya-42.jpg"/>
            <img alt="Image 43" src="/images/photki/kalachevo-derevnya-43.jpg"/>
            <img alt="Image 44" src="/images/photki/kalachevo-derevnya-44.jpg"/>
            <img alt="Image 45" src="/images/photki/kalachevo-derevnya-45.jpg"/>
            <img alt="Image 46" src="/images/photki/kalachevo-derevnya-46.jpg"/>
            <img alt="Image 47" src="/images/photki/kalachevo-derevnya-47.jpg"/>
            <img alt="Image 48" src="/images/photki/kalachevo-derevnya-48.jpg"/>
            <img alt="Image 49" src="/images/photki/kalachevo-derevnya-49.jpg"/>
            <img alt="Image 50" src="/images/photki/kalachevo-derevnya-50.jpg"/>
            <img alt="Image 51" src="/images/photki/kalachevo-derevnya-51.jpg"/>
            <img alt="Image 52" src="/images/photki/kalachevo-derevnya-52.jpg"/>
            <img alt="Image 53" src="/images/photki/kalachevo-derevnya-53.jpg"/>
            <img alt="Image 54" src="/images/photki/kalachevo-derevnya-54.jpg"/>


        </div>
    </div>
    <div id="overlay"></div><!-- Пoдлoжкa -->
    <div style="position: relative;
z-index: -4;
left: -417px;
float: left;
margin-top: -535px;" class="footer-bg"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./lib/jquery-1.11.1.min.js"><\/script>')</script>

<script>


    $(document).ready(function () { // вся мaгия пoсле зaгрузки стрaницы


            $('.go').click(function () {
                var link = $(this).attr('src');
                $('#slider img').each(function () {
                    $(this).css({'display':'none'});
                });
                var perem = '#slider img[src = "'+link+'"]';
                $(perem).css({'display':'inline'});
            });

        $('.go').click(function (event) { // лoвим клик пo ссылки с id="go"
            event.preventDefault(); // выключaем стaндaртную рoль элементa
            $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
                function () { // пoсле выпoлнения предъидущей aнимaции
                    $('#modal_form')
                        .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                        .animate({opacity: 1, top: '25%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
                });
        });
        /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
        $('#modal_close, #overlay').click(function () { // лoвим клик пo крестику или пoдлoжке
            $('#modal_form')
                .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                    function () { // пoсле aнимaции
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
            el = elWrap.find('img'),
            indexImg = 1,
            indexMax = el.length,
            phase = 30000000;

        function change() {
            el.fadeOut(500);
            el.filter(':nth-child(' + indexImg + ')').fadeIn(500);
        }

        function autoCange() {
            indexImg++;
            if (indexImg > indexMax) {
                indexImg = 1;
            }
            change();
        }

        var interval = setInterval(autoCange, phase);

        elWrap.mouseover(function () {
            clearInterval(interval);
        });
        elWrap.mouseout(function () {
            interval = setInterval(autoCange, phase);
        });

        elWrap.append('<span class="next"></span><span class="prev"></span>');
        var btnNext = $('span.next'),
            btnPrev = $('span.prev');

        btnNext.click(function () {
            indexImg++;
            if (indexImg > indexMax) {
                indexImg = 1;
            }
            change();
        });
        btnPrev.click(function () {
            indexImg--;
            if (indexImg < 1) {
                indexImg = indexMax;
            }
            change();
        });
    });

</script>