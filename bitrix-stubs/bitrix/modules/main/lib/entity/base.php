<?php

namespace Bitrix\Main\Entity;

use Bitrix\Main;

/**
 * Base - класс базовой сущности.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/base/index.php
 */
class Base
{
    /**
     * Undocumented function
     *
     * @param string $entityName
     * @return Base
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function getInstance(string $entityName): Base
    {
        return new Base();
    }

    /**
     * Фабрика полей.
     *
     * @param string $fieldName
     * @param array  $fieldInfo
     * @return Field
     * @throws Main\ArgumentException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/base/initializefield.php
     */
    public function initializeField(string $fieldName, array $fieldInfo): Field
    {
        return new Field('');
    }

    /**
     * Undocumented function
     *
     * @param string $className
     * @return void
     */
    public function initialize(string $className): void
    { }

    /**
     * Undocumented function
     *
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function postInitialize(): void
    { }

    /**
     * Undocumented function
     *
     * @param array|Field $fieldInfo
     * @param null|string $fieldName
     * @return Field|false
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public function addField($fieldInfo, ?string $fieldName = null)
    { }

    /**
     * Undocumented function
     *
     * @param string $refEntityName
     * @return integer
     */
    public function getReferencesCountTo(string $refEntityName): int
    {
        return 0;
    }

    /**
     * Undocumented function
     *
     * @param string $refEntityName
     * @return array
     */
    public function getReferencesTo($refEntityName): array
    {
        return [];
    }

    /**
     * getters
     *
     * @return Field[]
     */
    public function getFields(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param mixed $name
     * @return Field
     * @throws Main\ArgumentException
     */
    public function getField($name): Field
    {
        return new Field();
    }

    /**
     * Undocumented function
     *
     * @param mixed $name
     * @return boolean
     */
    public function hasField($name): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @return ScalarField[]
     */
    public function getScalarFields(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param $name
     * @return UField
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     * @deprecated
     */
    public function getUField($name): UField
    {
        return new UField();
    }

    /**
     * Undocumented function
     *
     * @param $name
     * @return boolean
     * @throws Main\SystemException
     * @deprecated
     */
    public function hasUField($name): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getName(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getFullName(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getNamespace(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getModule(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return DataManager
     */
    public function getDataClass()
    {
        return new DataManager();
    }

    /**
     * Undocumented function
     *
     * @return Main\DB\Connection
     * @throws Main\SystemException
     */
    public function getConnection()
    {
        return new Main\DB\Connection();
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getDBTableName(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string|array
     */
    public function getPrimary()
    { }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getPrimaryArray(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function getAutoIncrement()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function isUts()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function isUtm()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function getUfId()
    { }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return boolean
     */
    public static function isExists(string $name): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @param string $entityName
     * @return string
     */
    public static function normalizeEntityClass(string $entityName): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getCode(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getLangCode(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $str
     * @return string
     */
    public static function camel2snake(string $str): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $str
     * @return string
     */
    public static function snake2camel(string $str): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $str
     * @return string
     */
    public static function normalizeName(string $entityName): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param Query $query
     * @param string $entity_name
     * @return Base
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function getInstanceByQuery(Query $query, ?string &$entity_name = null): Base
    {
        return new Base();
    }

    /**
     * Undocumented function
     *
     * @param string $entityName
     * @param null|array[]|Field[] $fields
     * @param array $parameters [namespace, table_name, uf_id]
     * @return Base
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function compileEntity(string $entityName, ?array $fields = null, array $parameters = []): Base
    {
        return new Base();
    }

    /**
     * Undocumented function
     *
     * @return string[] Array of SQL queries
     * @throws Main\SystemException
     */
    public function compileDbTableStructureDump(): array
    {
        return [];
    }

    /**
     * Creates table according to Fields collection
     *
     * @return void
     * @throws Main\SystemException
     */
    public function createDbTable(): void
    { }

    /**
     * Undocumented function
     *
     * @param Base|string $entity
     * @return boolean
     */
    public static function destroy($entity): bool
    {
        return false;
    }

    /**
     * Reads data from cache.
     *
     * @param integer $ttl TTL.
     * @param string $cacheId The cache ID.
     * @param boolean $countTotal Whether to read total count from the cache.
     * @return Main\DB\ArrayResult|null
     * @throws Main\SystemException
     */
    public function readFromCache(int $ttl, string $cacheId, bool $countTotal = false): ?Main\DB\ArrayResult
    {
        return null;
    }

    /**
     * Undocumented function
     *
     * @param Main\DB\Result $result A query result to cache.
     * @param string $cacheId The cache ID.
     * @param boolean $countTotal Whether to write total count to the cache.
     * @return Main\DB\ArrayResult
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function writeToCache(Main\DB\Result $result, string $cacheId, bool $countTotal = false)
    {
        return new Main\DB\ArrayResult();;
    }

    /**
     * Returns cache TTL for the entity, possibly limited by the .settings.php:
     * 'cache_flags' => array('value'=> array(
     *		"b_group_max_ttl" => 200,
     *		"b_group_min_ttl" => 100,
     * ))
     * Maximum is a higher-priority.
     *
     * @param integer $ttl Preferable TTL
     * @return integer Caclulated TTL
     */
    public function getCacheTtl(int $ttl): int
    {
        return 0;
    }

    /**
     * Cleans all cache entries for the entity.
     *
     * @return void
     * @throws Main\SystemException
     */
    public function cleanCache(): void
    { }

    /**
     * Sets a flag indicating full text index support for a field.
     *
     * @param string $field
     * @param boolean $mode
     * @return void
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function enableFullTextIndex(string $field, bool $mode = true): void
    { }

    /**
     * Returns true if full text index is enabled for a field.
     *
     * @param string $field
     *
     * @return boolean
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function fullTextIndexEnabled(string $field): bool
    {
        return false;
    }
}
