<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <base href="/">

    <?= $this->getMeta(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="yandex-verification" content="8644cbbf02bca85c" />

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="img/favicon/46x46.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/180x180.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#fff">
    <!-- Custom Browsers Color End -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">

    <!--Style-->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/modal-video.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <?= $content; ?>



    <script>
        var path = '<?=PATH;?>';
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery-modal-video.min.js"></script>
    <script src="js/common.js"></script>

</body>
</html>

