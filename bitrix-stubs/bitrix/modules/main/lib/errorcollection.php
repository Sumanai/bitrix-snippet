<?php
namespace Bitrix\Main;

use Bitrix\Main\Type\Dictionary;

/**
 * ErrorCollection - коллекция ошибок. Расширение класса \Main\Type\Dictionary.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/errorcollection/index.php
 */
class ErrorCollection extends Dictionary
{
    /**
     * Нестатический метод вызывается при создании экземпляра класса и позволяет в нем произвести при создании объекта какие-то действия.
     *
     * @param Error[] $values Коллекция первоначальных ошибок.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/errorcollection/__construct.php
     */
    public function __construct(?array $values = null): void
    { }

    /**
     * Метод добавляет массив ошибок в коллекцию.
     *
     * @param Error[] $errors
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/errorcollection/add.php
     */
    public function add(array $errors): void
    { }

    /**
     * Returns an error with the necessary code.
     *
     * @param string|int $code The code of the error.
     * @return Error|null
     */
    public function getErrorByCode($code): ?Error
    { }

    /**
     * Метод добавляет ошибку в коллекцию.
     *
     * @param Error $error Объект ошибки
     * @param mixed $offset Смещение в массиве.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/errorcollection/seterror.php
     */
    public function setError(Error $error, $offset = null): void
    { }

    /**
     * Реализация интерфейса \ArrayAccess.
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    { }
}
