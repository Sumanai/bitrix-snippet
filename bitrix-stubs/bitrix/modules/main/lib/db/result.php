<?php

namespace Bitrix\Main\DB;

/**
 * Result - абстрактный класс для представления данных, полученных в ходе запроса.
 * Он имеет возможность изменять необработанные данные полученные из базы данных в полезные ассоциированные массивы с определёнными десериализированными полями и некоторыми представленными как Дата/время объектами или другими изменениями.
 * Класс имплементирует интерфейс \IteratorAggregate.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/index.php
 */
abstract class Result implements \IteratorAggregate
{
    /**
     * Undocumented function
     *
     * @param resource $result Database-specific query result.
     * @param Connection $dbConnection Connection object.
     * @param \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery Helps to collect debug information.
     * @return void
     */
    public function __construct($result, Connection $dbConnection = null, \Bitrix\Main\Diag\SqlTrackerQuery $trackerQuery = null): void
    { }

    /**
     * Метод возвращает специфичные ресурсы запроса.
     *
     * @return null|resource
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/getresource.php
     */
    public function getResource(): ?\resource
    { }

    /**
     * Метод устанавливает список колонок с алиасами. Это позволяет обойти ограничение базы данных на длину имён колонок.
     *
     * @param array[string]string $replacedAliases Карта алиасов с технического на человекопонятные названия.
     * @return void
     * @see \Bitrix\Main\Db\Result::addReplacedAliases
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/setreplacedaliases.php
     */
    public function setReplacedAliases(array $replacedAliases): void
    { }

    /**
     * Метод расширяет список колонок с алиасами.
     *
     * @param array[string]string $replacedAliases Карта алиасов с технического на человекопонятные названия.
     * @return void
     * @see \Bitrix\Main\Db\Result::setReplacedAliases
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/addreplacedaliases.php
     */
    public function addReplacedAliases(array $replacedAliases): void
    { }

    /**
     * Метод устанавливает внутренний список полей, которые должны быть десериализированы при получении.
     *
     * @param array $serializedFields List of fields.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/setserializedfields.php
     */
    public function setSerializedFields(array $serializedFields): void
    { }

    /**
     * Модификатор получает извлечённый массив как аргумент и модифицирует его как ссылку или возвращает новый массив
     *
     * @param callable $fetchDataModifier Valid callback.
     * @return void
     * @throws \Bitrix\Main\ArgumentException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/addfetchdatamodifier.php
     */
    public function addFetchDataModifier(callable $fetchDataModifier): void
    { }

    /**
     * Метод получает одну строку из запроса и возвращает её в ассоциированном массиве с необработанными данными БД
     *
     * @return array|false
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/fetchraw.php
     */
    public function fetchRaw()
    { }

    /**
     * Метод получает строку из результата запроса и возвращает её в ассоциативном массиве.
     *
     * @param \Bitrix\Main\Text\Converter $converter Конвертер для расшифровки данных при получении.
     * @return array|false
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/fetch.php
     */
    public function fetch(\Bitrix\Main\Text\Converter $converter = null)
    { }

    /**
     * Метод получает все строки запроса и возвращает ассоциированный массив.
     * Если запрос пустой, возвращает пустой массив.
     *
     * @param \Bitrix\Main\Text\Converter $converter Конвертер для расшифровки данных при получении.
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/fetchall.php
     */
    public function fetchAll(\Bitrix\Main\Text\Converter $converter = null): array
    {
        return [];
    }

    /**
     * Метод возвращает массив полей, связанный с колонками в результате запроса.
     *
     * @return \Bitrix\Main\ORM\Fields\ScalarField[]
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/getfields.php
     */
    abstract public function getFields(): array;

    /**
     * Метод возвращает число строк в результате запроса.
     *
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/getselectedrowscount.php
     */
    abstract public function getSelectedRowsCount(): int;

    /**
     * Метод возвращает трекер текущего запроса.
     *
     * @return \Bitrix\Main\Diag\SqlTrackerQuery|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/gettrackerquery.php
     */
    public function getTrackerQuery(): ?\Bitrix\Main\Diag\SqlTrackerQuery
    { }

    /**
     * Undocumented function
     *
     * @return callable[]
     */
    public function getConverters(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param callable[] $converters
     * @return void
     */
    public function setConverters(array $converters): void
    { }

    /**
     * Метод производит запись количества.
     *
     * @param integer $n Записываемое количество
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/setcount.php
     */
    public function setCount(int $n): void
    { }

    /**
     * Метод возвращает записанное количество. Необходимо чтобы запись была сделана ранее.
     *
     * @return integer
     * @throws \Bitrix\Main\ObjectPropertyException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/db/result/getcount.php
     */
    public function getCount(): int
    {
        return 0;
    }

    /**
     * Retrieve an external iterator
     *
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return \Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator(): \Traversable
    {
        return new \Traversable();
    }
}
