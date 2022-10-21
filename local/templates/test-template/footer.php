<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php
use Bitrix\Main\Page\Asset;
$assets = Asset::getInstance();
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_TEMPLATE_PATH."/include/sect6.php",
        "EDIT_TEMPLATE" => ""
    )
);?>

</div>
<!--  Подвал  -->
<footer class="footer">
    <div class="container">
        <div class="row footer__row">
            <div class="footer__col footer__col-1">
                <div class="footer__copyright">&copy; "ПУТЕВОДНАЯ ЗВЕЗДА города"/ <span class="d-ib">LLC "LODESTAR-CITY"</span></div>
                <div class="footer__desc">OPTI24 - гарантированное решение вопросов с недвижимостью за реальную стоимость и сроки. Вы получаете гарантированный результат по договору и уверенность в чистоте вашей сделки.</div>
            </div>
            <div class="footer__col footer__col-2">
                <ul class="footer__nav">
                    <li><a class="footer__nav-link" href="#">
                            <svg role="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#sign-right"></use>
                            </svg><span>Сделки по недвижимости самостоятельно</span></a></li>
                    <li><a class="footer__nav-link" href="#">
                            <svg role="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#sign-right"></use>
                            </svg><span>Сделки по недвижимости с экспертом</span></a></li>
                    <li><a class="footer__nav-link" href="#">
                            <svg role="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#sign-right"></use>
                            </svg><span>Полезные материалы</span></a></li>
                    <li><a class="footer__nav-link" href="#">
                            <svg role="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#sign-right"></use>
                            </svg><span>Вопросы и ответы</span></a></li>
                    <li><a class="footer__nav-link" href="#">
                            <svg role="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#sign-right"></use>
                            </svg><span>О нас</span></a></li>
                    <li><a class="footer__nav-link" href="#">
                            <svg role="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#sign-right"></use>
                            </svg><span>Контакты</span></a></li>
                </ul>
            </div>
            <div class="footer__col footer__col-3">
                <div class="socials">
                    <div class="socials__title">Мы в соцсетях:</div>
                    <ul class="socials__list">
                        <li><a class="socials__link socials_vk" href="#" target="_blank">
                                <svg role="img">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#vk"></use>
                                </svg><span>VK</span></a></li>
                        <li><a class="socials__link socials_fb" href="#" target="_blank">
                                <svg role="img">
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#fb"></use>
                                </svg><span>Facebook</span></a></li>
                        <li><a class="socials__link socials_inst" href="#" target="_blank">
                                <svg role="img">
                                    <linearGradient id="gradient-inst" x1="0" y1="100%" x2="100%" y2="0"><stop offset="0%" class="" stop-color="#f40000"/><stop offset="100%" class="" stop-color="#b900b2"/></linearGradient>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#inst"/>
                                </svg><span>Instagram</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__col footer__col-4">
                <div class="footer__box-email">
                    <div class="email"><a class="email__link" href="mailto:info@opti24.ru" target="_blank">
                            <svg role="img">
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#envelope"></use>
                            </svg><span>info@opti24.ru</span></a></div>
                </div>
                <div class="phone"><a class="phone__link" href="tel:88000000000">8 (800) <strong>000 00 00</strong></a><a class="btn1 phone__btn" href="#modal-call">
                        <svg role="img">
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#call-answer"></use>
                        </svg><span>Заказать звонок</span></a></div><a href="#" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo-efectum.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<!--  /Подвал  -->
<!--  Модальное окно Получить консультацию  -->
<div class="modal lity-hide" id="modal-consult">
    <div class="modal__wrap">
        <button class="modal__close" data-lity-close>
            <svg role="img">
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#close"></use>
            </svg>
        </button>
        <div class="form form__modal">
            <h3 class="form__desc">Получить профессиональную консультацию</h3>
            <div class="form__subdesc">Заполните форму, и в течение <strong>10 минут</strong> наш специалист свяжется с вами и ответит на все интересующие вопросы.</div>
            <form class="form-box" action="send.php" method="post">
                <div class="form__box-input">
                    <input class="form__input" type="text" name="name" placeholder="Введите имя">
                </div>
                <div class="form__box-input">
                    <input class="form__input" type="tel" name="phone" placeholder="Введите номер телефона*" title="89012345678" required>
                </div>
                <div class="form__perconal">
                    <p>Отправляя заявку, вы даете согласие на <a href="#">обработку своих персональных данных</a></p>
                </div>
                <div class="form__box-submit">
                    <button class="btn1 btn1_light form__submit" type="submit" name="submit">Получить консультацию</button>
                    <input type="hidden" name="title" value="Получить консультацию">
                </div>
            </form>
        </div>
    </div>
</div>
<!--  /Модальное окно Получить консультацию  -->
<!--  Модальное окно Заказать звонок  -->
<div class="modal lity-hide" id="modal-call">
    <div class="modal__wrap">
        <button class="modal__close" data-lity-close>
            <svg role="img">
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#close"></use>
            </svg>
        </button>
        <div class="form form__modal">
            <h3 class="form__desc">Получить консультацию специалиста</h3>
            <div class="form__subdesc">Введите свои контактные данные, и в течение <strong>10 минут</strong> наш специалист перезвонит вам.</div>
            <form class="form-box" action="send.php" method="post">
                <div class="form__box-input">
                    <input class="form__input" type="text" name="name" placeholder="Введите имя">
                </div>
                <div class="form__box-input">
                    <input class="form__input" type="tel" name="phone" placeholder="Введите номер телефона*" title="89012345678" required>
                </div>
                <div class="form__perconal">
                    <p>Отправляя заявку, вы даете согласие на <a href="#">обработку своих персональных данных</a></p>
                </div>
                <div class="form__box-submit">
                    <button class="btn1 btn1_light form__submit" type="submit" name="submit">Заказать звонок</button>
                    <input type="hidden" name="title" value="Заказать звонок">
                </div>
            </form>
        </div>
    </div>
</div>
<!--  /Модальное окно Заказать звонок  -->
<!--  Модальное окно Заявка отправлена  -->
<div class="modal lity-hide" id="modal-thanks">
    <div class="modal__wrap">
        <button class="modal__close" data-lity-close>
            <svg role="img">
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#close"></use>
            </svg>
        </button>
        <h3 class="form__desc">Заявка отправлена</h3>
        <h5 class="form__subdesc">Мы свяжемся с Вами в ближайшее время</h5>
    </div>
</div>
<!--  /Модальное окно Заявка отправлена  -->
<?$assets->addJs("https://code.jquery.com/jquery-3.4.1.min.js");?>
<?$assets->addJs(SITE_TEMPLATE_PATH."/js/libs.min.js");?>
<?$assets->addJs(SITE_TEMPLATE_PATH."/js/custom.js");?>
</body>
</html>
