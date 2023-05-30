<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult["ITEMS"] as $arItem) {
    ?>
    <div class="nominees-block">
        <div class="nominees-block__star">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
        </div>
        <div class="nominees-block__top">
            <div class="nominees-block__photo">
                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>"
                     alt="<?= $arItem["NAME"] ?>">
            </div>
            <div class="nominees-block__info">
                <div class="nominees-block__name"><?= $arItem["NAME"] ?></div>
                <div class="nominees-block__type"> <?= $arItem["PROPERTY_NOTE_VALUE"] ?></div>
            </div>
        </div>
        <div class="nominees-block__content">
            <?= $arItem["DETAIL_TEXT"] ?>
        </div>
    </div>
    <?php
}
?>


