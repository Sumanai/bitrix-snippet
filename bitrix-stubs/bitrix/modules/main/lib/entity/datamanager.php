<?php

namespace Bitrix\Main\Entity;

use Bitrix\Main;
use Bitrix\Main\Entity\Query\Filter\ConditionTree as Filter;

/**
 * DataManager - абстрактный базовый класс для работы с объектами данных.
 * Обращается к пространству имён:
 * \Main;
 * \Main\Localization\Loc
 * Класс загружает языковые фразы для текущего скрипта: Loc::loadMessages(__FILE__).
 * Если новый класс отвечает за доступ к таблице БД, он должен быть наследником класса Bitrix\Main\Entity\DataManager и должен переопределять только два метода:
 * getTableName для получения имени таблицы,
 * getMap для получения массива колонок таблицы - объектов Bitrix\Main\Entity\Field
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/index.php
 */
abstract class DataManager
{
    const EVENT_ON_BEFORE_ADD = "OnBeforeAdd";
    const EVENT_ON_ADD = "OnAdd";
    const EVENT_ON_AFTER_ADD = "OnAfterAdd";
    const EVENT_ON_BEFORE_UPDATE = "OnBeforeUpdate";
    const EVENT_ON_UPDATE = "OnUpdate";
    const EVENT_ON_AFTER_UPDATE = "OnAfterUpdate";
    const EVENT_ON_BEFORE_DELETE = "OnBeforeDelete";
    const EVENT_ON_DELETE = "OnDelete";
    const EVENT_ON_AFTER_DELETE = "OnAfterDelete";

    /**
     * Метод возвращает объект сущности.
     *
     * @return Base
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/getentity.php
     */
    public static function getEntity()
    {
        return new Base();
    }

    /**
     * Undocumented function
     *
     * @param mixed $class
     * @return void
     */
    public static function unsetEntity($class)
    { }

    /**
     * Метод возвращает имя таблицы БД для сущности.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/gettablename.php
     */
    public static function getTableName(): string
    {
        return '';
    }

    /**
     * Метод возвращает имя соединения для сущности.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/getconnectionname.php
     */
    public static function getConnectionName(): string
    {
        return '';
    }

    /**
     * Метод возвращает описание карты сущностей.
     * To get initialized fields @see \Bitrix\Main\Entity\Base::getFields() and \Bitrix\Main\Entity\Base::getField()
     *
     * @return array
     */
    public static function getMap(): array
    {
        return [];
    }

