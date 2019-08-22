<?php
namespace Bitrix\Highloadblock;

use Bitrix\Main\Entity;

/**
 * HighloadBlockLangTable - класс для работы с таблицей языкозависимых параметров highload-блоков.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocklangtable/index.php
 */
class HighloadBlockLangTable extends Entity\DataManager
{
    /**
     * Метод возвращает название таблицы языкозависимых параметров highload-блоков.
     * 
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocklangtable/gettablename.php
     */
    public static function getTableName(): string
    {
        return '';
    }

    /**
     * Метод возвращает список полей для таблицы языкозависимых параметров highload-блока.
     * 
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocklangtable/getmap.php
     */
    public static function getMap(): array
    {
        return [];
    }

    /**
     * Метод возвращает валидатор для поля LID.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocklangtable/validatelid.php
     */
    public static function validateLid(): array
    {
        return [];
    }

    /**
     * Метод возвращает валидатор для поля NAME.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocklangtable/validatename.php
     */
    public static function validateName(): array
    {
        return [];
    }
}