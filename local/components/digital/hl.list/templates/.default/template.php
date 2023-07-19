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
    if($item['UF_ICON']){
        $dbImages = CFile::GetList(array(), array('@ID' => $item['UF_ICON']));
        $image = $dbImages->GetNext();
        $item['UF_ICON'] = CFile::GetFileSRC($image);
    }
    ?>
        <a href="<?=$item['UF_LINK'] ?>" target="_blank" >
            <img src="<?=$item['UF_ICON']?>"  class="main-partners__link"  ALT="<?=$item['UF_NAME']?>" style="max-width: 25px; max-height: 25px">
        </a>

<?php
}
?>