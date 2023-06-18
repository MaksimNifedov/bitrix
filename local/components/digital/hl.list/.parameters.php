<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentParameters = array(
    'PARAMETERS' => array(
        'HLBLOCK_ID' => array(
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_BLOCK_ID_PARAM'),
            'TYPE' => 'STRING'
        ),
        'DETAIL_URL' => array(
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_DETAIL_URL_PARAM'),
            'TYPE' => 'STRING'
        ),
        'ELEMENTS_COUNT' => array(
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_ROWS_PER_PAGE_PARAM'),
            'TYPE' => 'STRING'
        ),
        'PAGEN_ID' => array(
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_PAGEN_ID_PARAM'),
            'TYPE' => 'STRING',
            'DEFAULT' => 'page'
        ),
        'FILTER_NAME' => array(
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_FILTER_NAME_PARAM'),
            'TYPE' => 'STRING'
        ),
        'SORT_FIELD' => array(
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_SORT_FIELD_PARAM'),
            'TYPE' => 'STRING',
            'DEFAULT' => 'ID'
        ),
        'SORT_ORDER' => array(
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_SORT_ORDER_PARAM'),
            'TYPE' => 'LIST',
            'DEFAULT' => 'DESC',
            'VALUES' => array(
                'DESC' => Loc::getMessage('HLLIST_COMPONENT_SORT_ORDER_PARAM_DESC'),
                'ASC' => Loc::getMessage('HLLIST_COMPONENT_SORT_ORDER_PARAM_ASC')
            )
        ),
        'CHECK_PERMISSIONS' => array(
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('HLLIST_COMPONENT_CHECK_PERMISSIONS_PARAM'),
            'TYPE' => 'CHECKBOX'
        ),
    ),
);
