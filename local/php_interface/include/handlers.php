<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\EventManager;

$eventManager = EventManager::getInstance();

/**
 * Loading composer
 */
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php'))
{
    require_once $_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php';
}


