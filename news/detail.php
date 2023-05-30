<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle($arResult["NAME"]); ?>

    <div class="wrapp">
        <?
        $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumbs_news", 
	array(
		"COMPONENT_TEMPLATE" => "breadcrumbs_news",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "DYNAMIC_WITH_STUB_LOADING"
	),
	false
);
        $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "detail_news",
            array(
                "IBLOCK_ID" => "12", // ID инфоблока с новостями
                "ELEMENT_ID" => $_GET["ID"], // ID элемента из адреса страницы
                "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "DISPLAY_ACTIVE_FROM", "DETAIL_PAGE_URL", "LIST_PAGE_URL"),
                "SET_TITLE" => "N",
                "STRICT_SECTION_CHECK" => "N",
                "ACTIVE_DATE_FORMAT" => "d M Y",
            )
        ); ?>
        <div class="news-next-prev">
            <div class="news-next-prev__item">
                <div class="news-next-prev__title">
                    Предыдущая новость
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.detail",
                    "mini_detail_news",
                    array(
                        "IBLOCK_ID" => "12", // ID инфоблока с новостями
                        "ELEMENT_ID" => $_GET["ID"] - 1, // ID элемента из адреса страницы
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "DISPLAY_ACTIVE_FROM", "DETAIL_PAGE_URL", "LIST_PAGE_URL"),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N",
                        "ACTIVE_DATE_FORMAT" => "d.m",
                        "DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#",

                    )
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
                        "IBLOCK_ID" => "12", // ID инфоблока с новостями
                        "ELEMENT_ID" => $_GET["ID"] + 1, // ID элемента из адреса страницы
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "DISPLAY_ACTIVE_FROM", "DETAIL_PAGE_URL", "LIST_PAGE_URL"),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N",
                        "ACTIVE_DATE_FORMAT" => "d.m",
                        "DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#",

                    )
                ); ?>
            </div>
        </div>


    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>