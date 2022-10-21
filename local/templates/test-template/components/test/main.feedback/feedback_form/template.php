<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <div class="row">
        <div class="col order__col-left">
            <h6 class="order__title">Мы эксперты в недвижимости и даем вам дополнительную страховку.</h6>
            <div class="order__text">
                <p>Если в течение 3-х лет по нашей вине возникнут проблемы по сделке, мы вернем вам сумму договора в ДВОЙНОМ размере!</p>
            </div>
        </div>
        <div class="col order__col-right">
            <div class="form__box-input">
                <input class="form__input" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>"<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
            </div>
            <div class="form__box-input">
                <input class="form__input" type="tel" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>" placeholder="Телефон<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>" title="89012345678"<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
            </div>
            <div class="form__box-textarea">
                <textarea class="form__textarea" name="MESSAGE" placeholder="<?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>"></textarea>
            </div>
        </div>
    </div>
    <div class="row align-items-end">
        <div class="col order__col-email"><a class="order__email" href="mailto:info@opti24.ru" target="_blank">info@opti24.ru</a></div>
        <div class="col order__col-perconal form__perconal">
            <p>Отправляя заявку, вы даете согласие на <a href="#">обработку своих персональных данных</a></p>
        </div>
        <div class="col order__col-right">
            <div class="form__box-submit">
                <button class="btn1 btn1_light btn1_h" type="submit">Получить бесплатную консультацию</button>
            </div>
        </div>
    </div>
</form>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>
