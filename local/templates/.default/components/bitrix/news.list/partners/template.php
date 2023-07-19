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
<?php foreach ($arResult["ITEMS"] as $arItem) {
    ?>
    <a href="<?= $arItem['PROPERTY_SOCIAL_LINK_VALUE'] ?>" target="_blank" class="main-partners__link">
        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
    </a>
    <?php
}
?>



