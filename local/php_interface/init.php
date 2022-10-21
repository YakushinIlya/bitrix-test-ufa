<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/autoload.php');

/*
 * Добавление новых разделов к товару по условиям бренда
 * */
AddEventHandler("iblock", "OnAfterIBlockElementUpdate", "OnAfterIBlockElementUpdateHandler");
function OnAfterIBlockElementUpdateHandler($arFields) {
    $object = new elements\BXiblockElementFilterData();
    $arFields["IBLOCK_SECTION"] = $object->setSection(2, $arFields["IBLOCK_SECTION"], $arFields);
    $el = new \CIBlockElement();
    $el->SetElementSection($arFields["ID"], $arFields["IBLOCK_SECTION"]);
}

