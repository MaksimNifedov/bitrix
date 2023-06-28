<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if (!CModule::IncludeModule("iblock")) {
    ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
    return;
}
$arFilter = array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y");
$arSelect = array("ID");
$resPrev = CIBlockElement::GetList(
    array("DISPLAY_ACTIVE_FROM" => "DESC"),
    $arFilter,
    false,
    array('nPageSize' => 1, 'nElementID' => $arResult["VARIABLES"]["ELEMENT_ID"]),
    $arSelect
);
$resNext = CIBlockElement::GetList(
    array("DISPLAY_ACTIVE_FROM" => "ASC"),
    $arFilter,
    false,
    array('nPageSize' => 1, 'nElementID' => $arResult["VARIABLES"]["ELEMENT_ID"],),
    $arSelect
);
?>
<div class="wrapp">
    <?
    $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "breadcrumbs_news",
        array(
            "COMPONENT_TEMPLATE" => "breadcrumbs_news",
            "START_FROM" => "0",
            "PATH" => "/news/",
            "SITE_ID" => "s1"
        ),
        false
    ); ?>
    <? $ElementID = $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "detail_news",
        array(
            "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
            "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
            "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
            "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
            "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
            "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
            "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
            "META_KEYWORDS" => $arParams["META_KEYWORDS"],
            "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
            "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
            "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
            "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
            "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
            "SET_TITLE" => $arParams["SET_TITLE"],
            "MESSAGE_404" => $arParams["MESSAGE_404"],
            "SET_STATUS_404" => $arParams["SET_STATUS_404"],
            "SHOW_404" => $arParams["SHOW_404"],
            "FILE_404" => $arParams["FILE_404"],
            "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
            "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
            "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
            "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
            "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
            "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
            "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
            "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
            "CHECK_DATES" => $arParams["CHECK_DATES"],
            "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
            "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
            "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
            "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
            "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
            "USE_SHARE" => $arParams["USE_SHARE"],
            "SHARE_HIDE" => $arParams["SHARE_HIDE"],
            "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
            "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
            "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
            "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
            "ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
            'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
        ),
        $component
    ); ?>
    <div class="news-next-prev">
        <?php if ($ar_fields_prev = $resPrev->GetNext()) {
            if ($ElementID != $ar_fields_prev['ID']) { ?>
                <div class="news-next-prev__item">
                    <div class="news-next-prev__title">
                        Предыдущая новость
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "mini_detail_news",
                        array(
                            "IBLOCK_ID" => "news",
                            "ELEMENT_ID" => $ar_fields_prev['ID'],
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "PREVIEW_PICTURE",
                                2 => "DISPLAY_ACTIVE_FROM",
                                3 => "DETAIL_PAGE_URL",
                                4 => "LIST_PAGE_URL",
                                5 => "",
                            ),
                            "SET_TITLE" => "N",
                            "STRICT_SECTION_CHECK" => "N",
                            "ACTIVE_DATE_FORMAT" => "d.m",
                            "DETAIL_URL" => "/news/#ELEMENT_ID#/",
                            "COMPONENT_TEMPLATE" => "mini_detail_news",
                            "IBLOCK_TYPE" => "News",
                            "ELEMENT_CODE" => "",
                            "CHECK_DATES" => "Y",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "IBLOCK_URL" => "",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_GROUPS" => "Y",
                            "SET_CANONICAL_URL" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "BROWSER_TITLE" => "-",
                            "SET_META_KEYWORDS" => "N",
                            "META_KEYWORDS" => "-",
                            "SET_META_DESCRIPTION" => "N",
                            "META_DESCRIPTION" => "-",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "ADD_ELEMENT_CHAIN" => "N",
                            "USE_PERMISSIONS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "PAGER_TITLE" => "Страница",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SET_STATUS_404" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
            <?php }
        } ?>
        <?php if ($ar_fields_next = $resNext->GetNext()) {
            if ($ElementID != $ar_fields_next['ID']) { ?>

                <div class="news-next-prev__item">
                    <div class="news-next-prev__title">
                        Следующая новость
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "mini_detail_news",
                        array(
                            "IBLOCK_ID" => "news",
                            "ELEMENT_ID" => $ar_fields_next['ID'],
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "PREVIEW_PICTURE",
                                2 => "DISPLAY_ACTIVE_FROM",
                                3 => "DETAIL_PAGE_URL",
                                4 => "LIST_PAGE_URL",
                                5 => "",
                            ),
                            "SET_TITLE" => "N",
                            "STRICT_SECTION_CHECK" => "N",
                            "ACTIVE_DATE_FORMAT" => "d.m",
                            "DETAIL_URL" => "/news/#ELEMENT_ID#/",
                            "COMPONENT_TEMPLATE" => "mini_detail_news",
                            "IBLOCK_TYPE" => "News",
                            "ELEMENT_CODE" => "",
                            "CHECK_DATES" => "Y",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "IBLOCK_URL" => "",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_GROUPS" => "Y",
                            "SET_CANONICAL_URL" => "N",
                            "SET_BROWSER_TITLE" => "N",
                            "BROWSER_TITLE" => "-",
                            "SET_META_KEYWORDS" => "N",
                            "META_KEYWORDS" => "-",
                            "SET_META_DESCRIPTION" => "N",
                            "META_DESCRIPTION" => "-",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "ADD_ELEMENT_CHAIN" => "N",
                            "USE_PERMISSIONS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "PAGER_TITLE" => "Страница",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SET_STATUS_404" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
            <?php }
        } ?>
    </div>
</div>
