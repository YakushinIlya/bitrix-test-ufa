<!--  ORDER 1  -->
<section class="section section_blue order order-1">
    <div class="container">
        <div class="order__head">
            <div class="order__head-icon">
                <svg role="<?=SITE_TEMPLATE_PATH?>/img">
                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/svg/sprite.svg#insurance"></use>
                </svg>
            </div>
            <h2 class="desc-2">Каждая сделка застрахована!</h2>
        </div>
        <div class="order__wrap form">
            <?$APPLICATION->IncludeComponent(
                "test:main.feedback",
                "feedback_form",
                Array()
            );?>
        </div>
    </div>
    <div class="order__pic">
        <picture>
            <source srcset="<?=SITE_TEMPLATE_PATH?>/img/doc-1-small.png 1x, img/doc-1@2x.png 2x" media="(max-width:992px)">
            <source srcset="<?=SITE_TEMPLATE_PATH?>/img/doc-1.png"><img src="<?=SITE_TEMPLATE_PATH?>/img/doc-1.png" alt="Каждая сделка застрахована!">
        </picture>
    </div>
</section>
<!--  /ORDER 1  -->