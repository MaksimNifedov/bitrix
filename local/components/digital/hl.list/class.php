<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");

class HighloadBlockListComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        if (!isset($arParams["CACHE_TIME"])) {
            $arParams["CACHE_TIME"] = 36000000;
        }

        $arParams["HLBLOCK_ID"] = intval($arParams["HLBLOCK_ID"]);

        return $arParams;
    }

    public function executeComponent()
    {
        if ($this->startResultCache()) {
            if (!Loader::includeModule("highloadblock")) {
                $this->abortResultCache();
                ShowError(GetMessage("HLBLOCK_MODULE_NOT_INSTALLED"));
                return;
            }

            $hlblockId = $this->arParams["HLBLOCK_ID"];
            $hlblock = HL\HighloadBlockTable::getById($hlblockId)->fetch();

            if (!$hlblock) {
                $this->abortResultCache();
                return;
            }

            $this->arResult['HLBLOCK'] = $hlblock;

            $entity = HL\HighloadBlockTable::compileEntity($hlblock);
            $entityDataClass = $entity->getDataClass();

            $items = $entityDataClass::getList([
                "select" => ['*'],
                "order" => array("ID" => "ASC"),
            ])->fetchAll();
            $this->arResult['ITEMS'] = $items;
            $this->includeComponentTemplate();
        }
    }


}
