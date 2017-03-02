<?php
//запрещает обращаться к файлу напрямую (пролог не подключен)
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $APPLICATION->ShowTitle() ?></title>
    <meta name="description" content="">

    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/main.css">
    <?php
    //Ещё один вариант подключения css
    //$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/main.css');
    ?>
    <!--[if IE]>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/ie.css"><![endif]-->
    <!-- / Stylesheets -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <? $APPLICATION->ShowHead(); ?>
</head>
<body>

<!--Панель управления-->
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!--/Панель управления-->

<!-- header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <div class="logo">
                    <!--Выводим лого-->
                    <?php
                    $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'PATH' => '/include/logo.php',
                            'EDIT_TEMPLATE' => ''
                        ]
                    );
                    ?>
                </div>
                <div class="sign">
                    <span class="name">Туристическое агентство</span>
                    путешествуйте с нами по всему миру!
                </div>

            </div>
            <div class="col-sm-4">
                <div class="contacts">
							<span class="phone">
								<span>+7 4912</span> 56 78 90
							</span>
							<span class="graph">
								10:00 - 20:00
							</span>
                </div>
                <div class="user-box">
                    <a href="#" class="enter">Войти на сайт</a>
                    <!-- <span class="user-name">Тинаева Люба</span> -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /header -->

<!-- nav -->
<nav class="nav">
    <div class="container">
        <div class="box-btn">
            <a href="#" class="toggle-menu">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <ul class="menu">
            <li><a class="act" href="#">Главная</a></li>
            <li class="dd"><a href="#">Об агентстве</a>
                <ul>
                    <li><a href="#">История</a></li>
                </ul>
            </li>
            <li class="dd"><a href="#">Новости и акции</a>
                <ul>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Акции</a></li>
                </ul>
            </li>
            <li class="dd"><a href="#">Подбор тура</a>
                <ul>
                    <li><a href="#">Турция</a></li>
                    <li><a href="#">Египет</a></li>
                    <li><a href="#">Таиланд</a></li>
                    <li><a href="#">Индия</a></li>
                    <li><a href="#">Греция</a></li>
                    <li><a href="#">Канарские острова</a></li>
                    <li><a href="#">Чехия</a></li>
                    <li><a href="#">Болгария</a></li>
                    <li><a href="#">Вьетнам</a></li>
                </ul>
            </li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
</nav>
<!-- /nav -->

<!-- content -->
<div class="content">
    <div class="container staff">

        <!-- slider -->
        <ul class="head-slider">
            <li><img src="<?= SITE_TEMPLATE_PATH ?>/img/slider-photo/unsplash_52d5c05422a47_1.JPG"></li>
            <li><img src="<?= SITE_TEMPLATE_PATH ?>/img/slider-photo/unsplash_52cb185a63c25_1.JPG"></li>
            <li><img src="<?= SITE_TEMPLATE_PATH ?>/img/slider-photo/unsplash_52d5bbef8a613_1.JPG"></li>
        </ul>
        <!-- /slider -->

        <div class="row">
            <div class="col-md-9">

                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <!-- <li><a href="#">Path</a></li>
                        <li><a href="#">Path</a></li> -->
                    </ul>
                </div>

                <h1 class="txt-title">
                    </span><?php $APPLICATION->ShowTitle(false); ?><span>
                </h1>
						