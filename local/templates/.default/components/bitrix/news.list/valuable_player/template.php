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
/* @var CBitrixComponent $component */?>
<div class="main-choice__items">
    <?php foreach ($arResult["ITEMS"] as $arItem) {
        ?>
        <div class="main-choice__item">
            <div class="round-info-block">
                <div class="round-info-block__photo">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>"
                         alt="<?= $arItem["NAME"] ?>">
                </div>
                <div class="round-info-block__name"><?= $arItem["NAME"] ?></div>
                <div class="round-info-block__type"><?= $arItem["PROPERTY_TEAM_PLACE_VALUE"] ?></div>
            </div>
        </div>
        <?php
    }
    ?>
</div>



