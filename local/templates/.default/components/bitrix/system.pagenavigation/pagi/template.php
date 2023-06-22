<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

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
        <? if ($arResult["NavPageNomer"] > 1): ?>
            <? if ($arResult["bSavePage"]): ?>
                <li class="pagination__previous disabled">
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><i
                                class="fa fa-angle-left"></i></a>
                </li>
            <? else: ?>
                <? if ($arResult["NavPageNomer"] > 2): ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><i
                                    class="fa fa-angle-left"></i></a>
                    </li>
                <? else: ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                <? endif ?>
            <? endif ?>
        <? endif ?>
        <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
            <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <li class="pagination__current"><?= $arResult["nStartPage"] ?></li>
            <? elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
                </li>
            <? else: ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
                </li>
            <? endif ?>
            <? $arResult["nStartPage"]++ ?>
        <? endwhile ?>
        <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
            <li class="pagination__next">
                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><i
                            class="fa fa-angle-right"></i></a>
            </li>
        <? endif ?>
    </ul>
</nav>
