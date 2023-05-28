<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<
<div class="slider-media__content">
    <h5 class="slider-media__title">Видео</h5>
    <button data-fancybox-close class="slider-media__close"></button>
    <div class="slider-media__wrapp">
        <div class="slider-media__big">
            <?php foreach ($arResult["ITEMS"] as $arItem) {
                $video = $arItem['PROPERTIES']['VIDEO']['VALUE'];
                if ($video) {
                    $path = parse_url($video, PHP_URL_PATH);
                    $src = '/upload' . $path;
                }
                ?>
                <div class="slider-media__item">

                    <video controls poster="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>"
                           preload="none">
                        <source src="<?= $src ?>">
                    </video>
                </div>
            <?php } ?>

        </div>
        <div class="slider-media__thumbnails">
            <?php foreach ($arResult["ITEMS"] as $arItem) {
            $video = $arItem['PROPERTIES']['VIDEO']['VALUE'];
            if ($video) {
                $path = parse_url($video, PHP_URL_PATH);
                $src = '/upload' . $path;
            } ?>
            <div class="slider-media__item">
                <div class="slider-media__thumbnail">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>" alt="">
                    <button type="button" class="media-round-video">
                        <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>
        <button type="submit" class="slider-media__btn slider-media__btn--right">
            <i class="fa fa-angle-right"></i>
        </button>
        <button type="submit" class="slider-media__btn slider-media__btn--left">
            <i class="fa fa-angle-left"></i>
        </button>
    </div>
</div>


