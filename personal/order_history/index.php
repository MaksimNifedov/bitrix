<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/* @global CMain $APPLICATION */
$APPLICATION->SetTitle("История заказов");
$APPLICATION->IncludeComponent(
    "bitrix:sale.personal.order",
    "order_list",
    array(),
    false
);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");

