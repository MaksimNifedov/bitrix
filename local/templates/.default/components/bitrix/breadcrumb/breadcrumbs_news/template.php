<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */
if (empty($arResult))
    return "";
$strReturn = '';
$strReturn .= '<nav> <ul class="breadcrumbs">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    if ($index != $itemSize - 1) {
        $strReturn .= '<li>
				<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" itemprop="item">
				' . $title . '
				</a> </li>';
    } else {
        $strReturn .= '<li>' . $title . '</li>';
    }
}
$strReturn .= '</ul></nav>';;
return $strReturn;
