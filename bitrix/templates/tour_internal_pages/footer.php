<?php
//запрещает обращаться к файлу напрямую (пролог не подключен)
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
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
                <div class="search-box">
                    <form action="#">
                        <input type="text" placeholder="Поиск...">
                        <div class="s-buttom">
                            <input type="submit" value="">
                        </div>
                    </form>
                </div>
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