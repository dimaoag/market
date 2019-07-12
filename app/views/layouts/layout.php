<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <base href="/">

    <?= $this->getMeta(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#fc7700">
    <!-- Custom Browsers Color End -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fc7700">


    <!--Style-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header class="header-site">
    <div class="container d-flex">
        <div class="logo-wrapper">
            <a href="/">
                <img src="img/logo.svg" alt="Логотип Сайта">
            </a>
        </div>
        <div class="main-menu">
            <ul class="main-menu-list list-reset d-flex">
                <li class="main-menu-item">
                    <a href="#order-room-anchor" class="main-menu-link anchor">Выбор помещения</a>
                </li>
                <li class="main-menu-item">
                    <a href="#question" class="main-menu-link anchor">Остались вопросы?</a>
                </li>
                <li class="main-menu-item">
                    <a href="#map" class="main-menu-link anchor">Контакты</a>
                </li>
            </ul>
        </div>
        <div class="phone-collection">
            <div class="phone-call-back">
                <ul class="phone-call-back-main-list list-reset">
                    <li class="phone-call-back-drop">
                        <a href="tel:0445995038">(044) 599-50-38</a>
                        <ul class="phone-list list-reset">
                            <li class="phone-item">
                                <a href="tel:0445995038">(044) 599-50-38</a>
                            </li>
                            <li class="phone-item">
                                <a href="tel:0505072760">(050) 507-27-60</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

    <main>
        <?= $content; ?>
    </main>

    <footer class="site-footer">
        <section class="map d-flex" id="map">
            <div class="map-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.7289554546073!2d30.414150015943882!3d50.446149095555555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc14c8e5c76f%3A0xb81a14b818036f38!2z0LHRg9C70YzQstCw0YAg0JLQsNGG0LvQsNCy0LAg0JPQsNCy0LXQu9CwLCA4LCDQmtC40ZfQsiwgMDIwMDA!5e0!3m2!1suk!2sua!4v1561363663109!5m2!1suk!2sua" width="1920" height="731" allowfullscreen></iframe>
                <p class="map-wrapper">
                    <img src="img/map.jpg" width="1920" height="731" alt="Мы находимься по адресу г. Киев, бульвар Вацлава Гавела (Лепсе), 8">
                </p>
            </div>
            <div class="map-right">
                <div class="map-info">
                    <h2 class="h2">Контакты</h2>
                    <p class="map-info-description">Свяжитесь с нами любым удобным для Вас способом</p>
                    <ul class="map-list list-reset">
                        <li>
                            <ul class="map-phone-list list-reset">
                                <li class="map-phone-item">
                                    <p class="map-phone map-content">
                                        <a href="tel:0445995038">(044) 599-50-38</a>
                                    </p>
                                </li>
                                <li class="map-phone-item">
                                    <p class="map-phone map-content">
                                        <a href="tel:0505072760">(050) 507-27-60</a>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p class="map-mail map-content">
                                <a href="mailto:beautifulmebli@gmail.com">beautifulmebli@gmail.com</a>
                            </p>
                        </li>
                        <li>
                            <p class="map-address map-content">г. Киев, бульвар Вацлава Гавела (Лепсе), 8</p>
                        </li>
                        <li>
                            <p class="map-social map-content">
                                <a href="https://www.facebook.com/Beautiful-Mebli-1193250984156950/" class="we-in-facebook">Мы в Facebook</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="container footer-single-container d-flex">
            <div class="footer-menu">
                <ul class="main-menu-list list-reset d-flex">
                    <li class="main-menu-item">
                        <a href="#order-room-anchor" class="main-menu-link anchor">Выбор помещения</a>
                    </li>
                    <li class="main-menu-item">
                        <a href="#question" class="main-menu-link anchor">Остались вопросы?</a>
                    </li>
                </ul>
            </div>
            <div class="footer-social">
                <ul class="footer-social-list list-reset">
                    <li class="footer-social-item">
                        <p class="map-social map-content">
                            <a href="https://www.facebook.com/Beautiful-Mebli-1193250984156950/" class="we-in-facebook">Мы в Facebook</a>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="footer-phone">
                <ul class="footer-phone-list list-reset">
                    <li class="footer-phone-list-item">
                        <a href="tel:0445995038">(044) 599-50-38</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        var path = '<?=PATH;?>';
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/mask.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/common.js"></script>

</body>
</html>