    public static function getUfId()
    {
        return null;
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public static function isUts()
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public static function isUtm()
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @param Base $entity
     * @return null
     */
    public static function postInitialize(Base $entity)
    {
        return null;
    }

    /**
     * Метод возвращает выборку по первичному ключу сущности и по опциональным параметрам \Bitrix\Main\Entity\DataManager::getList.
     *
     * @param mixed $primary Первичный ключ сущности
     * @param array $parameters Дополнительные параметры \Bitrix\Main\Entity\DataManager::getList
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/getbyprimary.php
     */
    public static function getByPrimary($primary, array $parameters = []): Main\DB\Result
    {
        return new Main\DB\Result('');
    }

    /**
     * Метод возвращает выборку по первичному ключу сущности.
     *
     * @param mixed $id Первичный ключ сущности.
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/getbyid.php
     */
    public static function getById($id): Main\DB\Result
    {
        return new Main\DB\Result('');
    }

    /**
     * Метод возвращает один столбец (или null) по первичному ключу сущности.
     *
     * @param mixed $id Первичный ключ сущности.
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/getrowbyid.php
     */
    public static function getRowById($id): ?array
    {
        return [];
    }

    /**
     * Метод возвращает один столбец (или null) по параметрам для \Bitrix\Main\Entity\DataManager::getList.
     *
     * @param array $parameters Первичный ключ сущности.
     * @return array|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/getrow.php
     */
    public static function getRow(array $parameters): ?array
    {
        return [];
    }

    /**
     * Метод выполняет запрос и возвращает отобранные по параметрам запроса данные. Этот метод - алиас методов функций объектов \Bitrix\Main\Entity\Query.
     *
     * @param array $parameters Массив параметров запроса. Возможные ключи:
     * + select - массив фильтров в части SELECT запроса, алиасы возможны в виде: "alias"=>"field".
     * + filter - массив фильтров в части WHERE запроса в виде: "(condition)field"=>"value".
     * also could be an instance of Filter;
     * + group - массив полей в части GROUP BY запроса.
     * + order - массив полей в части ORDER BY запроса в виде: "field"=>"asc|desc".
     * + limit - целое число, указывающее максимальное число столбцов в выборке (Подобно LIMIT n в MySql)
     * + offset - целое число, указывающее номер первого столбца в результате. (Подобно LIMIT n, 100 в MySql)
     * + runtime - массив полей сущности, создающихся динамически.
     * + cache - array of cache options:
     * + + ttl - integer indicating cache TTL;
     * + + cache_joins - boolean enabling to cache joins, false by default.
     *
     * @return Main\DB\Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @see Query::filter()
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/getlist.php
     */
    public static function getList(array $parameters = []): Main\DB\Result
    {
        return new Main\DB\Result('');
    }

    /**
     * Метод выполняет COUNT запрос к сущности и возвращает результат.
     *
     * @param array|Filter $filter
     * @param array $cache An array of cache options
     * + "ttl" => integer indicating cache TTL
     * @return integer
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/getcount.php
     */
    public static function getCount($filter = [], array $cache = []): int
    {
        return 0;
    }

    /**
     * Метод создаёт и возвращает объект запроса для сущности.
     *
     * @return Query
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/query.php
     */
    public static function query(): Query
    {
        return new Query('');
    }

    /**
     * Метод проверяет поля данных перед записью в БД. Результат проверки храниться в объекте $result.
     *
     * @param Result $result
     * @param mixed $primary
     * @param array $data
     * @return void
     * @throws Main\ArgumentException
     * @throws Main\SystemException
     */
    public static function checkFields(Result $result, $primary, array $data): void
    { }

    /**
     * Метод добавляет столбец в таблицу сущностей.
     *
     * @param array $data An array with fields like
     * 	array(
     * 		"fields" => array(
     * 			"FIELD1" => "value1",
     * 			"FIELD2" => "value2",
     * 		),
     * 		"auth_context" => \Bitrix\Main\Authentication\Context object
     *	)
     *	or just a plain array of fields.
     *
     * @return AddResult Contains ID of inserted row
     * @throws \Exception
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/add.php
     */
    public static function add(array $data)
    {
        return new AddResult();
    }

    /**
     * Метод обновляет столбец в таблице объекта по первичному ключу.
     *
     * @param mixed $primary Первичный ключ.
     * @param array $data Данные для обновления.
     * 	array(
     * 		"fields" => array(
     * 			"FIELD1" => "value1",
     * 			"FIELD2" => "value2",
     * 		),
     * 		"auth_context" => \Bitrix\Main\Authentication\Context object
     *	)
     *	or just a plain array of fields.
     *
     * @return UpdateResult
     * @throws \Exception
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/update.php
     */
    public static function update($primary, array $data)
    {
        return new UpdateResult();
    }

    /**
     * Метод удаляет столбец в таблице сущности по первичному ключу.
     *
     * @param mixed $primary
     * @return DeleteResult
     * @throws \Exception
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/delete.php
     */
    public static function delete($primary)
    {
        return new DeleteResult();
    }

    /**
     * Метод устанавливает флаг поддержки шифрования для поля.
     *
     * @param string $field Поле
     * @param boolean $mode Режим шифрования
     * @return void
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/enablecrypto.php
     */
    public static function enableCrypto(string $field, boolean $mode = true): void
    { }

    /**
     * Метод возвращает true если шифрование разрешено для поля.
     *
     * @param string $field Поле
     * @return boolean
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/datamanager/cryptoenabled.php
     */
    public static function cryptoEnabled(string $field): bool
    {
        return false;
    }

    /*
    An inheritor class can define the event handlers for own events.
    Why? To prevent from rewriting the add/update/delete functions.
    These handlers are triggered in the Bitrix\Main\Entity\Event::send() function
    */
    public static function onBeforeAdd(Event $event)
    { }
    public static function onAdd(Event $event)
    { }
    public static function onAfterAdd(Event $event)
    { }
    public static function onBeforeUpdate(Event $event)
    { }
    public static function onUpdate(Event $event)
    { }
    public static function onAfterUpdate(Event $event)
    { }
    public static function onBeforeDelete(Event $event)
    { }
    public static function onDelete(Event $event)
    { }
    public static function onAfterDelete(Event $event)
    { }
}
