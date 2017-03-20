<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['ITEMS'] as $key => $arItem) {

    $arResult['ITEMS'][$key]['link'] = $arItem['PROPERTIES']['link']['VALUE'];

    $arResult['ITEMS'][$key]['linkTarget'] = '_self';
    if (($arItem['PROPERTIES']['target']['VALUE_XML_ID'] === 'id_yes'))
        $arResult['ITEMS'][$key]['linkTarget'] = '_blank';
}