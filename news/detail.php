<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
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
);
        $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"detail_news", 
	array(
		"IBLOCK_ID" => "news",
		"ELEMENT_ID" => $_GET["ID"],
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DISPLAY_ACTIVE_FROM",
			3 => "DETAIL_PAGE_URL",
			4 => "LIST_PAGE_URL",
			5 => "",
		),
		"SET_TITLE" => "Y",
		"STRICT_SECTION_CHECK" => "Y",
		"ACTIVE_DATE_FORMAT" => "d M Y",
		"COMPONENT_TEMPLATE" => "detail_news",
		"IBLOCK_TYPE" => "News",
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_URL" => "",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
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
);?>
        <div class="news-next-prev">
            <div class="news-next-prev__item">
                <div class="news-next-prev__title">
                    Предыдущая новость
                </div>
                <? $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"mini_detail_news", 
	array(
		"IBLOCK_ID" => "news",
		"ELEMENT_ID" => $_GET["ID"]-1,
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
		"DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#",
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
            <div class="news-next-prev__item">
                <div class="news-next-prev__title">
                    Следующая новость
                </div>
                <? $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"mini_detail_news", 
	array(
		"IBLOCK_ID" => "news",
		"ELEMENT_ID" => $_GET["ID"]+1,
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
		"DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#",
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
        </div>


    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>