<?php 
require_once("../db/db.php");
$id_tour = $_GET['id'];
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
                <p class="hs-title">Давайте же теперь</p>
                <p class="hs-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                <div class="location">
                    <div class="loc-wrapper">
                        <div class="loc-place">
                            <img src="../img/map_marker.svg">
                        </div>
                        <div class="name-place">
                            <p class="np-loc">Location</p>
                            <p class="np-nameloc">Thailand</p>
                        </div>
                        <div class="half">
                            <img src="../img/half.svg">
                        </div>
                        <div class="calandary">
                            <img src="../img/calendary.svg">
                        </div>
                        <div class="date">
                            <p class="d-tit">Date</p>
                            <p class="d-day">13 May, 2023</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-tour-packages">
            <section class="tour-packages">
                <div class="tp-wrapper">
                    <?php
                    if(isset($_COOKIE["id"])) {
                        if($_COOKIE["idgroup"] == 2) { ?>
                            <a href="update-tour.php?id=<?php echo $id_tour; ?>" class="tpw-update">Редактировать</a>
                        <?php }
                    }
                    ?>
                    <?php

                    $sel_tour = mysqli_query($link, "SELECT * FROM `tours` WHERE `id` = '$id_tour'");
                    $sel_tour = mysqli_fetch_assoc($sel_tour);

                    $id_count = $sel_tour['idcountry'];

                    $sel_count = mysqli_query($link, "SELECT * FROM `country` WHERE `id` = '$id_count'");
                    $sel_count = mysqli_fetch_assoc($sel_count);

                    ?>
                    <div class="cart-tour">
                        <div class="ct-wrapper">
                            <div class="ctw-image">
                                <img src="<?php print("../" . $sel_tour['pathimg']); ?>">
                            </div>
                            <div class="ctw-info">
                                <p class="ctwi-title"><?php echo $sel_tour['title']; ?></p>
                                <p class="ctwi-place"><i class="fa-solid fa-location-dot"></i> <?php echo $sel_count['title']; ?>, <?php echo $sel_tour['title']; ?></p>
                                <p class="ctwi-descrip"><?php echo $sel_tour['descrip']; ?></p>
                                <a href="../book.html">Летим!</a>
                            </div>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="fwiw-right">
                            <p class="fwiwr-title">Contact Us</p>
                            <div class="fwiwrt-contacts">
                                <p class="fwiwrtc-address">Akshya Nagar 1st Block 1st Cross, <br> Rammurthy nagar, Bangalore-560016</p>
                                <a href="tel: +1 202-918-2132">+1 202-918-2132</a>
                                <a href="mailto: listeetravel@mail.com">listeetravel@mail.com</a>
                                <a href="#!">www.listeetravel.com</a>
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
            <a href="#!"><img src="./img/logo.png"></a>
        </div>
        <nav class="mobile-nav">
            <div class="signin-btns-mobile">
                <ul class="sb-list sb-list-mobile">
                    <li class="sbl-item"><a href="#!" class="sbli-signin">Войти</a></li>
                    <li class="sbl-item"><a href="#!" class="sbli-signup">Регистрация</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <script src="./script/humbuerger.js"></script>
</body>
</html>