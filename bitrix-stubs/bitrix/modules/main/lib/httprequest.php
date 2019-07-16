<?php

namespace Bitrix\Main;

/**
 * HttpRequest - Класс управляет объектом Request, содержащим информацию о текущем запросе - его тип, параметры и их значения: класс "запроса к серверу". Класс позволяет избавиться от глобальных переменных в коде, используемых в старом ядре.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/index.php
 */
class HttpRequest extends Request
{
    /**
     * Нестатический метод вызывается при создании экземпляра класса и позволяет в нем произвести при создании объекта какие-то действия.
     *
     * @param Server $server
     * @param array $queryString массив _GET
     * @param array $postData массив _POST
     * @param array $files массив _FILES
     * @param array $cookies массив _COOKIE
     * @return void
     */
    public function __construct(
        Server $server,
        array $queryString,
        array $postData,
        array $files,
        array $cookies
    ): void { }

    /**
     * Нестатический метод применяет фильтр к данным запроса с сохранением оригинальных значений.
     *
     * @param Type\IRequestFilter $filter Filter object
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/addfilter.php
     */
    public function addFilter(Type\IRequestFilter $filter)
    { }

    /**
     * Нестатический метод возвращает GET параметр текущего запроса.
     *
     * @param string $name Название параметра
     * @return null|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getquery.php
     */
    public function getQuery($name): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает список GET параметров текущего запроса.
     *
     * @return Type\ParameterDictionary
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getquerylist.php
     */
    public function getQueryList()
    {
        return new Type\ParameterDictionary();
    }

    /**
     * Нестатический метод возвращает POST параметры текущего запроса.
     *
     * @param $name
     * @return null|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getpost.php
     */
    public function getPost($name): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает список POST параметров текущего запроса.
     *
     * @return Type\ParameterDictionary
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getpostlist.php
     */
    public function getPostList()
    {
        return new Type\ParameterDictionary();
    }

    /**
     * Нестатический метод возвращает параметры FILES текущего запроса.
     *
     * @param $name
     * @return null|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getfile.php
     */
    public function getFile($name): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает список параметров FILES текущего запроса.
     *
     * @return Type\ParameterDictionary
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getfilelist.php
     */
    public function getFileList()
    {
        return new Type\ParameterDictionary();
    }

    /**
     * Returns the header of the current request.
     *
     * @param string $name Name of header.
     * @return null|string
     */
    public function getHeader($name): ?string
    {
        return '';
    }

    /**
     * Returns the list of headers of the current request.
     *
     * @return HttpHeaders
     */
    public function getHeaders()
    {
        return new HttpHeaders();
    }

    /**
     * Нестатический метод возвращает параметры COOKIES из текущего запроса.
     * Аналог метода CMain::get_cookie в старом ядре.
     *
     * @param $name Имя cookie переменной.
     * @return null|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getcookie.php
     */
    public function getCookie($name): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает список параметров COOKIES текущего запроса.
     *
     * @return Type\ParameterDictionary
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getcookielist.php
     */
    public function getCookieList()
    {
        return new Type\ParameterDictionary();
    }

    /**
     * Undocumented function
     *
     * @param mixed $name
     * @return string|null
     */
    public function getCookieRaw($name): ?string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return Type\ParameterDictionary
     */
    public function getCookieRawList()
    {
        return new Type\ParameterDictionary();
    }

    /**
     * Undocumented function
     *
     * @return string|null
     */
    public function getRemoteAddress(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает запрошенный uri вида: /index.php/test1/test2?login=yes&back_url_admin=/
     *
     * @return string|null
     */
    public function getRequestUri(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает запрошенный метод.
     *
     * @return string|null
     */
    public function getRequestMethod(): ?string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает порт сервера.
     *
     * @return string | null
     */
    public function getServerPort(): ?string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function isPost(): bool
    {
        return false;
    }

    /**
     * Нестатический метод возвращает запрошенный заголовок юзер-агента HTTP.
     *
     * @return null|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getuseragent.php
     */
    public function getUserAgent(): ?string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getAcceptedLanguages(): array
    {
        return [];
    }

    /**
     * Нестатический метод возвращает текущую страницу, полученную из запрошенного URI.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getrequestedpage.php
     */
    public function getRequestedPage(): string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает расшифрованный URL, конвертированный в текущий кодированный URI запроса. (За исключением строки запроса.)
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getdecodeduri.php
     */
    public function getDecodedUri(): string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает узел переменной сервера без номера порта.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/gethttphost.php
     */
    public function getHttpHost(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function isHttps(): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @param string $queryString
     * @return void
     */
    public function modifyByQueryString($queryString): void
    { }

    /**
     * Нестатический метод возвращает файл скрипта при необходимости откорректированный посредством urlrewrite.php или файл virtual_file_system.php.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getscriptfile.php
     */
    public function getScriptFile(): string
    {
        return '';
    }

    /**
     * Статический метод возвращает массив с предопределёнными параметрами запроса.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getsystemparameters.php
     */
    public static function getSystemParameters(): array
    {
        return [];
    }

    /**
     * Статический метод возвращает первичные запрошенные данные с php://input.
     *
     * @return bool|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httprequest/getinput.php
     */
    public static function getInput()
    { }

    /**
     * Returns Y if persistant cookies are enabled, N if disabled, or empty if unknown.
     *
     * @return null|string
     */
    public function getCookiesMode()
    { }
}
