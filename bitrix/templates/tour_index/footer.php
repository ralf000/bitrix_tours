<?php
//запрещает обращаться к файлу напрямую (пролог не подключен)
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<div class="row">
    <div class="col-sm-6">

        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "tour_news_index",
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
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "4",
                "IBLOCK_TYPE" => "news",
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
                    0 => "",
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
                "COMPONENT_TEMPLATE" => "tour_news_index"
            ),
            false
        ); ?>

    </div>
    <div class="col-sm-6">

        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "tour_news_index",
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
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "5",
                "IBLOCK_TYPE" => "news",
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
                    0 => "",
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
                "COMPONENT_TEMPLATE" => "tour_news_index"
            ),
            false
        ); ?>

    </div>
</div>
</div>
<div class="col-md-3">

    <div class="sidebar">
        <div class="side-tit">
            <a href="#">Горящие туры</a>
        </div>
        <ul class="items">
            <li><a href="#">Турция, Анталия, ADELA HOTEL 4 *, всё включено, 12 ноября</a></li>
            <li><a href="#">Турция, Кемер, AKKA CLAROS HOTEL 4 *, всё включено, 10 ноября</a></li>
            <li><a href="#">Кипр, Айя-Напа, AMALTHIA VILLAS Villa, только завтрак, 1 ноября</a></li>
            <li><a href="#">Кипр, Айя-Напа, AMALTHIA VILLAS Villa, только завтрак, 7 ноября</a></li>
            <li><a href="#">Таиланд, Паттайя, A-ONE PATTAYA BEACH RESORT 4 *, всё включено, 15 ноября</a></li>
            <li><a href="#">Таиланд, Пхукет, ALEENTA RESORT & SPA PHUKET 5 *, всё включено, 10 ноября</a></li>
            <li><a href="#">Таиланд, Пхукет, AMARI PHUKET 4 *, всё включено, 9 ноября</a></li>
            <li><a href="#">Таиланд, Пхукет, AMARI WATERGATE 5 *, всё включено, 9 ноября</a></li>
            <li><a href="#">Таиланд, Самуи+Бангкок, BAAN HAAD NGAM 4 *, завтрак + обед, 1 ноября</a></li>
        </ul>
    </div>

</div>
</div>
</div>
<!-- counter -->
<div class="counter">
    <div class="container">
        <span class="sign">Наши клиенты:</span>
        <span class="num">6 523</span>
    </div>
</div>
<!-- /counter -->
</div>
<!-- /content -->

<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-lg-8">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "bottom_menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "bottom",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "bottom_menu"
                    ),
                    false
                ); ?>
            </div>
            <div class="col-sm-5 col-lg-4">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "",
                    Array(
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "Y"
                    )
                );?>
                <!--<div class="search-box">
                    <form action="#">
                        <input type="text" placeholder="Поиск...">
                        <div class="s-buttom">
                            <input type="submit" value="">
                        </div>
                    </form>
                </div>-->
                <ul class="social-links">
                    <?php
                    $APPLICATION->IncludeFile(
                        '/include/social.php',
                        [],
                        ['MODE' => 'php']
                    );
                    ?>
                </ul>
            </div>
        </div>
        <div class="copy">
            <?php
            $APPLICATION->IncludeFile(
                '/include/copyright.php',
                [],
                ['MODE' => 'php']
            );
            ?>
        </div>
    </div>
</footer>
<!-- /footer -->

<!-- Javascripts -->
<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery-2.1.0.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.bxslider.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/main.js"></script>
<!-- / Javascripts -->
</body>
</html>