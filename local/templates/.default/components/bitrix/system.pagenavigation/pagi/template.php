<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(true);
if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}
$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>
<nav aria-label="Pagination">
    <ul class="pagination text-center">
        <?php  if ($arResult["NavPageNomer"] > 1): ?>
            <?php  if ($arResult["bSavePage"]): ?>
                <li class="pagination__previous disabled">
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><i
                                class="fa fa-angle-left"></i></a>
                </li>
            <?php  else: ?>
                <?php  if ($arResult["NavPageNomer"] > 2): ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><i
                                    class="fa fa-angle-left"></i></a>
                    </li>
                <?php  else: ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                <?php  endif ?>
            <?php  endif ?>
        <?php  endif ?>
        <?php  while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
            <?php  if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <li class="pagination__current"><?= $arResult["nStartPage"] ?></li>
            <?php  elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
                </li>
            <?php  else: ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
                </li>
            <?php  endif ?>
            <?php  $arResult["nStartPage"]++ ?>
        <?php  endwhile ?>
        <?php  if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
            <li class="pagination__next">
                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><i
                            class="fa fa-angle-right"></i></a>
            </li>
        <?php  endif ?>
    </ul>
</nav>
