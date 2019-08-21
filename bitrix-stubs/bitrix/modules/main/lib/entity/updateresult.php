<?php
namespace Bitrix\Main\Entity;

use Bitrix\Main\DB\Connection;

/**
 * UpdateResult - класс обновлений записей. Расширение класса Result.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/updateresult/index.php
 */
class UpdateResult extends Result
{
    /**
     * Undocumented function
     *
     * @param Connection $connection
     * @return void
     */
    public function setAffectedRowsCount(Connection $connection): void
    { }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function getAffectedRowsCount(): int
    {
        return 0;
    }

    /**
     * Undocumented function
     *
     * @param mixed $primary
     * @return void
     */
    public function setPrimary($primary): void
    { }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getPrimary(): array
    {
        return [];
    }

    /**
     * Метод возвращает ID обновлённой записи.
     * 
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/updateresult/getid.php
     */
    public function getId(): int
    {
        return 0;
    }
}
