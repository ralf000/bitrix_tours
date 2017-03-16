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
                <!--Слоган сайта-->
                <div class="sign">
                    <?php
                    $APPLICATION->IncludeFile(
                        '/include/tagline.php',
                        [],
                        ['MODE' => 'php']
                    );
                    ?>
                </div>
                <!--/Слоган сайта-->

            </div>
            <div class="col-sm-4">
                <div class="contacts">
                    <?php
                    $APPLICATION->IncludeFile(
                        '/include/contacts.php',
                        [],
                        ['MODE' => 'php']
                    );
                    ?>
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

        <!-- slider -->
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "tour_slider",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "ID",
                    1 => "DETAIL_PICTURE",
                    2 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "3",
                "IBLOCK_TYPE" => "slider",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "link",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "COMPONENT_TEMPLATE" => "tour_slider"
            ),
            false
        ); ?>
        <!-- /slider -->

        <div class="row">
            <div class="col-md-9">

                <h1 class="txt-title">
                    </span><?php $APPLICATION->ShowTitle(false); ?><span>
                </h1>
						