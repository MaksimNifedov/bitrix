<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/* @global CMain $APPLICATION */
$APPLICATION->SetPageProperty("keywords_inner", "Восстановление пароля");
$APPLICATION->SetPageProperty("title", "Восстановление пароля");
$APPLICATION->SetPageProperty("keywords", "Восстановление пароля");
$APPLICATION->SetPageProperty("description", "Восстановление пароля");
$APPLICATION->SetTitle("Восстановление пароля");
$APPLICATION->IncludeComponent(
    "bitrix:main.auth.forgotpasswd",
    "get_password",
    array(
        "AUTH_AUTH_URL" => "/personal/auth_new/index.php",
        "AUTH_REGISTER_URL" => "/personal/auth_new/registration.php",
    ),
    false
);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");