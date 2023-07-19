<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<div class="main-jury__slider">
    <div class="slider-jury">
        <div class="slider-jury__items">
            <?php foreach ($arResult["ITEMS"] as $arItem) {
                ?>
                <div class="round-info-block">
                    <div class="round-info-block__photo">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>"
                             alt="<?= $arItem["NAME"] ?>">
                    </div>
                    <div class="round-info-block__name"><?= $arItem["NAME"] ?></div>
                    <div class="round-info-block__type"><?= $arItem["PROPERTY_POST_VALUE"] ?></div>
                    <hr class="round-info-block__hr">
                    <div class="round-info-block__desc">
                        <?= $arItem["DETAIL_TEXT"] ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>



