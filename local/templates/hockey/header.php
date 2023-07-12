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
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=1250, initial-scale=1">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead(); ?>
    <link href="<?= SITE_TEMPLATE_PATH ?>/assets/olimp.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="main default">
<? $APPLICATION->ShowPanel(); ?>
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
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "menu_header",
                        array(
                            "ROOT_MENU_TYPE" => "top",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "top",
                            "ALLOW_MULTI_SELECT" => "N",
                            "USE_EXT" => "N",
                            "MENU_CACHE_TYPE" => "A"
                        )
                    ) ?>
                </div>
            </div>
        </div>
        <div class="header__right">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/ligastavok.svg" alt="Лига ставок" class="svg-inject-me">
        </div>
    </header>
    <div class="content">
