<?php

namespace Bitrix\Main\Web;

/**
 * Uri - класс для работы со ссылками.
 * Аналог CMain::GetCurPageParam и DeleteParam в старом ядре. Работа с классом \Bitrix\Main\Web\Uri несколько сложнее чем в старом ядре: это следствие того, что в этом классе каждый метод отвечает только за один аспект работы класса.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/index.php
 */
class Uri implements \JsonSerializable
{
    /**
     * Undocumented function
     *
     * @param string $url
     */
    public function __construct(string $url): void
    { }

    /**
     * @deprecated Use getLocator() or getUri().
     */
    public function getUrl(): string
    {
        return '';
    }

    /**
     * Метод возвращает URI без фрагмента.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getlocator.php
     */
    public function getLocator(): string
    {
        return '';
    }

    /**
     * Метод возвращает URI с фрагментом, если он имеется.
     * Выполняет функции методов CMain::GetCurPageParam и DeleteParam в старом ядре.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/geturi.php
     */
    public function getUri(): string
    {
        return '';
    }

    /**
     * Метод возвращает фрагмент.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getfragment.php
     */
    public function getFragment(): string
    {
        return '';
    }

    /**
     * Метод возвращает хост.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/gethost.php
     */
    public function getHost(): string
    {
        return '';
    }

    /**
     * Метод устанавливает хост.
     *
     * @param string $host Host name.
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/sethost.php
     */
    public function setHost(string $host): self
    {
        return $this;
    }

    /**
     * Метод возвращает пароль.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getpass.php
     */
    public function getPass(): string
    {
        return '';
    }

    /**
     * Метод устанавливает пароль.
     *
     * @param string $pass Пароль
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/setpass.php
     */
    public function setPass(string $pass): self
    {
        return $this;
    }

    /**
     * Метод возвращает путь.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getpath.php
     */
    public function getPath(): string
    {
        return '';
    }

    /**
     * Метод устанавливает путь.
     *
     * @param string $path
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/setpath.php
     */
    public function setPath(string $path): self
    {
        return $this;
    }

    /**
     * Метод возвращает путь с запросом.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getpathquery.php
     */
    public function getPathQuery(): string
    {
        return '';
    }

    /**
     * Метод возвращает номер порта.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getport.php
     */
    public function getPort(): string
    {
        return '';
    }

    /**
     * Метод возвращает запрос.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getquery.php
     */
    public function getQuery(): string
    {
        return '';
    }

    /**
     * Метод возвращает схему.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getscheme.php
     */
    public function getScheme(): string
    {
        return '';
    }

    /**
     * Метод возвращает пользователя.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/getuser.php
     */
    public function getUser(): string
    {
        return '';
    }

    /**
     * Метод устанавливает пользователя.
     *
     * @param string $user Пользователь.
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/setuser.php
     */
    public function setUser(string $user): self
    {
        return $this;
    }

    /**
     * Метод удаляет параметры из запроса.
     *
     * @param array $params Удаляемые параметры.
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/deleteparams.php
     */
    public function deleteParams(array $params): self
    {
        return $this;
    }

    /**
     * Метод добавляет параметры в запрос или заменяет существующие параметры.
     *
     * @param array $params Параметры для добавления.
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/uri/addparams.php
     */
    public function addParams(array $params): self
    {
        return $this;
    }

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
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return $this->getUri();
    }
}
