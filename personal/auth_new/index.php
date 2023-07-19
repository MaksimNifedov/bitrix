<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/* @global CMain $APPLICATION */
$APPLICATION->SetTitle("Авторизация");
$APPLICATION->IncludeComponent(
    "bitrix:main.auth.form",
    "auth",
    array(
        "AUTH_FORGOT_PASSWORD_URL" => "/personal/auth_new/get_password.php",
        "AUTH_REGISTER_URL" => "/personal/auth_new/registration.php",
        "AUTH_SUCCESS_URL" => "/personal/",
    ),
    false
);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");