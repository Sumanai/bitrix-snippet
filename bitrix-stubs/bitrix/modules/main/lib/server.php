<?php

namespace Bitrix\Main;

/**
 * Server - объект сервера позволяет получить информацию из массива $_SERVER, а также некоторую другую информацию. Расширение класса Main\Type\ParameterDictionary.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/index.php
 */
class Server extends ParameterDictionary
{
    /**
     * Нестатический метод вызывается при создании экземпляра класса и позволяет в нем произвести при создании объекта какие-то действия.
     *
     * @param array $arServer
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/__construct.php
     */
    public function __construct(array $arServer): void
    { }

    /**
     * Undocumented function
     *
     * @param Type\IRequestFilter $filter
     * @return void
     */
    public function addFilter(Type\IRequestFilter $filter): void
    { }

    /**
     * Нестатический метод возвращает DOCUMENT_ROOT сервера.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getdocumentroot.php
     */
    public function getDocumentRoot(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает установленную папку root. Используется серверная переменная BX_PERSONAL_ROOT. Если переменная пустая - возвращается /bitrix.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getpersonalroot.php
     */
    public function getPersonalRoot(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает http хост сервера.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/gethttphost.php
     */
    public function getHttpHost(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает имя сервера.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getservername.php
     */
    public function getServerName(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает адрес сервера.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getserveraddr.php
     */
    public function getServerAddr(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает порт сервера.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getserverport.php
     */
    public function getServerPort(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает запрошенный uri вида: /index.php/test1/test2?login=yes&back_url_admin=/
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getrequesturi.php
     */
    public function getRequestUri(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает запрошенный метод.
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getrequestmethod.php
     */
    public function getRequestMethod(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает PHP_SELF вида /index.php/test1/test2
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getphpself.php
     */
    public function getPhpSelf(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает SCRIPT_NAME вида /index.php
     *
     * @return string|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/server/getscriptname.php
     */
    public function getScriptName(): ?string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $url
     * @param string $queryString
     * @param string|null $redirectStatus
     * @return void
     */
    public function rewriteUri(string $url, string $queryString, ?string $redirectStatus = null): void
    { }

    /**
     * Undocumented function
     *
     * @param string $url
     * @param string $queryString
     * @return void
     */
    public function transferUri(string $url, string $queryString = ""): void
    { }
}
