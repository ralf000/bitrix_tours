<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="green-box">
    <div class="title">
        <h2>
            <a href="<?= $arResult['LIST_PAGE_URL'] ?>">
                <?= $arResult['NAME'] ?>
            </a>
        </h2>
    </div>
    <div class="cnt">
        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <? endif; ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                    <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                        <div class="preview">
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img
                                    src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                    title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                /></a>
                        </div>
                    <? endif; ?>
                <? endif ?>
                <div class="n-staff">
                    <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                        <span class="date"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
                    <? endif ?>
                    <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                        <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                            <h3>
                                <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a>
                            </h3>
                        <? else: ?>
                            <h3><? echo $arItem["NAME"] ?></h3>
                        <? endif; ?>
                    <? endif; ?>
                    <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                        <p class="txt">
                            <? echo $arItem["PREVIEW_TEXT"]; ?>
                        </p>
                    <? endif; ?>
                    <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                        <div style="clear:both"></div>
                    <? endif ?>
                    <? foreach ($arItem["FIELDS"] as $code => $value): ?>
                        <small>
                            <?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
                        </small><br/>
                    <? endforeach; ?>
                    <? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
                        <small>
                            <?= $arProperty["NAME"] ?>:&nbsp;
                            <? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
                                <?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
                            <? else: ?>
                                <?= $arProperty["DISPLAY_VALUE"]; ?>
                            <? endif ?>
                        </small><br/>
                    <? endforeach; ?>
                    <div class="more-btn-box">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="link">Подробнее</a>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <? endif; ?>
    </div>
</div>
