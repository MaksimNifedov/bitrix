<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="main-media-photo__left">
    <div class="main-media-info main-media-info--photo">
        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/media-photo.svg" alt="Видео"
             class="main-media-info__icon svg-inject-me">
        <h4 class="main-media-info__title">Фото</h4>
        <button type="button" class="main-media-info__all-btn" data-fancybox data-src="#slider-media--photo">
            <span>Все фото</span>
            <span class="main-media-info__all-btn-icon">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
        </button>
    </div>
    <a href="#" class="main-media-photo__picture" data-fancybox data-src="#slider-media--photo"
       style="background-image: url(<?= $arResult["ITEMS"][1]["PREVIEW_PICTURE"]["SRC"] ?>)"></a>
</div>
<div class="main-media-photo__right">
    <a href="#" class="main-media-photo__top main-media-photo__picture" data-fancybox
       data-src="#slider-media--photo"
       style="background-image: url(<?= $arResult["ITEMS"][2]["PREVIEW_PICTURE"]["SRC"] ?>)"></a>
    <div class="main-media-photo__bottom">
        <a href="#" class="main-media-photo__picture" data-fancybox data-src="#slider-media--photo"
           style="background-image: url(<?= $arResult["ITEMS"][2]["PREVIEW_PICTURE"]["SRC"] ?>)"></a>
        <a href="#" class="main-media-photo__picture" data-fancybox data-src="#slider-media--photo"
           style="background-image: url(<?= $arResult["ITEMS"][0]["PREVIEW_PICTURE"]["SRC"] ?>"></a>
    </div>
</div>


