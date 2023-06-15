<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
</div>
<div class="footer">
    <div class="wrapp footer__wrapp">
        <div class="grid-x grid-padding-x footer__content">
            <div class="small-4 footer__copyright">
                © Премия "Герои Хоккея"<br>
                Все права защищены
            </div>
            <div class="footer__socials">
                <div class="footer-socials">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:highloadblock.list",
                        "my_hl",
                        Array(
                            "BLOCK_ID" => "2",
                            "CHECK_PERMISSIONS" => "N",
                            "COMPONENT_TEMPLATE" => "my_hl",
                            "DETAIL_URL" => "",
                            "FILTER_NAME" => "",
                            "PAGEN_ID" => "page",
                            "ROWS_PER_PAGE" => "",
                            "SORT_FIELD" => "UF_NAME",
                            "SORT_ORDER" => "DESC"
                        )
                    );?>
                </div>            </div>
            <div class="small-4">
                При использовании материалов ссылка на сайт официальный сайт Федерации Хоккея России обязательна
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
