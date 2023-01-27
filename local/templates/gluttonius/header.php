<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$asset=\Bitrix\Main\Page\Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH.'/vendor/bootstrap/css/bootstrap.css');
$asset->addCss(SITE_TEMPLATE_PATH.'/vendor/fontawesome-free/css/all.css');
$asset->addCss(SITE_TEMPLATE_PATH.'/vendor/jquery.fancybox/jquery.fancybox.css');

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?
    $APPLICATION->ShowHead();
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <script src="<?=SITE_TEMPLATE_PATH?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/vendor/jquery.fancybox/jquery.fancybox.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
</head>

<body>
<? $APPLICATION->ShowPanel();?>
<div class="main-wrapper" id="app">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Обжорозаврик <i class="fas fa-dragon"></i></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dinosaurs.html">Динозавры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shelter.html">Приют динозавриков</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-secondary" href="auth.html">Войти</a>
                        <a class="btn btn-outline-secondary" href="register.html">Зарегистрироваться</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="avatar-link nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/images/avartar-dinosaur-100.png"  class="rounded-circle bg-white avatar-img" alt="Аватар">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="#">Личный кабинет</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Выйти</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('/images/banners/dino_banner_1.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Динозавры не игрушки</h3>
                        <hr class="border-light">
                        <div>
                            <p>Эти гигантские животные жили много лет назад. Они были огромные тяжелые и опасные. Их не выводили гулять на поводке, как сейчас. И кормили они себя сами, разрывая все своими острыми зубами. Хорошо, что сейчас они такие лапушки, и прекрасно уживаются дома с нашими котиками <i class="text-danger fas fa-heart"></i></p>

                            <hr class="border-light">
                            <p><a class="btn btn-info" href="dinosaurs.html">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/images/banners/dino_banner_2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Когда у динозаврика режутся зубки</h3>
                        <hr class="border-light">
                        <div>
                            <p>Когда у вашего динозаврика режутся зубки, это очень тяжелый период как для малыша, так и для вас. Убирайте все, что можно грызть. Потому что погрызано будет все. И главное: терпение, терпение и еще раз терпение.</p>

                            <hr class="border-light">
                            <p><a class="btn btn-info" href="blog-post.html">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/images/banners/dino_banner_3.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Хорошего динозавра много не бывает</h3>
                        <hr class="border-light">
                        <div>
                            <p>Для тех кто любит малышей покрупнее. Когда динозаврик обнимает тебя, а не ты его. А также любителям одна лапа здесь, другая там. Приходите к нам в приют и выбирайте друга побольше.</p>

                            <hr class="border-light">
                            <p><a class="btn btn-info" href="shelter.html">Подробнее</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/images/banners/dino_banner_4.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Хищный или травоядный</h3>
                        <hr class="border-light">
                        <div>
                            <p>Вопрос: какого динозаврика взять хищного или травоядного, - самый острый при выборе своего питомца. Как не ошибиться с выбром и взять подходящего для себя малыша, рассказывают эксперты.</p>

                            <hr class="border-light">
                            <p><a class="btn btn-info" href="blog-post.html">Подробнее</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <div class="container">


