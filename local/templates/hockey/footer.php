<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
</div>
<div class="footer">
    <div class="wrapp footer__wrapp">
        <div class="grid-x grid-padding-x footer__content">
            <div class="small-4 footer__copyright">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/footer__text1.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </div>
            <div class="footer__socials">
                <div class="footer-socials">
                    <? $APPLICATION->IncludeComponent(
                        'digital:hl.list', // Замените 'yournamespace' на ваше пространство имён (если требуется)
                        '.default',
                        array(
                            'HLBLOCK_ID' => 2, // Замените 123 на ID вашего highload-блока
                            'CACHE_TYPE' => 'A',
                            'CACHE_TIME' => 36000000,
                        ),
                        false
                    ); ?>
                </div>
            </div>
            <div class="small-4">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/includes/footer__text2.php",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
