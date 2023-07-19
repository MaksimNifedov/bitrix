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
    <h5 class="slider-media__title">Фото</h5>
    <button data-fancybox-close class="slider-media__close"></button>
    <div class="slider-media__wrapp">
        <div class="slider-media__big">
            <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
                <div class="slider-media__item">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>" alt="">
                </div>
            <?php } ?>
        </div>
        <div class="slider-media__thumbnails">
            <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
                <div class="slider-media__item">
                    <div class="slider-media__thumbnail">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" alt="">
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