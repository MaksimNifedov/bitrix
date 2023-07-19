<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/* @var array $arParams */
/* @var array $arResult */
/* @global CMain $APPLICATION */
/* @global CUser $USER */
/* @global CDatabase $DB */
/* @var CBitrixComponentTemplate $this */
/* @var string $templateName */
/* @var string $templateFile */
/* @var string $templateFolder */
/* @var string $componentPath */
/* @var CBitrixComponent $component */
?>
<div class="slider-media__content">
    <h5 class="slider-media__title">Видео</h5>
    <button data-fancybox-close class="slider-media__close"></button>
    <div class="slider-media__wrapp">
        <div class="slider-media__big">
            <?php foreach ($arResult["ITEMS"] as $arItem) {
                ?>
                <div class="slider-media__item">

                    <video src="<?= $arItem['PROPERTY_VIDEO_VALUE']['path'] ?>" controls
                           poster="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>"
                           preload="none">
                        <source src="<?= $arItem['PROPERTY_VIDEO_VALUE']['path'] ?>">
                    </video>
                </div>
            <?php } ?>

        </div>
        <div class="slider-media__thumbnails">
            <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
                <div class="slider-media__item">
                    <div class="slider-media__thumbnail">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>" alt="">
                        <button type="button" class="media-round-video">
                            <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button type="submit" class="slider-media__btn slider-media__btn--right">
            <i class="fa fa-angle-right"></i>
        </button>
        <button type="submit" class="slider-media__btn slider-media__btn--left">
            <i class="fa fa-angle-left"></i>
        </button>
    </div>
</div>


