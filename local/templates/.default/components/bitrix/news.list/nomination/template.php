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
foreach ($arResult["ITEMS"] as $arItem) {
    ?>
    <div class="nomination-block">
        <div class="nomination-block__top">
            <div class="nomination-block__icon">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>"
                     alt="<?= $arItem["NAME"] ?>">
            </div>
            <div class="nomination-block__title"><?= $arItem["NAME"] ?></div>
            <div class="nomination-block__desc">
                <?= $arItem["DETAIL_TEXT"] ?>
            </div>
        </div>
        <div class="nomination-block__footer">
            <div class="nomination-block__info">
                                    <span class="nomination-block__info-icon">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>

                <span class="nomination-block__info-text">
                                       <?= $arItem["PROPERTY_NOTE_VALUE"] ?>
                                    </span>
            </div>
        </div>
    </div>
    <?php
}
?>


