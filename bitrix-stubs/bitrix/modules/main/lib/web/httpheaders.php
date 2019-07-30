<?php

namespace Bitrix\Main\Web;

use IteratorAggregate;
use Traversable;

/**
 * HttpHeaders - класс для работы с заголовками.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/index.php
 */
class HttpHeaders implements IteratorAggregate
{
    /**
     * Нестатический метод добавляет заголовок.
     *
     * @param string $name
     * @param string $value
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/add.php
     */
    public function add(string $name, string $value): void
    { }

    private function refineString(string $string): string
    {
        return '';
    }

    /**
     * Нестатический метод устанавливает значение заголовка.
     *
     * @param string $name
     * @param string|null $value
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/set.php
     */
    public function set($name, $value): void
    { }

    /**
     * Нестатический метод возвращает заголовок по его имени.
     *
     * @param string $name Имя заголовка.
     * @param boolean $returnArray Если true, то возвращает массив с несколькими значениями.
     * @return string|null|array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/get.php
     */
    public function get(string $name, bool $returnArray = false)
    { }

    /**
     * Deletes a header or headers by its name.
     *
     * @param string $name
     * @return void
     */
    public function delete(string $name): void
    { }

    /**
     * Нестатический метод очищает все заголовки.
     *
     * @return void
     * @link Нестатический метод очищает все заголовки.
     */
    public function clear(): void
    { }

    /**
     * Нестатический метод возвращает строковое представление запроса HTTP.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/tostring.php
     */
    public function toString(): string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает заголовки в виде исходного массива.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/toarray.php
     */
    public function toArray()
    {
        return [];
    }

    /**
     * Нестатический метод возвращает тип контента из Content-Type заголовка.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/getcontenttype.php
     */
    public function getContentType(): ?string
    { }

    /**
     * Нестатический метод возвращает кодировку из Content-Type заголовка.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/getcharset.php
     */
    public function getCharset(): ?string
    { }

    /**
     * Нестатический метод возвращает disposition-type из Content-Disposition заголовка.
     *
     * @return string|null Disposition-type part of the Content-Disposition header if found or null otherwise.
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/getcontentdisposition.php
     */
    public function getContentDisposition(): ?string
    { }

    /**
     * Нестатический метод возвращает имя файла из Content-disposition заголовка.
     *
     * @return string|null Filename if it was found in the Content-disposition header or null otherwise.
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/httpheaders/getfilename.php
     */
    public function getFilename(): ?string
    { }

    /**
     * Retrieve an external iterator
     * @link https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator([]);
    }
}
