<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Главная");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");

?>
    <div class="main-about-block" id="scroll-about">
        <div class="main-about-block__decor">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/round-decor-big.svg" alt="" class="svg-inject-me">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/round-decor-small.svg" alt="" class="svg-inject-me">
        </div>

        <div class="wrapp main-about-block__wrapp">
            <div class="main-about">
                <div class="main-about__content">
                    <h1 class="title title--green title--left main-about__title">
                        О премии
                        <div class="title__line">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt=""
                                 class="svg-inject-me">
                        </div>
                    </h1>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__premium__text.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    ); ?>

                </div>
                <div class="main-about__round">
                    <div class="main-about-round main-about-round--logo"></div>
                    <div class="main-about-round main-about-round--prize"></div>
                </div>
            </div>
            <div class="main-choice">
                <h2 class="main-choice__title">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__vote__player.php",
                        ),
                        false
                    ); ?>
                </h2>
                <div class="main-choice__pick">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "valuable_player",
                        array(
                            "IBLOCK_TYPE" => "people",
                            "IBLOCK_ID" => IDValuablePlayerIB,
                            "NEWS_COUNT" => 3,
                            "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_TEAM_PLACE"),
                            "SET_TITLE" => "N",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ); ?>

                    <button type="button" class="main-choice__button">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/local/includes/main__vote__link.php",
                            ),
                            false
                        ); ?>
                        <i class="fa fa-vk" aria-hidden="true"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>
    <div class="main-award-regulations" id="scroll-regulations">

        <div class="wrapp main-award-regulations__wrapp">
            <h3 class="main-award-regulations__title">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__regulations__title.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </h3>
            <button data-src="#award-regulations" class="btn-brown-style main-award-regulations__button">
                Ознакомиться
                <span class="main-award-regulations__button-icon">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
            </button>
        </div>
    </div>
    <div class="award-regulations" id="award-regulations">
        <h5 class="title title--green award-regulations__title">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/local/includes/main__regulations__title__modal.php",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            ); ?>
            <div class="title__line">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
            </div>
        </h5>
        <div class="award-regulations__content">
            <h6>О Премии</h6>
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/local/includes/main__premium__text.php",
                    "COMPONENT_TEMPLATE" => ".default",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            ); ?>

            <h6>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__purpose__award__title.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </h6>
            <p>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__purpose__award__text.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </p>

            <h6>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__title.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </h6>
            <p>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__list.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </p>

            <p>
                <b class="color-green">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__nomination__modal__title1.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    ); ?>
                </b>
                <br>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__text1.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </p>
            <p>
                <b class="color-green">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__nomination__modal__title2.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    ); ?>
                </b><br>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__text2.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>

            </p>
            <p>
                <b class="color-green">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__nomination__modal__title3.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    ); ?>
                </b><br>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__text3.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </p>
            <p>
                <b class="color-green">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__nomination__modal__title4.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    ); ?>
                </b><br>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__text4.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>

            </p>
            <p>
                <b class="color-green">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__nomination__modal__title5.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    ); ?>
                </b><br>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__text5.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </p>
            <p>
                <b class="color-green">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__nomination__modal__title6.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    ); ?>
                </b><br>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__text6.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </p>
            <p>
                <b class="color-green">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/includes/main__nomination__modal__title7.php",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    ); ?>
                </b><br>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/main__nomination__modal__text7.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </p>
        </div>
        <button data-fancybox-close class="award-regulations__close"></button>
    </div>
    <div class="main-jury" id="scroll-jury">
        <div class="wrapp">
            <h3 class="title title--brown main-jury__title">
                Жюри
                <div class="title__line">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                </div>
            </h3>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "jury",
                array(
                    "IBLOCK_TYPE" => "people",
                    "IBLOCK_ID" => IDJuryIB,
                    "NEWS_COUNT" => 3,
                    "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_POST", "DETAIL_TEXT"),
                    "SET_TITLE" => "N",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ) ?>
        </div>
    </div>
    <div class="main-nomination" id="scroll-nomination">
        <div class="wrapp main-nomination__wrapp">
            <h3 class="title title--white main-nomination__title">
                Номинации
                <div class="title__line">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                </div>
            </h3>
            <div class="main-nomination__items">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "nomination",
                    array(
                        "IBLOCK_TYPE" => "nominations",
                        "IBLOCK_ID" => IDNominationIB,
                        "NEWS_COUNT" => 7,
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_NOTE", "DETAIL_TEXT"),
                        "SET_TITLE" => "N",
                        "SORT_BY1" => "ID",
                        "SORT_ORDER1" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ) ?>
            </div>
        </div>
    </div>
    <div class="main-nominees" id="scroll-nominees">
        <div class="wrapp main-nominees__wrapp">
            <div class="main-nominees__stars">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star"
                     class="main-nominees__star main-nominees__star--first svg-inject-me">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star"
                     class="main-nominees__star main-nominees__star--second svg-inject-me">
            </div>
            <h3 class="title title--brown main-nominees__title">
                Номинанты
                <div class="title__line">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                </div>
            </h3>
            <h4 class="main-nominees__icon-title main-nominees__icon-title--player">
                <span></span>
                Самый ценный игрок
            </h4>

            <div class="main-nominees__items">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "laureates",
                    array(
                        "IBLOCK_TYPE" => "-",
                        "IBLOCK_ID" => IDMostValuablePlayerIB,
                        "NEWS_COUNT" => "3",
                        "FIELD_CODE" => array(
                            0 => "NAME",
                            1 => "PREVIEW_PICTURE",
                            2 => "DETAIL_TEXT",
                            3 => "PROPERTY_POST",
                            4 => "",
                        ),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "laureates",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => ""
                    ),
                    false
                ); ?>

            </div>
            <h4 class="main-nominees__icon-title main-nominees__icon-title--gent">
                <span></span>
                Джентльмен года
            </h4>
            <div class="main-nominees__items">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "laureates",
                    array(
                        "IBLOCK_TYPE" => "-",
                        "IBLOCK_ID" => IDGentlemanYearIB,
                        "NEWS_COUNT" => "3",
                        "FIELD_CODE" => array(
                            0 => "NAME",
                            1 => "PREVIEW_PICTURE",
                            2 => "DETAIL_TEXT",
                            3 => "PROPERTY_POST",
                            4 => "",
                        ),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "laureates",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => ""
                    ),
                    false
                ); ?>
            </div>


            <h4 class="main-nominees__icon-title main-nominees__icon-title--junior">
                <span></span>
                Лучший новичок
            </h4>
            <div class="main-nominees__items">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "laureates",
                    array(
                        "IBLOCK_TYPE" => "-",
                        "IBLOCK_ID" => IDBestNewcomerIB,
                        "NEWS_COUNT" => "3",
                        "FIELD_CODE" => array(
                            0 => "NAME",
                            1 => "PREVIEW_PICTURE",
                            2 => "DETAIL_TEXT",
                            3 => "PROPERTY_POST",
                            4 => "",
                        ),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "laureates",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
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

    <div class="main-quotes">
        <div class="wrapp main-quotes__wrapp">
            <h3 class="title title--brown main-quotes__title">
                Цитаты
                <div class="title__line">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                </div>
            </h3>
            <div class="main-quotes__items">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "quotes",
                    array(
                        "IBLOCK_TYPE" => "quotes",
                        "IBLOCK_ID" => IDQuotesIB,
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_POST", "DETAIL_TEXT"),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ) ?>
            </div>
            <div class="main-quotes__slider">
                <div class="slider js-quotes-slider" data-slider data-initial-start="0" data-end="5"
                     data-changed-delay="200">
                    <span class="slider-handle" data-slider-handle role="slider" aria-controls="js-sliderQuoteOutput"
                          tabindex="1"></span>
                    <span class="slider-fill" data-slider-fill></span>
                </div>
                <div class="hide">
                    <input type="number" id="js-sliderQuoteOutput">
                </div>
            </div>
        </div>
    </div>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "news_list_mini",
    array(
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => IDNewsIB,
        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "DISPLAY_ACTIVE_FROM", "DETAIL_PAGE_URL", "LIST_PAGE_URL"),
        "SET_TITLE" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "ACTIVE_DATE_FORMAT" => "d.m",
        "DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#",
        "LIST_PAGE_URL" => "/news/"
    )
) ?>

    <div class="main-media" id="scroll-media">
        <div class="wrapp main-media__wrapp">
            <div class="main-media__decor main-media__decor--top">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/round-decor-small.svg" alt="" class="svg-inject-me">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/round-decor-big.svg" alt="" class="svg-inject-me">
            </div>
            <div class="main-media__decor main-media__decor--bottom">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/round-decor-small.svg" alt="" class="svg-inject-me">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/round-decor-big.svg" alt="" class="svg-inject-me">
            </div>

            <h3 class="title title--brown main-media__title">
                Медиа
                <div class="title__line">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                </div>
            </h3>
            <div class="main-media__content">
                <div class="main-media-video">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "media_video_main",
                        array(
                            "IBLOCK_TYPE" => "video",
                            "IBLOCK_ID" => IDVideoIB,
                            "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE"),
                            "SET_TITLE" => "N",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ) ?>
                </div>
                <div class="slider-media" id="slider-media--video">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "media_video_inner",
                        array(
                            "IBLOCK_TYPE" => "Video",
                            "IBLOCK_ID" => IDVideoIB,
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "PREVIEW_PICTURE",
                                2 => "PROPERTY_VIDEO",
                                3 => "",
                            ),
                            "SET_TITLE" => "N",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "media_video_inner",
                            "NEWS_COUNT" => "20",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "DESC",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER2" => "ASC",
                            "FILTER_NAME" => "",
                            "PROPERTY_CODE" => array(
                                0 => "video",
                                1 => "",
                            ),
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "36000000",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "PAGER_TEMPLATE" => ".default",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "PAGER_TITLE" => "Новости",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SET_STATUS_404" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => ""
                        ),
                        false
                    ); ?>
                </div>
                <div class="main-media-photo">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "media_photo_main",
                        array(
                            "IBLOCK_TYPE" => "Photos",
                            "IBLOCK_ID" => IDPhotoIB,
                            "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE"),
                            "SET_TITLE" => "N",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ) ?>
                </div>
                <div class="slider-media" id="slider-media--photo">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "media_photo_inner",
                        array(
                            "IBLOCK_TYPE" => "Photos",
                            "IBLOCK_ID" => IDPhotoIB,
                            "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_VIDEO"),
                            "SET_TITLE" => "N",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-contact" id="scroll-contacts">
        <div class="wrapp main-contact__wrapp">
            <h3 class="title title--green main-contact__title">
                Контакты
                <div class="title__line">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                </div>
            </h3>
            <div class="main-contact__content">
                <div class="main-contact__left">
                    <div class="contact-info">
                        <div class="contact-info__logo">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/hokey-federation-color.svg"
                                 alt="Федерация Хоккея России" class="svg-inject-me">
                        </div>
                        <h4 class="contact-info__title">Пресс-центр<br> Федерации Хоккея России</h4>

                        <div class="contact-info__content">
                            <? $APPLICATION->IncludeComponent(
                                'digital:hl.list',
                                'my_hl',
                                array(
                                    'HLBLOCK_ID' => IDContacsHL,
                                    'CACHE_TYPE' => 'A',
                                    'CACHE_TIME' => 36000000,
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="main-contact__right">
                    <? $APPLICATION->IncludeComponent("bitrix:form.result.new", "request_form", array(
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "CHAIN_ITEM_LINK" => "",
                        "CHAIN_ITEM_TEXT" => "",
                        "EDIT_URL" => "",
                        "IGNORE_CUSTOM_TEMPLATE" => "N",
                        "LIST_URL" => "",
                        "SEF_MODE" => "N",
                        "SUCCESS_URL" => "",
                        "USE_EXTENDED_ERRORS" => "Y",
                        "VARIABLE_ALIASES" => array(
                            "RESULT_ID" => "RESULT_ID",
                            "WEB_FORM_ID" => "WEB_FORM_ID",
                        ),
                        "WEB_FORM_ID" => IDSubmitRequestWebForm,
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_SHADOW" => "N",
                        "AJAX_OPTION_JUMP" => "Y",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                    ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-partners" id="scroll-partners">
        <div class="wrapp main-partners__wrapp">
            <h3 class="title title--brown main-partners__title">
                Партнеры
                <div class="title__line">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                </div>
            </h3>
            <div class="main-partners__content">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "partners",
                    array(
                        "IBLOCK_TYPE" => "partners",
                        "IBLOCK_ID" => IDPartnersIB,
                        "NEWS_COUNT" => "3",
                        "FIELD_CODE" => array(
                            0 => "NAME",
                            1 => "PREVIEW_PICTURE",
                            2 => "PROPERTY_SOCIAL_LINK",
                            3 => "",
                        ),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "partners",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
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