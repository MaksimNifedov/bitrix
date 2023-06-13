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
                            "IBLOCK_ID" => "valuable_player",
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
            <h3 class="main-award-regulations__title">Регламент премии</h3>
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
            Регламент премии «Герои Хоккея»
            <div class="title__line">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
            </div>
        </h5>
        <div class="award-regulations__content">
            <h6>О Премии</h6>
            <p>
                Общероссийская общественная организация «Федерация хоккея России» (далее – ФХР) и официальный партнёр
                ФХР и национальной
                сборной России по хоккею Букмекерская компания «Лига Ставок» (ООО «ПМБК») учреждают премию «Герои
                Хоккея» (далее – Премия), которая определяет членов национальной сборной России по хоккею,
                продемонстрировавших в отчетном спортивном сезоне лучшие
                аспекты и показатели по соответствующей номинации в матчах с участием национальной сборной России по
                хоккею.
            </p>

            <h6>Цель проведения Премии</h6>
            <p>
                Проведение Премии осуществляется в целях пропаганды честной спортивной борьбы, популяризации и развития
                хоккея в Российской Федерации, повышения зрелищности матчей с участием национальной сборной России по
                хоккею и стимулирования профессиональной деятельности спортсменов, тренеров и специалистов в области
                хоккея.
            </p>

            <h6>Номинации Премии</h6>
            <p>Премия включает следующие независимые номинации: </p>

            <p>
                <b class="color-green">Самый ценный игрок</b><br>
                награждается игрок, который внёс наибольший вклад в успехи национальной сборной России по хоккею
            </p>
            <p>
                <b class="color-green">Джентльмен года</b><br>
                награждается игрок, продемонстрировавший образец честной спортивной борьбы и джентльменского поведения
                в сочетании с высоким игровым мастерством.
            </p>
            <p>
                <b class="color-green">Лучший новичок</b><br>
                награждается игрок, наиболее ярко проявивший себя среди тех, кто провел первый сезон в составе
                национальной сборной России по хоккею.
            </p>
            <p>
                <b class="color-green">Лучший бомбардир</b><br>
                награждается игрок, набравший наибольшее количество очков по системе гол+пас в матчах за национальной
                сборной России по хоккею.
            </p>
            <p>
                <b class="color-green">Лучший снайпер</b><br>
                награждается игрок, забросивший наибольшее число шайб среди всех игроков в матчах за национальной
                сборной России по хоккею.
            </p>
            <p>
                <b class="color-green">Незаметный герой</b><br>
                награждается член национальной сборной России по хоккею, не относящийся к игрокам и тренерскому штабу,
                внесший наибольший вклад в деятельность команды по мнению игроков и тренерского штаба национальной
                сборной России по хоккею.
            </p>
            <p>
                <b class="color-green">Лидер команды</b><br>
                награждается член национальной сборной России по хоккею, который является примером для партнеров (на
                льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной
                сборной России по хоккею.
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
                    "IBLOCK_ID" => "jury",
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
                        "IBLOCK_ID" => "nomination",
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
                        "IBLOCK_TYPE" => "laureates",
                        "IBLOCK_ID" => "most_valuable_player",
                        "NEWS_COUNT" => 3,
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_POST", "DETAIL_TEXT"),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ) ?>

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
                        "IBLOCK_TYPE" => "laureates",
                        "IBLOCK_ID" => "gentleman_year",
                        "NEWS_COUNT" => 3,
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_POST", "DETAIL_TEXT"),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ) ?>
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
                        "IBLOCK_TYPE" => "laureates",
                        "IBLOCK_ID" => "best_newcomer",
                        "NEWS_COUNT" => 3,
                        "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_POST", "DETAIL_TEXT"),
                        "SET_TITLE" => "N",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ) ?>
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
                        "IBLOCK_ID" => "quotes",
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
    <div class="main-news" id="scroll-news">
        <div class="wrapp main-news__wrapp">
            <h3 class="title title--green main-news__title">
                Новости
                <div class="title__line">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                </div>
            </h3>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news_list_mini",
                array(
                    "IBLOCK_TYPE" => "news",
                    "IBLOCK_ID" => "news",
                    "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "DISPLAY_ACTIVE_FROM", "DETAIL_PAGE_URL", "LIST_PAGE_URL"),
                    "SET_TITLE" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "ACTIVE_DATE_FORMAT" => "d.m",
                    "DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#",
                    "LIST_PAGE_URL" => "/news/"
                )
            ) ?>
        </div>
    </div>
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
                            "IBLOCK_ID" => "video",
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
                            "IBLOCK_TYPE" => "video",
                            "IBLOCK_ID" => "video",
                            "FIELD_CODE" => array("NAME", "PREVIEW_PICTURE", "PROPERTY_VIDEO"),
                            "SET_TITLE" => "N",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    ) ?>
                </div>
                <div class="main-media-photo">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "media_photo_main",
                        array(
                            "IBLOCK_TYPE" => "Photos",
                            "IBLOCK_ID" => "photo",
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
                            "IBLOCK_ID" => "photo",
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
                            <div class="contact-info__mail">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a class="" href="mailto:media@fhr.ru">
                                    media@fhr.ru
                                </a>
                            </div>

                            <div class="contact-info__phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a class="" href="tel:84956477111">
                                    +7 (495) 647-71-11
                                </a>
                            </div>

                            <div class="contact-info__address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                        115280, Россия, Москва,<br>
                                        Автозаводская ул., д. 21 к. 1
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-contact__right">
                    <form method="post" class="contact-feedback-form">
                        <h4 class="contact-feedback-form__title">Оставить заявку</h4>
                        <div class="contact-feedback-form__inputs">
                            <div>
                                <label for="contact-feedback-name" class="contact-feedback-form__label">Имя</label>
                                <input id="contact-feedback-name" name="name" type="text" maxlength="100" required>
                            </div>
                            <div>
                                <label for="contact-feedback-email" class="contact-feedback-form__label">Почта</label>
                                <input id="contact-feedback-email" name="email" type="email" maxlength="100" required>
                            </div>
                        </div>
                        <div class="contact-feedback-form__area">
                            <label for="contact-feedback-message" class="contact-feedback-form__label">Сообщение</label>
                            <textarea name="message" id="contact-feedback-message" required></textarea>
                        </div>

                        <button class="contact-feedback-form__btn">Отправить</button>
                    </form>
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
                <a href="#" target="_blank" class="main-partners__link">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/main-rate.png" alt="">
                </a>
                <a href="#" target="_blank" class="main-partners__link">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/hockey.png" alt="">
                </a>
                <a href="#" target="_blank" class="main-partners__link">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partners/liga.png" alt="">
                </a>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>