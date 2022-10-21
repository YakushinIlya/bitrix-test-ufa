<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<!--  NEWS  -->
<section class="section news">
    <div class="container">
        <div class="row align-items-center news__head">
            <div class="col col-12 col-md-8">
                <h2 class="desc-2">Новости</h2>
            </div>
            <div class="col col-12 col-md-4">
                <div class="news__box-link"><a class="news__link" href="/news/"><span>Читать все новости</span>
                        <svg role="img">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#arrow-right"></use>
                        </svg></a></div>
            </div>
        </div>
        <div class="row justify-content-between">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col col-12 col-xl-6 news__item">
                    <div class="news__card">
                        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                            <a class="news__pic" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="200px" height="305px" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
                            </a>
                        <?endif?>
                        <div class="news__box">
                            <div class="news__date"><?=$arItem['DISPLAY_ACTIVE_FROM']?></div><a class="news__title" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                            <div class="news__desc"><?=$arItem['PREVIEW_TEXT']?></div>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
<!--  /NEWS  -->

