<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if(!empty($arResult["ITEMS"] )){
    
?>
<div class="main-news__content">
    <div class="main-news-list">
        <div class="main-news-list__items">
            <?php foreach ($arResult["ITEMS"] as $arItem) {
                if ($arResult["ITEMS"][0]["NAME"] != $arItem["NAME"]) {
                    ?>
                    <div class="main-news-list__item">
                        <div class="main-news-list__photo"
                             style="background-image: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>);"></div>
                        <div class="main-news-list__info">
                            <div class="main-news-list__date"><?= $arItem["DISPLAY_ACTIVE_FROM"] ?></div>
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="main-news-list__title">
                                <?= $arItem["NAME"] ?>
                            </a>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
    <div class="main-news-last-news">
        <div class="main-news-last-news__photo"
             style="background-image: url(<?= $arResult["ITEMS"][0]["PREVIEW_PICTURE"]["SRC"] ?? $arParams["NO_IMAGE_PATH"] ?>);"></div>
        <div class="main-news-last-news__info">
            <div class="main-news-last-news__date"><?= $arResult["ITEMS"][0]["DISPLAY_ACTIVE_FROM"] ?></div>
            <a href="<?= $arResult["ITEMS"][0]["DETAIL_PAGE_URL"] ?>" class="main-news-last-news__title"> <?= $arItem["NAME"] ?></a>
        </div>
    </div>
</div>
<div class="main-news__footer">
    <button class="btn-brown-style main-news__btn">
        <a href="<?= $arResult['LIST_PAGE_URL'] ?>">Читать все новости</a>
        <span>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
    </button>
</div>
<?php }?>


