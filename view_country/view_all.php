<?php
require_once("../db/db.php");
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
    <link rel="stylesheet" href="../style/view_all.css">
    <link rel="stylesheet" href="../style/media.css">
    <title>Главная</title>
</head>
<body>
<header>
        <div class="hi">
            <div class="hi-cover"></div>
        </div>
        <button class="header-humburger">
            <img src="../img/humburger.png">
        </button>
        <div class="header-wrapper">
            <nav class="menu">
                <div class="menu-logo">
                    <a href="../index.php"><img src="../img/logo.png"></a>
                </div>
                <ul class="menu-btn">
                    <li><a href="view_all.php">Страны</a></li>
                    <li><a href="../tour/all_tour.php">Туры</a></li>
                </ul>
                <?php 
                if(!isset($_COOKIE["id"])) { ?>
                    <div class="signin-btns">
                        <ul class="sb-list">
                            <li class="sbl-item"><a href="../login/login.php" class="sbli-signin">Войти</a></li>
                            <li class="sbl-item"><a href="../registration/registration.php" class="sbli-signup">Регистрация</a></li>
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
                    <div class="dw-titleinfo">
                        <p class="dw-title">МЕСТА НАЗНАЧЕНИЯ</p>
                        <?php
                            if(isset($_COOKIE["id"])) {
                                if($_COOKIE["idgroup"] == 2) { ?>
                                    <a href="add_country.php"><i class="fa-solid fa-circle-plus fa-3x"></i></a>
                                <?php } 
                            }
                        ?>
                        
                    </div>
                    <div class="dw-main">
                        <div class="dwm-wrapper">
                            <?php 
                            $sel_country = mysqli_query($link, "SELECT * FROM `country` ORDER BY `id` ASC");
                            $sel_country = mysqli_fetch_all($sel_country);

                                                      

                            foreach($sel_country as $sc) { 
                                $sc1id = $sc[0];
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
                                <div class="dwmw-left">
                                    <img src="<?php print_r("../" . $sc[2]); ?>">
                                    <div class="dwmw-info">
                                        <p><?php echo $sc[1]; ?></p>
                                        <a href="../tour/cart-tour.php?id=<?php echo $sc[0]; ?>"><?php print($sel_tour1[0]); ?> <?php echo $tour_title; ?></a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
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
                            <img src="../img/logo_white.png">
                            <p>Listeetravel.com - это туристическая компания нового поколения. Мы используем все доступные сегодня технологии, чтобы сделать выбор, оплату и бронирование Вашего путешествия максимально удобными и приятными.</p>
                        </div>
                        <div class="fwiw-right">
                            <p class="fwiwr-title">Контакты</p>
                            <div class="fwiwrt-contacts">
                                <p class="fwiwrtc-address">Государственное бюджетное профессиальное <br> образовательное учреждение <br> Таганрогский колледж морского приборостроения</p>
                                <a href="tel: +0 (000) 000-00-00">+0 (000) 000-00-00</a>
                                <a href="mailto: listeetravel@mail.com">listeetravel@mail.com</a>
                                <a href="../index.php">www.listeetravel.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="mobile-menu">
        <div class="header-humburger header-humburger-close">
            <img src="../img/humburger.png" id="closeMobileNav">
        </div>
        <div class="menu-logo">
            <a href="../index.php"><img src="../img/logo.png"></a>
        </div>
        <nav class="mobile-nav">
            <?php 
            if(!isset($_COOKIE["id"])) { ?>
                <div class="signin-btns-mobile">
                    <ul class="sb-list sb-list-mobile">
                        <li class="sbl-item"><a href="../login/login.php" class="sbli-signin">Войти</a></li>
                        <li class="sbl-item"><a href="../registration/registration.php" class="sbli-signup">Регистрация</a></li>
                    </ul>
                </div>
            <?php } ?>
        </nav>
    </div>

    <script src="../script/humbuerger.js"></script>
</body>
</html>