<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php
use Bitrix\Main\Page\Asset;
$assets = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta charset="<?=LANG_CHARSET?>">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$assets->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');?>
    <?$APPLICATION->ShowMeta("keywords");?>
    <?$APPLICATION->ShowMeta("description");?>
    <?$assets->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');?>
    <?$assets->addString('<meta name="format-detection" content="telephone=no">');?>
    <?$assets->addString('<meta name="robots" content="nofollow,noindex">');?>
    <?$assets->addString('<link rel="shortcut icon" href="'.SITE_TEMPLATE_PATH.'/img/favicon.png" type="image/png">');?>
    <!--[if IE]>
    <?$assets->addJs("https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js");?>
    <?$assets->addJs("https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js");?>
    <![endif]-->
    <?$assets->addCss(SITE_TEMPLATE_PATH."/css/libs.min.css");?>
    <?$assets->addCss(SITE_TEMPLATE_PATH."/css/style.css");?>
    <?$APPLICATION->ShowHead()?>
</head>
<body>

<?$APPLICATION->ShowPanel();?>

<style>
    .aside {
        position: fixed;
        z-index: 500;
        width: 100%;
        left: 0;
        top: 0;
        padding: 0;
        transition: .8s;
        -webkit-transform: translateY(-110%);
        -ms-transform: translateY(-110%);
        transform: translateY(-110%);
        opacity: 0;
    }

</style>
<!--  ЗАЛИПАЮЩЕЕ МЕНЮ  -->
<aside class="aside nav" id="aside">
    <div class="aside__wrap">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="logo"><a href="/"><img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="OPTI"></a></div>
                <ul class="nav__menu">
                    <!--<li class="nav__li"><a class="nav__link" href="services-online.html">Онлайн услуги</a>
                        <ul class="nav__submenu">
                            <li class="nav__li"><a class="nav__link" href="services-1.html">Сопровождение при покупке недвижимости</a>
                                <ul class="nav__submenu">
                                    <li class="nav__li"><a class="nav__link" href="#">Сопровождение при покупке вторичного жилья</a></li>
                                    <li class="nav__li"><a class="nav__link" href="#">Сопровождение при покупке строящего жилья</a></li>
                                    <li class="nav__li"><a class="nav__link" href="services-2.html">Сопровождение при покупке с использованием кредитных средств (Ипотека)</a></li>
                                    <li class="nav__li"><a class="nav__link" href="#">Сопровождение при покупке жилья с одновременной продажей объекта недвижимости (Альтернативная сделка)</a></li>
                                </ul>
                            </li>
                            <li class="nav__li"><a class="nav__link" href="#">Сопровождение при продаже недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Сопровождение при аренде недвижимости</a></li>
                        </ul>
                    </li>
                    <li class="nav__li"><a class="nav__link" href="services-free.html">Бесплатные услуги</a>
                        <ul class="nav__submenu nav__submenu-2">
                            <li class="nav__li"><a class="nav__link" href="#">Сопровождение при аренде недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Пошаговая инструкция «Как продать квартиру без риэлтера»</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Онлайн консультация эксперта в сфере недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора купли продажи объекта недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора купли продажи объекта недвижимости с использованием кредитных средств</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора дарения на объект недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора купли продажи доли объекта недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора мены объекта недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора ренты</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора дарения объекта недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора аванса/задатка объекта недвижимости</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец расписки на денежные средства</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец обязательства на разницу в расписке</a></li>
                            <li class="nav__li"><a class="nav__link" href="#">Образец договора найма жилого помещения</a></li>
                        </ul>
                    </li>
                    <li class="nav__li"><a class="nav__link" href="price-list.html">Прайс-лист</a></li>
                    <li class="nav__li"><a class="nav__link" href="news.html">Новости</a></li>
                    <li class="nav__li"><a class="nav__link" href="about.html">О нас</a></li>
                    <li class="nav__li"><a class="nav__link" href="contacts.html">Контакты</a></li>
                --></ul><a class="nav__cart" href="cart.html">
                    <svg role="img">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#buy"></use>
                    </svg><span class="nav__cart-count">(0)</span></a>
                <button class="nav__burger"><span></span><span></span><span></span></button>
            </div>
        </div>
    </div>
    <div class="aside__cart">
        <div class="aside__cart-title"><span class="aside__cart-name">Услуга</span> добавлена в корзину</div>
    </div>
</aside>
<!--  /ЗАЛИПАЮЩЕЕ МЕНЮ  -->
<!--  Шапка  -->
<header class="header">
    <div class="container">
        <div class="header__row">
            <div class="header__left">
                <h2 class="header__desc">ЭКСПЕРТНАЯ ПОМОЩЬ В<br>СФЕРЕ НЕДВИЖИМОСТИ</h2>
                <h5 class="header__subdesc">Круглосуточно. Онлайн. <span class="d-ib">Гарантии по договору.</span></h5>
            </div>
            <div class="header__center">
                <div class="logo"><a href="/"><img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="OPTI"></a></div>
                <div class="header__time-work d-md-block">
                    <svg role="img">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#clock-2"></use>
                    </svg> Круглосуточно 24/7
                </div>
            </div>
            <div class="header__right">
                <div class="phone"><a class="phone__link" href="tel:88000000000">8 (800) <strong>000 00 00</strong></a><a class="btn1 phone__btn" href="#modal-call">
                        <svg role="img">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#call-answer"></use>
                        </svg><span>Заказать звонок</span></a></div>
                <div class="header__time-work d-block d-md-none">
                    <svg role="img">
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#clock-2"></use>
                    </svg> Круглосуточно 24/7
                </div>
            </div>
        </div>
    </div>
</header>
<!--  /Шапка  -->
<!--  Навигация  -->
<nav class="nav" id="top-menu">
    <div class="container">
        <div class="nav__row">
            <ul class="nav__menu">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
            </ul><a class="nav__cart" href="cart.html">
                <svg role="img">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#buy"></use>
                </svg><span class="nav__cart-text">Корзина </span><span class="nav__cart-count">(0)</span></a>
            <button class="nav__burger"><span></span><span></span><span></span></button>
        </div>
    </div>
</nav>
<!--  /Навигация  -->

<div class="main-page margin-0">

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_TEMPLATE_PATH."/include/sect1.php",
        "EDIT_TEMPLATE" => ""
    )
);?>
