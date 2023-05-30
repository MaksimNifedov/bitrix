<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult["ITEMS"] as $arItem) {
    ?>
    <div class="main-quotes__item">
        <div class="quote-block">
            <div class="quote-block__top">
                <div class="quote-block__photo">
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>"
                         alt="<?= $arItem["NAME"] ?>">
                </div>
                <div class="quote-block__info">
                    <div class="quote-block__name"><?= $arItem["NAME"] ?></div>
                    <div class="quote-block__type"><?= $arItem["PROPERTY_POST_VALUE"] ?></div>
                </div>
            </div>
            <div class="quote-block__quote">
                <?= $arItem["DETAIL_TEXT"] ?>
            </div>
        </div>
    </div>
    <?php
}
?>


