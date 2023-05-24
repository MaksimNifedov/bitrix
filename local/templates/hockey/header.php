<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/app.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/app.js');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead() ?>
    <link href="<?= SITE_TEMPLATE_PATH ?>/assets/olimp.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="main default">
<div class="wrapper">
    <header class="header">
        <div class="header__left">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/hokey-federation-color.svg" alt="Федерация Хоккея России"
                 class="svg-inject-me">
        </div>
        <div class="header__wrapp">
            <div class="wrapp">
                <div class="header__logo">
                    <a href="/">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/site-logo.png" alt="Герои хоккея">
                    </a>
                </div>
                <div class="header__menu">
                    <nav class="header-menu">
                        <ul class="vertical medium-horizontal menu header-menu__list">
                            <li class="header-menu__item"><a href="#scroll-about" class="header-menu__link">О премии</a>
                            </li>
                            <li class="header-menu__item"><a href="#scroll-regulations" class="header-menu__link">Регламент</a>
                            </li>
                            <li class="header-menu__item"><a href="#scroll-jury" class="header-menu__link">Жюри</a></li>
                            <li class="header-menu__item"><a href="#scroll-nomination" class="header-menu__link">Номинации</a>
                            </li>
                            <li class="header-menu__item"><a href="#scroll-nominees"
                                                             class="header-menu__link">Лауреаты</a></li>
                            <li class="header-menu__item"><a href="#scroll-news" class="header-menu__link">Новости</a>
                            </li>
                            <li class="header-menu__item"><a href="#scroll-media" class="header-menu__link">Медия</a>
                            </li>
                            <li class="header-menu__item"><a href="#scroll-contacts"
                                                             class="header-menu__link">Контакты</a></li>
                            <li class="header-menu__item"><a href="#scroll-partners"
                                                             class="header-menu__link">Партнеры</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header__right">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ligastavok.svg" alt="Лига ставок" class="svg-inject-me">
        </div>
    </header>
    <div class="content">
