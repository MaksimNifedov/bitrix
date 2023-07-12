<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");
?><p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
Array()
);?><br>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>