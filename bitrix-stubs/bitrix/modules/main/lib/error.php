<?php

namespace Bitrix\Main;

/**
 * Error - класс ошибок.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/error/index.php
 */
class Error implements \JsonSerializable
{
    /**
     * Нестатический метод вызывается при создании экземпляра класса и позволяет в нем произвести при создании объекта какие-то действия.
     *
     * @param string $message Сообщение об ошибке.
     * @param integer|string $code Код ошибки.
     * @param mixed|null $customData Data typically of key/value pairs that provide additional user-defined information about the error.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/error/__construct.php
     */
    public function __construct(string $message, $code = 0, $customData = null): void
    { }

    /**
     * Метод возвращает код ошибки.
     *
     * @return int|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/error/getcode.php
     */
    public function getCode()
    { }

    /**
     * Метод возвращает сообщение об ошибке.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/error/getmessage.php
     */
    public function getMessage(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return mixed|null
     */
    public function getCustomData()
    { }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function __toString(): string
    {
        return '';
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize(): array
    {
        return [];
    }
}
