<?php
namespace Bitrix\Highloadblock;

use Bitrix\Main\Entity;

/**
 * HighloadBlockRightsTable - класс для работы с таблицей прав к highload-блокам.
 * В связи с архитектурой модуля проверка прав доступа в модуле не реализована на уровне запросов. Но вы можете самостоятельно проверить права на тот или иной highload-блок перед действиями с ним с помощью метода \Bitrix\HighloadBlock\HighloadBlockRightsTable::getOperationsName.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblockrightstable/index.php
 */
class HighloadBlockRightsTable extends Entity\DataManager
{
    /**
     * Метод возвращает название таблицы прав к highload-блокам.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblockrightstable/gettablename.php
     */
    public static function getTableName(): string
    {
        return '';
    }

    /**
     * Метод возвращает список полей для таблицы прав к highload-блокам.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblockrightstable/getmap.php
     */
    public static function getMap(): array
    {
        return [];
    }

    /**
     * Метод возвращает валидатор для поля ACCESS_CODE.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblockrightstable/validateaccesscode.php
     */
    public static function validateAccessCode(): array
    {
        return [];
    }

    /**
     * Метод выполняет проверку прав доступа к highload-блоку для текущего пользователя.
     *
     * @param int|array $hlId Идентификатор (или массив идентификаторов) highload-блока.
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblockrightstable/getoperationsname.php
     */
    public static function getOperationsName($hlId): array
    {
        return [];
    }
}