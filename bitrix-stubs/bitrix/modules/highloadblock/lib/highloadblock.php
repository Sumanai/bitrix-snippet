<?php

namespace Bitrix\Highloadblock;

use Bitrix\Main;
use Bitrix\Main\Entity;

/**
 * HighloadBlockTable - класс для работы с таблицей highload-блоков.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocktable/index.php
 */
class HighloadBlockTable extends Entity\DataManager
{
    /**
     * Метод возвращает название таблицы highload-блоков в базе данных.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocktable/gettablename.php
     */
    public static function getTableName(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public static function getMap(): array
    {
        return [];
    }

    /**
     * Метод добавляет новый highload-блок.
     *
     * @param array $data Массив, содержащий значения полей highload-блока.
     * @return Entity\AddResult
     * @throws \Bitrix\Main\SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocktable/add.php
     */
    public static function add(array $data): Entity\AddResult
    {
        return new Entity\AddResult();
    }

    /**
     * Метод изменяет параметры highload-блока с ключом $primary.
     *
     * @param mixed $primary Первичный ключ. Идентификатор highload-блока.
     * @param array $data Массив, содержащий значения полей highload-блока.
     * @return Entity\UpdateResult
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocktable/update.php
     */
    public static function update($primary, array $data)
    {
        return new Entity\UpdateResult();
    }

    /**
     * Метод удаляет highload-блок с ключом $primary.
     *
     * @param mixed $primary Идентификатор highload-блока.
     * @return Main\DB\Result|Entity\DeleteResult
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/highloadblock/highloadblocktable/delete.php
     */
    public static function delete($primary): Entity\DeleteResult
    {
        return new Entity\DeleteResult();
    }

    /**
     * Undocumented function
     *
     * @param array|int|string $hlblock Could be a block, ID or NAME of block.
     * @return array|null
     */
    public static function resolveHighloadblock($hlblock): ?array
    { }

    /**
     * Undocumented function
     *
     * @param array|int|string $hlblock Could be a block, ID or NAME of block.
     * @return Entity\Base
     * @throws \Bitrix\Main\SystemException
     */
    public static function compileEntity($hlblock): Entity\Base
    {
        return new Entity\Base();
    }

    /**
     * Undocumented function
     *
     * @param array $field
     * @return mixed
     */
    public static function OnBeforeUserTypeAdd(array $field)
    { }

    /**
     * Undocumented function
     *
     * @param array $field
     * @return mixed
     */
    public static function onAfterUserTypeAdd(array $field)
    { }

    /**
     * Undocumented function
     *
     * @param array $field
     * @return mixed
     */
    public static function OnBeforeUserTypeDelete(array $field)
    { }

    /**
     * Undocumented function
     *
     * @param Entity\Base $hlentity
     * @param array $userfield
     * @return string
     */
    public static function getUtmEntityClassName(Entity\Base $hlentity, array $userfield): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param array $hlblock
     * @param array $userfield
     * @return string
     */
    public static function getMultipleValueTableName(array $hlblock, array $userfield): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public static function validateName(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public static function validateTableName(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param mixed $value
     * @param mixed $primary
     * @param array $row
     * @param Entity\Field $field
     * @return boolean
     */
    public static function validateTableExisting($value, $primary, array $row, Entity\Field $field): bool
    {
        return false;
    }
}
