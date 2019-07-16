<?php

namespace Bitrix\Main\Type;

/**
 * Dictionary - класс - словарь.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/index.php
 */
class Dictionary implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * Нестатический метод вызывается при создании экземпляра класса и позволяет в нем произвести при создании объекта какие-то действия.
     *
     * @param array $values
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/__construct.php
     */
    public function __construct(?array $values = null): void
    { }

    /**
     * Нестатический метод возвращает любую переменную по её имени. Возвращает null, если переменной не существует.
     *
     * @param string $name
     * @return string|array|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/get.php
     */
    public function get(string $name)
    { }

    /**
     * Устанавливает все значения, затирая старые.
     *
     * @param array $values
     * @return void
     */
    public function set(array $values): void
    { }

    /**
     * Очищает все значения.
     *
     * @return void
     */
    public function clear(): void
    { }

    /**
     * Нестатический метод возвращает текущий элемент.
     *
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/current.php
     */
    public function current()
    { }

    /**
     * Переход вперёд к следующему элементу.
     *
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/next.php
     */
    public function next()
    { }

    /**
     * Нестатический метод возвращает ключ текущего элемента.
     *
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/key.php
     */
    public function key()
    { }

    /**
     * Нестатический метод проверяет валидность текущей позиции.
     *
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/valid.php
     */
    public function valid(): bool
    {
        return false;
    }

    /**
     * Нестатический метод возвращает итератор к первому элементу.
     *
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/rewind.php
     */
    public function rewind()
    { }

    /**
     * Существует ли смещение.
     *
     * @param mixed $offset
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/offsetexists.php
     */
    public function offsetExists($offset): bool
    {
        return false;
    }

    /**
     * Установка по получению.
     *
     * @param mixed $offset
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/offsetget.php
     */
    public function offsetGet($offset)
    { }

    /**
     * Установка по смещению.
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/offsetset.php
     */
    public function offsetSet($offset, $value): void
    { }

    /**
     * Очистка по смещению.
     *
     * @param mixed $offset
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/offsetunset.php
     */
    public function offsetUnset($offset): void
    { }

    /**
     * Нестатический метод подсчитывает число элементов объекта.
     *
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/count.php
     */
    public function count(): int
    {
        return 0;
    }

    /**
     * Нестатический метод возвращает значения как массив.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/toarray.php
     */
    public function toArray(): array
    {
        return [];
    }

    /**
     * Нестатический метод возвращает true если словарь пустой
     *
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/dictionary/isempty.php
     */
    public function isEmpty(): bool
    {
        return false;
    }
}
