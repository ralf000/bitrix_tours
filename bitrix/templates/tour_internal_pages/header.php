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
                <? $APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "tour_auth",
                    array(
                        "FORGOT_PASSWORD_URL" => "",
                        "PROFILE_URL" => "",
                        "REGISTER_URL" => "/registration",
                        "SHOW_ERRORS" => "N",
                        "COMPONENT_TEMPLATE" => "tour_auth"
                    ),
                    false
                ); ?>
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

        <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"tour_menu_horizontal_multilevel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "tour_menu_horizontal_multilevel"
	),
	false
); ?>
    </div>
</nav>
<!-- /nav -->

<!-- content -->
<div class="content">
    <div class="container staff">

        <div class="row">
            <div class="col-md-9">

                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "tour_breadcrumb",
                    array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0",
                        "COMPONENT_TEMPLATE" => "tour_breadcrumb"
                    ),
                    false
                ); ?>

                <h1 class="txt-title">
                    </span><?php $APPLICATION->ShowTitle(false); ?><span>
                </h1>
						