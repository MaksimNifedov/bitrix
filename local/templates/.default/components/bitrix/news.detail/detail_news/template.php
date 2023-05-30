<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
$APPLICATION->SetTitle($arResult["NAME"]); ?>
<h1 class="title title--green title--center">
    <?= $arResult["NAME"] ?>
    <div class="title__line">
        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
    </div>
</h1>
<div class="news-detail">
    <div class="news-detail__date"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></div>
    <div class="news-detail__content">
        <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" style="float:left; margin: 0 20px 20px 0;">
        <?= $arResult["DETAIL_TEXT"] ?>
    </div>
</div>
