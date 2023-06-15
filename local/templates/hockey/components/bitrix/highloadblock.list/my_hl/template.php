<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult['ERROR']))
{
	echo $arResult['ERROR'];
	return false;
}

use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

$hlbl = $arParams['BLOCK_ID']; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
$hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$rsData = $entity_data_class::getList(array(
    "select" => array("UF_NAME", "UF_LINK", "UF_ICON"),
    "order" => array("ID" => "ASC"),
    //"filter" => array("UF_PRODUCT_ID"=>"77","UF_TYPE"=>'33')  // Задаем параметры фильтра выборки
));

while($arData = $rsData->Fetch()){
    if($arData['UF_ICON']){
        $dbImages = CFile::GetList(array(), array('@ID' => $arData['UF_ICON']));
        while ($image = $dbImages->GetNext()) {
            $arData['UF_ICON'] = CFile::GetFileSRC($image);
        }
    }?>
    <a href="<?=$arData['UF_LINK'] ?>" target="_blank" >
        <img src="<?=$arData['UF_ICON']?>"  class="red-on-hover"  ALT="<?=$arData['UF_NAME']?>" style="max-width: 25px; max-height: 25px">
    </a>
<?php }
 ?>