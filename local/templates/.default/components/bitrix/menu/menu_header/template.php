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
if (!empty($arResult)) : ?>
    <nav class="header-menu">
        <ul class="vertical medium-horizontal menu header-menu__list">
            <?php
            foreach ($arResult as $arItem) : ?>
                <li class="header-menu__item">
                    <a href="<?= $arItem["LINK"] ?>" class="header-menu__link">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
<?php endif ?>