<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="nav__li"><a href="<?=$arItem["LINK"]?>" class="selected nav__link"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="nav__li"><a href="<?=$arItem["LINK"]?>" class="nav__link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>


<?endif?>