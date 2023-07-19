<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
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
foreach ($arResult['ITEMS'] as $item) {
    if ($item['UF_ICON']) {
        $dbImages = CFile::GetList(array(), array('@ID' => $item['UF_ICON']));
        $image = $dbImages->GetNext();
        $item['UF_ICON'] = CFile::GetFileSRC($image);
    }
    switch ($item['UF_NAME']) {
        case 'Почта':
            ?>
            <div class="contact-info__mail">
                <img src="<?= $item['UF_ICON'] ?>" alt="<?=$item['UF_NAME']?>" style="max-width: 18px; max-height: 18px">
                <a class="" href="mailto:<?= $item['UF_INFO'] ?>">
                    <?= $item['UF_INFO'] ?>
                </a>
            </div>
            <?php
            break;
        case 'Телефон':
            ?>
            <div class="contact-info__phone">
                <img src="<?= $item['UF_ICON'] ?>" alt="<?=$item['UF_NAME']?>" style="max-width: 18px; max-height: 18px">
                <a class="" href="tel:<?= $item['UF_INFO'] ?>">
                    <?= $item['UF_INFO'] ?>
                </a>
            </div>
            <?php
            break;
        case 'Адрес':
            ?>
            <div class="contact-info__address">
                <img src="<?= $item['UF_ICON'] ?>" alt="<?=$item['UF_NAME']?>" style="max-width: 18px; max-height: 18px">
                <span>
                <?= $item['UF_INFO'] ?>
                </span>
            </div>
            <?php
            break;
    }
}
?>
