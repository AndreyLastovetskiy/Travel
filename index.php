<?php
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
                    <a href="#!"><img src="./img/logo.png"></a>
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
                            <img src="./img/map_marker.svg">
                        </div>
                        <div class="name-place">
                            <p class="np-loc">Location</p>
                            <p class="np-nameloc">Thailand</p>
                        </div>
                        <div class="half">
                            <img src="./img/half.svg">
                        </div>
                        <div class="calandary">
                            <img src="./img/calendary.svg">
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
        <div class="container">
            <section class="destination">
                <div class="destination-wrapper">
                    <p class="dw-title">Destination</p>
                    <div class="dw-main">
                        <div class="dwm-wrapper">
                            <div class="dwmw-left">
                                <img src="./img/country1.png">
                                <div class="dwmw-info">
                                    <p>Malaysia</p>
                                    <a href="./tours.html">16 Tours</a>
                                </div>
                            </div>
                            <div class="dwmw-right">
                                <div class="dwmwr-wrapper">
                                    <div class="dwmwrw-first">
                                        <img src="./img/country2.png">
                                        <div class="dwmw-info">
                                            <p>Dubai</p>
                                            <a href="#!">16 Tours</a>
                                        </div>
                                    </div>
                                    <div class="dwmwrw-second">
                                        <img src="./img/country3.png">
                                        <div class="dwmw-info">
                                            <p>Greece</p>
                                            <a href="#!">16 Tours</a>
                                        </div>
                                    </div>
                                    <div class="dwmwrw-third">
                                        <img src="./img/country4.png">
                                        <div class="dwmw-info">
                                            <p>Singapore</p>
                                            <a href="#!">16 Tours</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="./view_country/view_all.php" class="dwm-view">View More</a>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-activity">
            <section class="activity">
                <div class="activity-wrapper">
                    <div class="aw-title">
                        <p>activity</p>
                    </div>
                    <div class="aw-subtitle">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                    <div class="aw-activities">
                        <div class="awa-block">
                            <i class="fa-solid fa-user-ninja fa-10x"></i>
                            <p class="awab-title">Adventure</p>
                            <p class="awab-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-solid fa-campground fa-10x"></i>
                            <p class="awab-title">Camping</p>
                            <p class="awab-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-solid fa-person-walking fa-10x"></i>
                            <p class="awab-title">Trekking</p>
                            <p class="awab-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-solid fa-truck-monster fa-10x"></i>
                            <p class="awab-title">Off Road</p>
                            <p class="awab-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-brands fa-free-code-camp fa-10x"></i>
                            <p class="awab-title">Camp Fire</p>
                            <p class="awab-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                        <div class="awa-block">
                            <i class="fa-regular fa-calendar-xmark fa-10x"></i>
                            <p class="awab-title">Expiring</p>
                            <p class="awab-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-tour-packages">
            <section class="tour-packages">
                <div class="tp-wrapper">
                    <div class="tw-title">
                        <p>tour packages</p>
                    </div>
                    <div class="tp-subtitle">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                    <div class="tp-info">
                        <div class="tpi-wrapper">
                            <div class="tpiw-block">
                                <?php 
                                $sel_tour = mysqli_query($link, "SELECT * FROM `tours` ORDER BY `id` DESC");
                                $sel_tour = mysqli_fetch_all($sel_tour);

                                // $sel_count = mysqli_query($link, "SELECT * FROM `country` WHERE `id` = '$idcount'");
                                // $sel_count = mysqli_fetch_assoc($sel_count);
                                
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
                        <p>Shared photos</p>
                    </div>
                    <div class="pw-subtitle">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
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