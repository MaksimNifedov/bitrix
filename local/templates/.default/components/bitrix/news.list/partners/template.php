<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php foreach ($arResult["ITEMS"] as $arItem) {
    ?>
    <a href="<?= $arItem['PROPERTY_SOCIAL_LINK_VALUE'] ?>" target="_blank" class="main-partners__link">
        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>">
    </a>
    <?php
}
?>



