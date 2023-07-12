<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="news-list">
    <div class="news-list__items">
        <? foreach ($arResult["ITEMS"] as $arItem) { ?>
            <div class="news-list-item">
                <div class="news-list-item__photo"
                     style="background-image: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>);"></div>
                <div class="news-list-item__info">
                    <div class="news-list-item__date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="news-list-item__title"><?= $arItem["NAME"] ?></a>
                </div>
            </div>
        <? } ?>
    </div>
</div>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?>
<? endif; ?>

