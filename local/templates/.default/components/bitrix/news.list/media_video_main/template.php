<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="main-media-video__top">
    <div class="main-media-info main-media-info--video">
        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/svg/media-video.svg" alt="Видео"
             class="main-media-info__icon svg-inject-me">
        <h4 class="main-media-info__title">Видео</h4>
        <button type="button" class="main-media-info__all-btn" data-fancybox
                data-src="#slider-media--video">
            <span>Все видео</span>
            <span class="main-media-info__all-btn-icon">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </span>
        </button>
    </div>
    <div class="main-media-video__play">
        <a href="javascript:;" data-fancybox data-src="#slider-media--video"
           class="main-media-video__photo"
           style="background-image: url(<?= $arResult["ITEMS"][0]["PREVIEW_PICTURE"]["SRC"] ?>);">
            <button type="button" class="media-round-video">
                <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
            </button>
        </a>
    </div>
</div>
<div class="main-media-video__bottom">
    <a href="javascript:;" data-fancybox data-src="#slider-media--video"
       class="main-media-video__photo"
       style="background-image: url(<?= $arResult["ITEMS"][1]["PREVIEW_PICTURE"]["SRC"] ?>);">
        <button type="button" class="media-round-video">
            <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
        </button>
    </a>
</div>


