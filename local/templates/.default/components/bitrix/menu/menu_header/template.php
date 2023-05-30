<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main\Localization\Loc; ?>
<? if (!empty($arResult)) : ?>
        <nav class="header-menu">
        <ul class="vertical medium-horizontal menu header-menu__list">
			<?
			foreach ($arResult as $arItem) : ?>
				<li class="header-menu__item"><a href="<?= $arItem["LINK"] ?>" class="header-menu__link"><?= $arItem["TEXT"] ?></a></li>
			<? endforeach ?>
		</ul>
	</nav>
<? endif ?>