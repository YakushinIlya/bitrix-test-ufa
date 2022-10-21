<?php

namespace elements;

use \Bitrix\Highloadblock as HL;

class BXiblockElementFilterData
{
    public array $list_parent = [];

    public function setSection($IBLOCK_ID, $SECTION_ID, $arFields)
    {
        if(!\Bitrix\Main\Loader::includeModule('iblock') ) return;

        $uf_link_to = \CIBlockSection::GetList(array(), array('IBLOCK_ID' => $IBLOCK_ID, 'ID' => $SECTION_ID),
            true, array("UF_LINK_TO"));
        $ar_uf_link_to = $uf_link_to->GetNext(); // Получаем привязку раздела к разделам каталога

        foreach($ar_uf_link_to['UF_LINK_TO'] as $v) { // Получаем родительские разделы
            $this->list_parent[$v] = \CIBlockSection::GetNavChain(false, $v, ['ID', 'NAME'], true);
        }

        foreach($arFields["PROPERTY_VALUES"][5] as $v) {
            $brand = $v;
        }
        \CModule::IncludeModule('highloadblock');
        $hlblock = HL\HighloadBlockTable::getById(3)->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entityClass = $entity->getDataClass();
        $res = $entityClass::getList(array(
            'select' => array('UF_NAME'),
            'filter' => array('UF_XML_ID' => $brand["VALUE"])
        ));
        $hl_data = $res->fetch(); // Получаем название бренда товара

        foreach($this->list_parent as $k => $arr_section) { // Перебираем все что получили выше
            foreach($arr_section as $item_section) {
                if($item_section["NAME"]==$hl_data["UF_NAME"]) {
                    // Если бренд товара по названию схож с разделом то добавляем ID нового раздела
                    array_push($arFields["IBLOCK_SECTION"], $k);
                    return $arFields["IBLOCK_SECTION"];
                }
            }
        }


        $arFields["IBLOCK_SECTION"] = array_unique(array_map("intval", array_merge($arFields["IBLOCK_SECTION"], $ar_uf_link_to['UF_LINK_TO'])));

        return $arFields["IBLOCK_SECTION"];
    }
}