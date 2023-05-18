<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
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
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/title-line.svg" alt="" class="svg-inject-me">
                        </div>
                    </h1>
                    <p>
                        Общероссийская общественная организация «Федерация хоккея России»<br>
                        (далее – ФХР) и официальный партнёр ФХР и национальной сборной России по хоккею Букмекерская компания «Лига Ставок»
                        (ООО «ПМБК») учреждают премию «Герои Хоккея» (далее – Премия), которая определяет членов национальной сборной России по
                        хоккею, продемонстрировавших в отчетном спортивном сезоне лучшие аспекты и показатели по соответствующей номинации в
                        матчах с участием национальной сборной России по хоккею.
                    </p>
                </div>
                <div class="main-about__round">
                    <div class="main-about-round main-about-round--logo"></div>
                    <div class="main-about-round main-about-round--prize"></div>
                </div>
            </div>
            <div class="main-choice">
                <h2 class="main-choice__title">Выбери <span>самого ценного игрока</span> сборной России в сезоне 2017/18</h2>
                <div class="main-choice__pick">
                    <div class="main-choice__items">
                        <div class="main-choice__item">
                            <div class="round-info-block">
                                <div class="round-info-block__photo">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Илья Сорокин">
                                </div>
                                <div class="round-info-block__name">Илья Сорокин</div>
                                <div class="round-info-block__type">Вратарь</div>
                            </div>            </div>
                        <div class="main-choice__item">
                            <div class="round-info-block">
                                <div class="round-info-block__photo">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Илья Сорокин">
                                </div>
                                <div class="round-info-block__name">Илья Сорокин</div>
                                <div class="round-info-block__type">Вратарь</div>
                            </div>            </div>
                        <div class="main-choice__item">
                            <div class="round-info-block">
                                <div class="round-info-block__photo">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Илья Сорокин">
                                </div>
                                <div class="round-info-block__name">Илья Сорокин</div>
                                <div class="round-info-block__type">Вратарь</div>
                            </div>            </div>
                    </div>
                    <button type="button" class="main-choice__button">
                        Проголосовать
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
                Общероссийская общественная организация «Федерация хоккея России» (далее – ФХР) и официальный партнёр ФХР и национальной
                сборной России по хоккею Букмекерская компания «Лига Ставок» (ООО «ПМБК») учреждают премию «Герои Хоккея» (далее – Премия), которая определяет членов национальной сборной России по хоккею, продемонстрировавших в отчетном спортивном сезоне лучшие
                аспекты и показатели по соответствующей номинации в матчах с участием национальной сборной России по хоккею.
            </p>

            <h6>Цель проведения Премии</h6>
            <p>
                Проведение Премии осуществляется в целях пропаганды честной спортивной борьбы, популяризации и развития хоккея в Российской Федерации, повышения зрелищности матчей с участием национальной сборной России по хоккею и стимулирования профессиональной деятельности спортсменов, тренеров и специалистов в области хоккея.
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
                награждается игрок, наиболее ярко проявивший себя среди тех, кто провел первый сезон в составе национальной сборной России по хоккею.
            </p>
            <p>
                <b class="color-green">Лучший бомбардир</b><br>
                награждается игрок, набравший наибольшее количество очков по системе гол+пас в матчах за национальной сборной России по хоккею.
            </p>
            <p>
                <b class="color-green">Лучший снайпер</b><br>
                награждается игрок, забросивший наибольшее число шайб среди всех игроков в матчах за национальной сборной России по хоккею.
            </p>
            <p>
                <b class="color-green">Незаметный герой</b><br>
                награждается член национальной сборной России по хоккею, не относящийся к игрокам и тренерскому штабу, внесший наибольший вклад в деятельность команды по мнению игроков и тренерского штаба национальной сборной России по хоккею.
            </p>
            <p>
                <b class="color-green">Лидер команды</b><br>
                награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
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
            <div class="main-jury__slider">
                <div class="slider-jury">
                    <div class="slider-jury__items">
                        <div class="round-info-block">
                            <div class="round-info-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="round-info-block__name">Иван Иванов</div>
                            <div class="round-info-block__type">Экс футболист</div>
                            <hr class="round-info-block__hr">
                            <div class="round-info-block__desc">
                                Общественный деятель, чемпион мира по версии WBA
                            </div>
                        </div>
                        <div class="round-info-block">
                            <div class="round-info-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="round-info-block__name">Иван Иванов</div>
                            <div class="round-info-block__type">Экс футболист</div>
                            <hr class="round-info-block__hr">
                            <div class="round-info-block__desc">
                                Общественный деятель, чемпион мира по версии WBA
                            </div>
                        </div>
                        <div class="round-info-block">
                            <div class="round-info-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="round-info-block__name">Иван Иванов</div>
                            <div class="round-info-block__type">Экс футболист</div>
                            <hr class="round-info-block__hr">
                            <div class="round-info-block__desc">
                                Общественный деятель, чемпион мира по версии WBA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="nomination-block">
                    <div class="nomination-block__top">
                        <div class="nomination-block__icon nomination-block__icon--best-player"></div>
                        <div class="nomination-block__title">Самый ценный игрок</div>
                        <div class="nomination-block__desc">
                            награждается игрок, который внёс наибольший вклад в успехи национальной сборной России по хоккею.
                        </div>
                    </div>
                    <div class="nomination-block__footer">
                        <div class="nomination-block__info">
                                    <span class="nomination-block__info-icon">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>

                            <span class="nomination-block__info-text">
                                        определяется болельщиками
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="nomination-block">
                    <div class="nomination-block__top">
                        <div class="nomination-block__icon nomination-block__icon--gent-year"></div>
                        <div class="nomination-block__title">Джентльмен года</div>
                        <div class="nomination-block__desc">
                            награждается игрок, продемонстрировавший образец честной спортивной борьбы и джентльменского поведения в сочетании с высоким игровым мастерством.
                        </div>
                    </div>
                    <div class="nomination-block__footer">
                        <div class="nomination-block__info">
                                    <span class="nomination-block__info-icon">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>

                            <span class="nomination-block__info-text">
                                        определяется членами Зала славы отечественного хоккея
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="nomination-block">
                    <div class="nomination-block__top">
                        <div class="nomination-block__icon nomination-block__icon--best-junior"></div>
                        <div class="nomination-block__title">Лучший новичок</div>
                        <div class="nomination-block__desc">
                            награждается игрок, наиболее ярко проявивший себя среди тех, кто провел первый сезон в составе национальной сборной России по хоккею.
                        </div>
                    </div>
                    <div class="nomination-block__footer">
                        <div class="nomination-block__info">
                                    <span class="nomination-block__info-icon">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>

                            <span class="nomination-block__info-text">
                                        определяется представителями СМИ
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="nomination-block">
                    <div class="nomination-block__top">
                        <div class="nomination-block__icon nomination-block__icon--best-tank"></div>
                        <div class="nomination-block__title">Лучший бомбардир</div>
                        <div class="nomination-block__desc">
                            награждается игрок, набравший наибольшее количество очков по системе гол+пас в матчах за национальной сборной России по хоккею.
                        </div>
                    </div>
                    <div class="nomination-block__footer">
                        <div class="nomination-block__info">
                                    <span class="nomination-block__info-icon">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>

                            <span class="nomination-block__info-text">
                                        определяется игровой статистикой
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="nomination-block">
                    <div class="nomination-block__top">
                        <div class="nomination-block__icon nomination-block__icon--best-sniper"></div>
                        <div class="nomination-block__title">Лучший снайпер</div>
                        <div class="nomination-block__desc">
                            награждается игрок, забросивший наибольшее число шайб среди всех игроков в матчах за национальной сборной России по хоккею.
                        </div>
                    </div>
                    <div class="nomination-block__footer">
                        <div class="nomination-block__info">
                                    <span class="nomination-block__info-icon">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>

                            <span class="nomination-block__info-text">
                                        определяется игровой статистикой
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="nomination-block">
                    <div class="nomination-block__top">
                        <div class="nomination-block__icon nomination-block__icon--hidden-player"></div>
                        <div class="nomination-block__title">Незаметный герой</div>
                        <div class="nomination-block__desc">
                            награждается член национальной сборной России по хоккею, не относящийся к игрокам и тренерскому штабу, внесший наибольший вклад в деятельность команды по мнению игроков и тренерского штаба национальной сборной России по хоккею.
                        </div>
                    </div>
                    <div class="nomination-block__footer">
                        <div class="nomination-block__info">
                                    <span class="nomination-block__info-icon">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>

                            <span class="nomination-block__info-text">
                                        определяется игроками и тренерами сборной команды
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="nomination-block">
                    <div class="nomination-block__top">
                        <div class="nomination-block__icon nomination-block__icon--best-lider"></div>
                        <div class="nomination-block__title">Лидер команды</div>
                        <div class="nomination-block__desc">
                            награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
                        </div>
                    </div>
                    <div class="nomination-block__footer">
                        <div class="nomination-block__info">
                                    <span class="nomination-block__info-icon">
                                        <i class="fa fa-info" aria-hidden="true"></i>
                                    </span>

                            <span class="nomination-block__info-text">
                                        определяется всеми членами сборной команды
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nominees" id="scroll-nominees">
        <div class="wrapp main-nominees__wrapp">
            <div class="main-nominees__stars">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="main-nominees__star main-nominees__star--first svg-inject-me">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="main-nominees__star main-nominees__star--second svg-inject-me">
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
                </h3>
                <div class="main-nominees__items">
                    <div class="nominees-block">
                        <div class="nominees-block__star">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                        </div>
                        <div class="nominees-block__top">
                            <div class="nominees-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                            </div>
                            <div class="nominees-block__info">
                                <div class="nominees-block__name">Дацюк Павел</div>
                                <div class="nominees-block__type">Центральный нападающий</div>
                            </div>
                        </div>
                        <div class="nominees-block__content">
                            Лауреаты Премии в номинациях
                            <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                            основании индивидуальных статистических игровых показателей
                            игроков.
                        </div>
                    </div>
                    <div class="nominees-block">
                        <div class="nominees-block__star">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                        </div>
                        <div class="nominees-block__top">
                            <div class="nominees-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                            </div>
                            <div class="nominees-block__info">
                                <div class="nominees-block__name">Дацюк Павел</div>
                                <div class="nominees-block__type">Центральный нападающий</div>
                            </div>
                        </div>
                        <div class="nominees-block__content">
                            Лауреаты Премии в номинациях
                            <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                            основании индивидуальных статистических игровых показателей
                            игроков.
                        </div>
                    </div>
                    <div class="nominees-block">
                        <div class="nominees-block__star">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                        </div>
                        <div class="nominees-block__top">
                            <div class="nominees-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                            </div>
                            <div class="nominees-block__info">
                                <div class="nominees-block__name">Дацюк Павел</div>
                                <div class="nominees-block__type">Центральный нападающий</div>
                            </div>
                        </div>
                        <div class="nominees-block__content">
                            Лауреаты Премии в номинациях
                            <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                            основании индивидуальных статистических игровых показателей
                            игроков.
                        </div>
                    </div>
                </div>

                <h4 class="main-nominees__icon-title main-nominees__icon-title--gent">
                    <span></span>
                    Джентльмен года
                    </h3>
                    <div class="main-nominees__items">
                        <div class="nominees-block">
                            <div class="nominees-block__star">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                            </div>
                            <div class="nominees-block__top">
                                <div class="nominees-block__photo">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                                </div>
                                <div class="nominees-block__info">
                                    <div class="nominees-block__name">Дацюк Павел</div>
                                    <div class="nominees-block__type">Центральный нападающий</div>
                                </div>
                            </div>
                            <div class="nominees-block__content">
                                Лауреаты Премии в номинациях
                                <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                                основании индивидуальных статистических игровых показателей
                                игроков.
                            </div>
                        </div>
                        <div class="nominees-block">
                            <div class="nominees-block__star">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                            </div>
                            <div class="nominees-block__top">
                                <div class="nominees-block__photo">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                                </div>
                                <div class="nominees-block__info">
                                    <div class="nominees-block__name">Дацюк Павел</div>
                                    <div class="nominees-block__type">Центральный нападающий</div>
                                </div>
                            </div>
                            <div class="nominees-block__content">
                                Лауреаты Премии в номинациях
                                <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                                основании индивидуальных статистических игровых показателей
                                игроков.
                            </div>
                        </div>
                        <div class="nominees-block">
                            <div class="nominees-block__star">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                            </div>
                            <div class="nominees-block__top">
                                <div class="nominees-block__photo">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                                </div>
                                <div class="nominees-block__info">
                                    <div class="nominees-block__name">Дацюк Павел</div>
                                    <div class="nominees-block__type">Центральный нападающий</div>
                                </div>
                            </div>
                            <div class="nominees-block__content">
                                Лауреаты Премии в номинациях
                                <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                                основании индивидуальных статистических игровых показателей
                                игроков.
                            </div>
                        </div>
                    </div>

                    <h4 class="main-nominees__icon-title main-nominees__icon-title--junior">
                        <span></span>
                        Лучший новичок
                        </h3>
                        <div class="main-nominees__items">
                            <div class="nominees-block">
                                <div class="nominees-block__star">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                                </div>
                                <div class="nominees-block__top">
                                    <div class="nominees-block__photo">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                                    </div>
                                    <div class="nominees-block__info">
                                        <div class="nominees-block__name">Дацюк Павел</div>
                                        <div class="nominees-block__type">Центральный нападающий</div>
                                    </div>
                                </div>
                                <div class="nominees-block__content">
                                    Лауреаты Премии в номинациях
                                    <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                                    основании индивидуальных статистических игровых показателей
                                    игроков.
                                </div>
                            </div>
                            <div class="nominees-block">
                                <div class="nominees-block__star">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                                </div>
                                <div class="nominees-block__top">
                                    <div class="nominees-block__photo">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                                    </div>
                                    <div class="nominees-block__info">
                                        <div class="nominees-block__name">Дацюк Павел</div>
                                        <div class="nominees-block__type">Центральный нападающий</div>
                                    </div>
                                </div>
                                <div class="nominees-block__content">
                                    Лауреаты Премии в номинациях
                                    <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                                    основании индивидуальных статистических игровых показателей
                                    игроков.
                                </div>
                            </div>
                            <div class="nominees-block">
                                <div class="nominees-block__star">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/star.svg" alt="star" class="svg-inject-me">
                                </div>
                                <div class="nominees-block__top">
                                    <div class="nominees-block__photo">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Дацюк Павел">
                                    </div>
                                    <div class="nominees-block__info">
                                        <div class="nominees-block__name">Дацюк Павел</div>
                                        <div class="nominees-block__type">Центральный нападающий</div>
                                    </div>
                                </div>
                                <div class="nominees-block__content">
                                    Лауреаты Премии в номинациях
                                    <b>«Лучший бомбардир»</b>, <b>«Лучший снайпер»</b> определяются на
                                    основании индивидуальных статистических игровых показателей
                                    игроков.
                                </div>
                            </div>
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
                <div class="main-quotes__item">
                    <div class="quote-block">
                        <div class="quote-block__top">
                            <div class="quote-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="quote-block__info">
                                <div class="quote-block__name">Иван Иванов</div>
                                <div class="quote-block__type">Экс футболист</div>
                            </div>
                        </div>
                        <div class="quote-block__quote">
                            Награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
                        </div>
                    </div>
                </div>
                <div class="main-quotes__item">
                    <div class="quote-block">
                        <div class="quote-block__top">
                            <div class="quote-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="quote-block__info">
                                <div class="quote-block__name">Иван Иванов</div>
                                <div class="quote-block__type">Экс футболист</div>
                            </div>
                        </div>
                        <div class="quote-block__quote">
                            Награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
                        </div>
                    </div>
                </div>
                <div class="main-quotes__item">
                    <div class="quote-block">
                        <div class="quote-block__top">
                            <div class="quote-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="quote-block__info">
                                <div class="quote-block__name">Иван Иванов</div>
                                <div class="quote-block__type">Экс футболист</div>
                            </div>
                        </div>
                        <div class="quote-block__quote">
                            Награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
                        </div>
                    </div>
                </div>
                <div class="main-quotes__item">
                    <div class="quote-block">
                        <div class="quote-block__top">
                            <div class="quote-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="quote-block__info">
                                <div class="quote-block__name">Иван Иванов</div>
                                <div class="quote-block__type">Экс футболист</div>
                            </div>
                        </div>
                        <div class="quote-block__quote">
                            Награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
                        </div>
                    </div>
                </div>
                <div class="main-quotes__item">
                    <div class="quote-block">
                        <div class="quote-block__top">
                            <div class="quote-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="quote-block__info">
                                <div class="quote-block__name">Иван Иванов</div>
                                <div class="quote-block__type">Экс футболист</div>
                            </div>
                        </div>
                        <div class="quote-block__quote">
                            Награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
                        </div>
                    </div>
                </div>
                <div class="main-quotes__item">
                    <div class="quote-block">
                        <div class="quote-block__top">
                            <div class="quote-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="quote-block__info">
                                <div class="quote-block__name">Иван Иванов</div>
                                <div class="quote-block__type">Экс футболист</div>
                            </div>
                        </div>
                        <div class="quote-block__quote">
                            Награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
                        </div>
                    </div>
                </div>
                <div class="main-quotes__item">
                    <div class="quote-block">
                        <div class="quote-block__top">
                            <div class="quote-block__photo">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/photo.jpg" alt="Иван Иванов">
                            </div>
                            <div class="quote-block__info">
                                <div class="quote-block__name">Иван Иванов</div>
                                <div class="quote-block__type">Экс футболист</div>
                            </div>
                        </div>
                        <div class="quote-block__quote">
                            Награждается член национальной сборной России по хоккею, который является примером для партнеров (на льду и вне его) и который внес наибольший вклад в успехи команды по мнению всех членов национальной сборной России по хоккею.
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-quotes__slider">
                <div class="slider js-quotes-slider" data-slider data-initial-start="0" data-end="5" data-changed-delay="200">
                    <span class="slider-handle" data-slider-handle role="slider" aria-controls="js-sliderQuoteOutput" tabindex="1"></span>
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
            <div class="main-news__content">
                <div class="main-news-list">
                    <div class="main-news-list__items">
                        <div class="main-news-list__item">
                            <div class="main-news-list__photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg);"></div>
                            <div class="main-news-list__info">
                                <div class="main-news-list__date">02.10</div>
                                <a href="#" class="main-news-list__title">
                                    «Нью-Джерси» в овертайме победил «Берн» в выставочном матче
                                </a>
                            </div>
                        </div>
                        <div class="main-news-list__item">
                            <div class="main-news-list__photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg);"></div>
                            <div class="main-news-list__info">
                                <div class="main-news-list__date">29.09</div>
                                <a href="#" class="main-news-list__title">Когда лом ЦСКА сильнее кисти «Салавата». Это вредно для всей
                                    КХЛ</a>
                            </div>
                        </div>
                        <div class="main-news-list__item">
                            <div class="main-news-list__photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg);"></div>
                            <div class="main-news-list__info">
                                <div class="main-news-list__date">29.09</div>
                                <a href="#" class="main-news-list__title">От $ 650 тыс. до $ 9,54 млн. Все зарплаты россиян в НХЛ в
                                    сезоне-2018/19</a>
                            </div>
                        </div>
                        <div class="main-news-list__item">
                            <div class="main-news-list__photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg);"></div>
                            <div class="main-news-list__info">
                                <div class="main-news-list__date">27.09</div>
                                <a href="#" class="main-news-list__title">Чемпионат мира вернётся в «чёрный» Питер. Главное не звать 14
                                    энхаэловцев</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-news-last-news">
                    <div class="main-news-last-news__photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg);"></div>
                    <div class="main-news-last-news__info">
                        <div class="main-news-last-news__date">02.10</div>
                        <a class="main-news-last-news__title">«Сынок, это фантастика!» <br>«Сибирь» наконец-то победила</a>
                    </div>
                </div>
            </div>
            <div class="main-news__footer">
                <button class="btn-brown-style main-news__btn">
                    Читать все новости
                    <span>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                </button>
            </div>
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
                    <div class="main-media-video__top">
                        <div class="main-media-info main-media-info--video">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/media-video.svg" alt="Видео" class="main-media-info__icon svg-inject-me">
                            <h4 class="main-media-info__title">Видео</h4>
                            <button type="button" class="main-media-info__all-btn" data-fancybox data-src="#slider-media--video">
                                <span>Все видео</span>
                                <span class="main-media-info__all-btn-icon">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </span>
                            </button>
                        </div>
                        <div class="main-media-video__play">
                            <a href="javascript:;" data-fancybox data-src="#slider-media--video" class="main-media-video__photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video1.jpg);">
                                <button type="button" class="media-round-video">
                                    <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="main-media-video__bottom">
                        <a href="javascript:;" data-fancybox data-src="#slider-media--video" class="main-media-video__photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video.jpg);">
                            <button type="button" class="media-round-video">
                                <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="slider-media" id="slider-media--video">
                    <div class="slider-media__content">
                        <h5 class="slider-media__title">Видео</h5>
                        <button data-fancybox-close class="slider-media__close"></button>
                        <div class="slider-media__wrapp">
                            <div class="slider-media__big">
                                <div class="slider-media__item">

                                    <video controls poster="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" preload="none">
                                        <source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/example.mp4">
                                    </video>
                                </div>
                                <div class="slider-media__item">

                                    <video controls poster="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" preload="none">
                                        <source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/example.mp4">
                                    </video>
                                </div>
                                <div class="slider-media__item">

                                    <video controls poster="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" preload="none">
                                        <source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/example.mp4">
                                    </video>
                                </div>
                                <div class="slider-media__item">

                                    <video controls poster="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" preload="none">
                                        <source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/example.mp4">
                                    </video>
                                </div>
                                <div class="slider-media__item">

                                    <video controls poster="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" preload="none">
                                        <source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/example.mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="slider-media__thumbnails">
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" alt="">
                                        <button type="button" class="media-round-video">
                                            <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video.jpg" alt="">
                                        <button type="button" class="media-round-video">
                                            <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video1.jpg" alt="">
                                        <button type="button" class="media-round-video">
                                            <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video2.jpg" alt="">
                                        <button type="button" class="media-round-video">
                                            <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video2.jpg" alt="">
                                        <button type="button" class="media-round-video">
                                            <i class="media-round-video__icon fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="slider-media__btn slider-media__btn--right">
                                <i class="fa fa-angle-right"></i>
                            </button>
                            <button type="submit" class="slider-media__btn slider-media__btn--left">
                                <i class="fa fa-angle-left"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="main-media-photo">
                    <div class="main-media-photo__left">
                        <div class="main-media-info main-media-info--photo">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/media-photo.svg" alt="Видео" class="main-media-info__icon svg-inject-me">
                            <h4 class="main-media-info__title">Фото</h4>
                            <button type="button" class="main-media-info__all-btn" data-fancybox data-src="#slider-media--photo">
                                <span>Все фото</span>
                                <span class="main-media-info__all-btn-icon">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </span>
                            </button>
                        </div>
                        <a href="#" class="main-media-photo__picture" data-fancybox data-src="#slider-media--photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video1.jpg)"></a>
                    </div>
                    <div class="main-media-photo__right">
                        <a href="#" class="main-media-photo__top main-media-photo__picture" data-fancybox data-src="#slider-media--photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video.jpg)"></a>
                        <div class="main-media-photo__bottom">
                            <a href="#" class="main-media-photo__picture" data-fancybox data-src="#slider-media--photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video.jpg)"></a>
                            <a href="#" class="main-media-photo__picture" data-fancybox data-src="#slider-media--photo" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video2.jpg)"></a>
                        </div>
                    </div>
                </div>
                <div class="slider-media" id="slider-media--photo">
                    <div class="slider-media__content">
                        <h5 class="slider-media__title">Фото</h5>
                        <button data-fancybox-close class="slider-media__close"></button>
                        <div class="slider-media__wrapp">
                            <div class="slider-media__big">
                                <div class="slider-media__item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" alt="">

                                </div>
                                <div class="slider-media__item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video.jpg" alt="">

                                </div>
                                <div class="slider-media__item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video1.jpg" alt="">

                                </div>
                                <div class="slider-media__item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video2.jpg" alt="">

                                </div>
                                <div class="slider-media__item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video2.jpg" alt="">

                                </div>
                            </div>
                            <div class="slider-media__thumbnails">
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/news.jpg" alt="">
                                    </div>
                                </div>
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video.jpg" alt="">
                                    </div>
                                </div>
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="slider-media__item">
                                    <div class="slider-media__thumbnail">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/trash/video2.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="slider-media__btn slider-media__btn--right">
                                <i class="fa fa-angle-right"></i>
                            </button>
                            <button type="submit" class="slider-media__btn slider-media__btn--left">
                                <i class="fa fa-angle-left"></i>
                            </button>
                        </div>
                    </div>
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
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/svg/hokey-federation-color.svg" alt="Федерация Хоккея России" class="svg-inject-me">
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>