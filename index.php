<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 28.11.2014
 * Time: 10:37
 */

include 'php/models/lang.php';

if(!isset($_COOKIE['lang']))
    $_COOKIE['lang'] = 'ru';

if(!isset($_GET['page']))
    $_GET['page'] = 'main';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="js/bladetm/style/basegallery.css">
    <link rel="stylesheet" href="js/lightbox/css/lightbox.css">
    <link rel="stylesheet" href="css/queryLoader.css">
    <script type="text/javascript" src="js/bladetm/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/bladetm/js/jquery.basegallery.js"></script>
    <script type="text/javascript" src="js/lightbox/js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/queryLoader.js"></script>
    <script type="text/javascript" src="forSubmit.js"></script>
</head>
<body>
    <header>
        <ul class="lang">
            <li><a href="?page=main" id="ru">Ru</a></li>
            <li>/</li>
            <li><a href="?page=main" id="ua">Ua</a></li>
            <li>/</li>
            <li><a href="?page=main" id="en">En</a></li>
        </ul>
        <!--<?php var_dump($_COOKIE['lang']) ?>-->
        <div class="clear"></div>
<?php if ($_COOKIE['lang']=='ua'){
    print '
        <nav>
            <a href="?page=about">Про комапанію</a>
            <a href="?page=services">Послуги</a>
            <a href="?page=technology">Технології</a>
            <a href="?page=main"><img src="images/Logotype.png"></a>
            <a href="?page=news">Новини</a>
            <a href="?page=gallery" class="gallery-in-nav">Фотогалерея</a>
            <ul class="gallery-links ua">
                <li><a href="?page=album&id=25">Декоративна нержавіюча сталь</a></li>
                <li><a href="?page=album&id=25">Проектування та виготовлення накупольних крестів</a></li>
                <li><a href="?page=album&id=27">Проектування та виготовлення куполів</a></li>
                <li><a href="?page=album&id=28">Декоративні елементи з нержавіючої сталі</a></li>
            </ul>
            <a href="?page=contacts">Контакти</a>
        </nav>';}
    elseif ($_COOKIE['lang']=='en'){
    print '
        <nav>
            <a href="?page=about">ABOUT</a>
            <a href="?page=services">SERVICES</a>
            <a href="?page=technology">TECHNOLOGY</a>
            <a href="?page=main"><img src="images/Logotype.png"></a>
            <a href="?page=news">NEWS</a>
            <a href="?page=gallery" class="gallery-in-nav">GALLERY </a>
            <ul class="gallery-links en">
                <li><a href="?page=album&id=25">Decorative stainless steel</a></li>
                <li><a href="?page=album&id=26">Projecting and manufacturing the crosses</a></li>
                <li><a href="?page=album&id=27">Projecting and manufacturing the domes</a></li>
                <li><a href="?page=album&id=28">Decorative elements of stainless steel</a></li>
            </ul>
            <a href="?page=contacts">CONTACTS</a>
        </nav>'; }
 else { print '
        <nav>
            <a href="?page=about">О компании</a>
            <a href="?page=services">Услуги</a>
            <a href="?page=technology">Технологии</a>
            <a href="?page=main"><img src="images/Logotype.png"></a>
            <a href="?page=news">Новости</a>
            <a href="?page=gallery" class="gallery-in-nav">Фотогалерея</a>
            <ul class="gallery-links">
                <li><a href="?page=album&id=25">ДЕКОРАТИВНАЯ НЕРЖАВЕЮЩАЯ СТАЛЬ</a></li>
                <li><a href="?page=album&id=26">ИЗГОТОВЛЕНИЕ НАКУПОЛЬНЫХ КРЕСТОВ</a></li>
                <li><a href="?page=album&id=27">ПРОЕКТИРОВАНИЕ И ИЗГОТОВЛЕНИЕ КУПОЛОВ</a></li>
                <li><a href="?page=album&id=28">ДЕКОРАТИВНЫЕ ЭЛЕМЕНТЫ ИЗ НЕРЖАВЕЮЩЕЙ СТАЛИ</a></li>
            </ul>
            <a href="?page=contacts">Контакты</a>
        </nav>
        ';} ?>
    </header>
    <section>
        <?php
        // вставка выбранной страницы в шаблон
        include 'php/tpl/'.$_GET['page'].'.php';
        ?>
    </section>
</body>
</html>