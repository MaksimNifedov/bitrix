<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>
    <div class="wrapp">
        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumbs_news",
            array()
            );?>
        <h1 class="title title--green title--center">
            Новости
            <div class="title__line">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
            </div>
        </h1>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "page_news",
            array(
                "IBLOCK_TYPE" => "news",
                "IBLOCK_ID" => "news",
                "SET_TITLE" => "N",
                "NEWS_COUNT" => "3",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_PICTURE",
                    2 => "DISPLAY_ACTIVE_FROM",
                    3 => "DETAIL_PAGE_URL",
                    4 => "LIST_PAGE_URL",
                    5 => "",
                ),
                "COMPONENT_TEMPLATE" => "page_news",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "ACTIVE_DATE_FORMAT" => "d.m",
                "PAGER_TEMPLATE" => "pagi",
                "DISPLAY_BOTTOM_PAGER" => "Y",

            ),
            false
        ); ?>


    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>