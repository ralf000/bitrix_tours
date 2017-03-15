<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <?php $cols = array_chunk($arResult, 5); ?>
    <ul class="footer-menu">
        <?php foreach ($cols as $col): ?>
            <li>
                <ul>
                    <?
                    foreach ($col as $arItem):
                        if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                            continue;
                        ?>
                        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>

                    <? endforeach ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
<? endif ?>