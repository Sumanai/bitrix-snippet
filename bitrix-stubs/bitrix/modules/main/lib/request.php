<?php

namespace Bitrix\Main;

/**
 * Request - абстрактный класс. Объект запроса позволяет получить данные о текущем запросе: метод и протокол, запрошенный URL, переданные параметры и т.п. Расширение класса \Bitrix\Main\Type\ParameterDictionary.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/request/index.php
 */
abstract class Request extends Type\ParameterDictionary
{
    /**
     * Undocumented function
     *
     * @param Server $server
     * @param array $request
     * @return void
     */
    public function __construct(Server $server, array $request): void
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
     * Нестатический метод возвращает PHP_SELF вида /index.php/test1/test2
     *
     * @return string
     */
    public function getPhpSelf(): string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает SCRIPT_NAME вида /index.php
     *
     * @return string
     */
    public function getScriptName(): string
    {
        return '';
    }

    /**
     * Запрошенная страница (напр. "/catalog/category/index.php")
     *
     * @return string
     */
    public function getRequestedPage(): string
    {
        return '';
    }

    /**
     * Директория запрошенной страницы (напр. "/catalog/category")
     *
     * @return string
     */
    public function getRequestedPageDirectory(): string
    {
        return '';
    }

    /**
     * true - находимся в админке, иначе false
     *
     * @return boolean
     */
    public function isAdminSection(): bool
    {
        return false;
    }

    /**
     * Нестатический метод возвращает true если текущий запрос - AJAX.
     *
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/request/isajaxrequest.php
     */
    public function isAjaxRequest(): bool
    {
        return false;
    }
}
