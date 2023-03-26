<?php
session_start();
require_once("db/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/media.css">
    <title>Главная</title>
</head>
<body>  
    <header>
        <div class="hi">
            <div class="hi-cover"></div>
        </div>
        <button class="header-humburger">
            <img src="img/humburger.png">
        </button>
        <div class="header-wrapper">
            <nav class="menu">
                <div class="menu-logo">
                    <a href="index.php"><img src="./img/logo.png"></a>
                </div>
                <ul class="menu-btn">
                    <li><a href="./view_country/view_all.php">Страны</a></li>
                    <li><a href="./tour/all_tour.php">Туры</a></li>
                </ul>
                <?php 
                if(!isset($_COOKIE["id"])) { ?>
                    <div class="signin-btns">
                        <ul class="sb-list">
                            <li class="sbl-item"><a href="./login/login.php" class="sbli-signin">Войти</a></li>
                            <li class="sbl-item"><a href="./registration/registration.php" class="sbli-signup">Регистрация</a></li>
                        </ul>
                    </div>
                <?php } ?>
            </nav>
            <div class="header-slogan">
                <p class="hs-title">Покупайте туры онлайн, пока они не закончились</p>
                <p class="hs-subtitle">Так вы забронируете тур по самой низкой цене и сэкономите время. Туры быстро заканчиваются. Средняя скорость выкупа горящих туров с нашего сайта — 60 минут. За это время вы не успеете добраться до офиса турагентства. Забронируйте тур мечты онлайн — успейте поймать самую низкую цену!</p>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <section class="destination">
                <div class="destination-wrapper">
                    <p class="dw-title">Места назначения</p>
                    <div class="dw-main">
                        <div class="dwm-wrapper">
                            <div class="dwmw-left">
                                <?php
                                    $sel_count1 = mysqli_query($link, "SELECT * FROM `country` WHERE `id` = '3'");
                                    $sel_count1 = mysqli_fetch_assoc($sel_count1);

                                    $sc1id = $sel_count1['id'];
                                    $sel_tour1 = mysqli_query($link, "SELECT COUNT(*) FROM `tours` WHERE `idcountry` = '$sc1id'");
                                    $sel_tour1 = mysqli_fetch_array($sel_tour1);

                                    if($sel_tour1[0] == 1) {
                                        $tour_title = "Тур";
                                    } elseif (($sel_tour1[0] <= 4)) {
                                        $tour_title = "Тура";
                                    } elseif($sel_tour1[0] >= 5) {
                                        $tour_title = "Туров";
                                    }
                                ?>
                                <img src="<?php print($sel_count1['pathimg']); ?>">
                                <div class="dwmw-info">
                                    <p><?php echo $sel_count1['title']; ?></p>
                                    <a href="tour/country.php?id=<?php print($sc1id); ?>"><?php print($sel_tour1[0]); ?> <?php echo $tour_title; ?></a>
                                </div>
                            </div>
                            <div class="dwmw-right">
                                <div class="dwmwr-wrapper">
                                    <div class="dwmwrw-first">
                                        <?php
                                            $sel_count2 = mysqli_query($link, "SELECT * FROM `country` WHERE `id` = '4'");
                                            $sel_count2 = mysqli_fetch_assoc($sel_count2);

                                            $sc2id = $sel_count2['id'];
                                            $sel_tour2 = mysqli_query($link, "SELECT COUNT(*) FROM `tours` WHERE `idcountry` = '$sc2id'");
                                            $sel_tour2 = mysqli_fetch_array($sel_tour2);

                                            if($sel_tour2[0] == 1) {
                                                $tour_title2 = "Тур";
                                            } elseif (($sel_tour2[0] <= 4)) {
                                                $tour_title2 = "Тура";
                                            } elseif($sel_tour2[0] >= 5) {
                                                $tour_title2 = "Туров";
                                            }
                                        ?>
                                        <img src="<?php print($sel_count2['pathimg']); ?>">
                                        <div class="dwmw-info">
                                            <p><?php echo $sel_count2['title']; ?></p>
                                            <a href="tour/country.php?id=<?php print($sc2id); ?>"><?php print($sel_tour2[0]); ?> <?php echo $tour_title2; ?></a>
                                        </div>
                                    </div>
                                    <div class="dwmwrw-second">
                                        <?php
                                            $sel_count3 = mysqli_query($link, "SELECT * FROM `country` WHERE `id` = '5'");
                                            $sel_count3 = mysqli_fetch_assoc($sel_count3);

                                            $sc3id = $sel_count3['id'];
                                            $sel_tour3 = mysqli_query($link, "SELECT COUNT(*) FROM `tours` WHERE `idcountry` = '$sc3id'");
                                            $sel_tour3 = mysqli_fetch_array($sel_tour3);

                                            if($sel_tour3[0] == 1) {
                                                $tour_title3 = "Тур";
                                            } elseif (($sel_tour3[0] <= 4)) {
                                                $tour_title3 = "Тура";
                                            } elseif($sel_tour3[0] >= 5) {
                                                $tour_title3 = "Туров";
                                            }
                                        ?>
                                        <img src="<?php print($sel_count3['pathimg']); ?>">
                                        <div class="dwmw-info">
                                            <p><?php echo $sel_count3['title']; ?></p>
                                            <a href="tour/country.php?id=<?php print($sc3id); ?>"><?php print($sel_tour3[0]); ?> <?php echo $tour_title3; ?></a>
                                        </div>
                                    </div>
                                    <div class="dwmwrw-third">
                                        <?php
                                            $sel_count4 = mysqli_query($link, "SELECT * FROM `country` WHERE `id` = '6'");
                                            $sel_count4 = mysqli_fetch_assoc($sel_count4);

                                            $sc4id = $sel_count4['id'];
                                            $sel_tour4 = mysqli_query($link, "SELECT COUNT(*) FROM `tours` WHERE `idcountry` = '$sc4id'");
                                            $sel_tour4 = mysqli_fetch_array($sel_tour4);

                                            if($sel_tour4[0] == 1) {
                                                $tour_title4 = "Тур";
                                            } elseif (($sel_tour4[0] <= 4)) {
                                                $tour_title4 = "Тура";
                                            } elseif($sel_tour4[0] >= 5) {
                                                $tour_title4 = "Туров";
                                            }
                                        ?>
                                        <img src="<?php print($sel_count4['pathimg']); ?>">
                                        <div class="dwmw-info">
                                            <p><?php echo $sel_count4['title']; ?></p>
                                            <a href="tour/country.php?id=<?php print($sc4id); ?>"><?php print($sel_tour4[0]); ?> <?php echo $tour_title4; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="./view_country/view_all.php" class="dwm-view">Подробнее</a>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-activity">
            <section class="activity">
                <div class="activity-wrapper">
                    <div class="aw-title">
                        <p>Почему listeetravel?</p>
                    </div>
                    <div class="aw-subtitle">
                        <p>Все необходимые детали путешествия мы сообщим вам по телефону, а документы пришлем на email. С listeetravel вы всегда будете уверены, что отдых пройдет на ура!</p>
                    </div>
                    <div class="aw-activities">
                        <div class="awa-block">

                            <i class="fa-solid fa-suitcase-rolling fa-10x"></i>
                            <p class="awab-title">Проверенные туроператоры</p>
                            <p class="awab-info">Мы предлагаем туры только от проверенных партнеров.</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-solid fa-database fa-10x"></i>
                            <p class="awab-title">Международные инвестиции</p>
                            <p class="awab-info">Listeetravel — крупная компания с международными и​нвестициями б​олее 10 млн. долларов. Входит в группу компаний, работающих в 5 странах Европы, и является членом Альянса Туристических Агентств.</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-solid fa-shield-halved fa-10x"></i>
                            <p class="awab-title">Безопасность — прежде всего!</p>
                            <p class="awab-info">Все платежи по карте проходят через защищенные порталы Сбербанка и Промсвязьбанка.</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-solid fa-clock-rotate-left fa-10x"></i>
                            <p class="awab-title">Работаем 24/7</p>
                            <p class="awab-info">Наши менеджеры по туризму всегда на связи. Они будут сопровождать вас от первого звонка-заявки для подбора тура до вашего возвращения из отпуска.</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-solid fa-file-lines fa-10x"></i>
                            <p class="awab-title">О нас пишут</p>
                            <p class="awab-info">Забудем про скромность – почитайте, что о нас пишут ведущие СМИ: Forbes, ТАСС</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-regular fa-handshake fa-10x"></i>
                            <p class="awab-title">Большая сеть партнеров</p>
                            <p class="awab-info">Если вы предпочитаете оплачивать покупку тура в офисе, вы можете обратиться в наш офис в Москве или к агентствам-партнерам, которые расположены по всей России.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-tour-packages">
            <section class="tour-packages">
                <div class="tp-wrapper">
                    <div class="tw-title">
                        <p>Туры</p>
                    </div>
                    <div class="tp-subtitle">
                        <p>Новые туры, которые Вы можете приобрести!</p>
                    </div>
                    <div class="tp-info">
                        <div class="tpi-wrapper">
                            <div class="tpiw-block">
                                <?php 
                                $sel_tour = mysqli_query($link, "SELECT * FROM `tours` ORDER BY `id` DESC");
                                $sel_tour = mysqli_fetch_all($sel_tour);
                                
                                foreach($sel_tour as $st) { ?>
                                    <a href="tour/tour.php?id=<?php echo $st[0]; ?>">
                                        <img src="<?php print($st[4]); ?>" width="346px" >
                                        <div class="tpiwb-main">
                                            <div class="tpiwb-decrip">
                                                <p class="tpiwb-first"><?php echo $st[2]; ?>, 
                                                <?php
                                                    $sc = $st[1];
                                                    $sel_count = mysqli_query($link, "SELECT * FROM `country` WHERE `id` = '$sc'");
                                                    $sel_count = mysqli_fetch_assoc($sel_count);

                                                    echo $sel_count['title'];
                                                ?></p>
                                                <p class="tpiwb-second">7 days trip</p>
                                            </div>
                                            <div class="tpiwb-price">
                                                <p><?php echo $st[3]; ?> Руб</p>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-photos">
            <section class="photos">
                <div class="photos-wrapper">
                    <div class="pw-title">
                        <p>Галлерея</p>
                    </div>
                    <div class="pw-subtitle">
                        <p>Представлены фотографии со всех туров</p>
                    </div>
                    <div class="pw-gallery">
                        <img src="./img/gallery-1.png">
                        <img src="./img/gallery-2.png">
                        <img src="./img/gallery-3.png">
                        <img src="./img/gallery-4.png">
                        <img src="./img/gallery-5.png">
                        <img src="./img/gallery-6.png">
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer">
            <div class="footer-wrapper">
                <div class="fw-img">
                    <div class="fwi-cover"></div>
                </div>
                <div class="fw-info">
                    <div class="fwi-wrapper">
                        <div class="fwiw-left">
                            <img src="./img/logo_white.png">
                            <p>Listeetravel.com - это туристическая компания нового поколения. Мы используем все доступные сегодня технологии, чтобы сделать выбор, оплату и бронирование Вашего путешествия максимально удобными и приятными.</p>
                        </div>
                        <div class="fwiw-right">
                            <p class="fwiwr-title">Контакты</p>
                            <div class="fwiwrt-contacts">
                                <p class="fwiwrtc-address">Государственное бюджетное профессиальное <br> образовательное учреждение <br> Таганрогский колледж морского приборостроения</p>
                                <a href="tel: +0 (000) 000-00-00">+0 (000) 000-00-00</a>
                                <a href="mailto: listeetravel@mail.com">listeetravel@mail.com</a>
                                <a href="index.php">www.listeetravel.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="mobile-menu">
        <div class="header-humburger header-humburger-close">
            <img src="./img/humburger.png" id="closeMobileNav">
        </div>
        <div class="menu-logo">
            <a href="index.php"><img src="./img/logo.png"></a>
        </div>
        <nav class="mobile-nav">
            <?php 
            if(!isset($_COOKIE["id"])) { ?>
                <div class="signin-btns-mobile">
                    <ul class="sb-list sb-list-mobile">
                        <li class="sbl-item"><a href="./login/login.php" class="sbli-signin">Войти</a></li>
                        <li class="sbl-item"><a href="./registration/registration.php" class="sbli-signup">Регистрация</a></li>
                    </ul>
                </div>
            <?php } ?>
        </nav>
    </div>

    <script src="./script/humbuerger.js"></script>
</body>
</html>