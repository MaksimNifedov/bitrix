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
$this->setFrameMode(true);
?>
<div class="news-list-item">
    <div class="news-list-item__photo" style="background-image: url(<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>);"></div>
    <div class="news-list-item__info">
        <div class="news-list-item__date"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></div>
        <a href="<?= $arResult["DETAIL_PAGE_URL"] ?>" class="news-list-item__title"><?= $arResult["NAME"] ?></a>
    </div>
</div>
