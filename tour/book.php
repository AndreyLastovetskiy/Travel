<?php
require_once("../db/db.php");
$tourid = $_GET['id'];
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
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/media.css">
    <title>Бронирование</title>
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
                    <li><a href="../view_country/view_all.php">Страны</a></li>
                    <li><a href="all_tour.php">Туры</a></li>
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
        <div class="container-guarantee">
            <section class="guarantee">
                <div class="guarantee-wrapper">
                    <div class="qw-payinfo">
                        <div class="gw-left">
                            <?php
                            $selinfo_tour = mysqli_query($link, "SELECT * FROM `tours` WHERE `id` = '$tourid'");
                            $selinfo_tour = mysqli_fetch_assoc($selinfo_tour);
                            ?>
                            <p class="gwl-title">К оплате</p>
                            <p class="gwl-price"><?php echo $selinfo_tour['price']; ?> руб.</p>
                        </div>
                        <div class="gw-rigth">
                            <div class="gwr-wrapper">
                                <div class="gwrw-icon">
                                    <i class="fa-solid fa-shield-halved fa-2xl gwrt-icon"></i>
                                </div>
                                <div class="gwrw-maininfo">
                                    <p class="gwr-title">Гарантия честных цен</p>
                                    <p class="gwr-subtitle">Гарантируем, что забронируем вам любой <br> тур по цене туроператора или дешевле</p>
                                    <p class="gwr-descrip">Цена за 2 взрослых. В тур входит: перелет, отель, <br> питание на выбор и страховка.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="vendor/booking.php" method="post" class="qw-sendform">
                        <input type="hidden" name="id" value="<?php print($selinfo_tour['id']); ?>">
                        <div class="text-field text-field_floating-2">
                            <input class="text-field__input" type="email" id="email" name="email" placeholder="123">
                            <label class="text-field__label" for="email">Email</label>
                        </div>
                        <div class="text-field text-field_floating-2">
                            <input class="text-field__input" type="text" id="phone" name="phone" placeholder="123">
                            <label class="text-field__label" for="phone">Телефон</label>
                        </div>
                        <button type="submit" class="qws-btn">Забронировать</button>
                    </form>
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
</body>
</html>