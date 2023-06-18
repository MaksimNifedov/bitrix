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
                        'digital:hl.list', // Замените 'yournamespace' на ваше пространство имён (если требуется)
                        '.default',
                        array(
                            'HLBLOCK_ID' => 2, // Замените 123 на ID вашего highload-блока
                            'CACHE_TYPE' => 'A',
                            'CACHE_TIME' => 36000000,
                        ),
                        false
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
