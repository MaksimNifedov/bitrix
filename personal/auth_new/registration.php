<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/* @global CMain $APPLICATION */
$APPLICATION->SetPageProperty("keywords_inner", "Регистрация");
$APPLICATION->SetPageProperty("title", "Регистрация");
$APPLICATION->SetPageProperty("keywords", "Регистрация");
$APPLICATION->SetPageProperty("description", "Регистрация");
$APPLICATION->SetTitle("Регистрация");
$APPLICATION->IncludeComponent(
    "bitrix:main.register",
    "registration",
    array(
        "AUTH" => "Y",
        "REQUIRED_FIELDS" => "",
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => "",
        "SUCCESS_PAGE" => "/personal/",
        "USER_PROPERTY" => "",
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y",
    ),
    false
);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");