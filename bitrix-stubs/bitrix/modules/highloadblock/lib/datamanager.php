<?php

namespace Bitrix\Highloadblock;

use Bitrix\Main\Entity;

/**
 * DataManager - класс для работы с данными highload-блоков.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/datamanager/index.php
 */
abstract class DataManager extends Entity\DataManager
{
    /**
     * Метод возвращает информацию о highload-блоке.
     *
     * @return null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/datamanager/gethighloadblock.php
     */
    public static function getHighloadBlock()
    {
        return null;
    }
}
