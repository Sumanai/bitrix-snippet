<?php

namespace Bitrix\Main;

/**
 * Context - методы работы с информацией о текущем запросе: тип, параметры и их значения.
 * При инициализации приложения создаётся контекст - объект HttpContext, который как контейнер хранит в себе информацию о запросе: параметры запроса, серверное окружение, битриксовое окружение (язык, id сайта), ответ на запрос. То есть это изменяемая часть, зависящая от текущего хита.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/index.php
 */
class Context
{
    /**
     * Нестатический метод вызывается при создании экземпляра класса и позволяет в нем произвести какие-то действия, при создании объекта.
     *
     * @param Application $application
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/__construct.php
     */
    public function __construct(Application $application): void
    { }

    /**
     * Нестатический метод инициализирует контекст по запросу и отклику объекта.
     *
     * @param Request $request
     * @param Response $response
     * @param Server $server
     * @param Environment $env
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/initialize.php
     */
    public function initialize(Request $request, Response $response = null, Server $server, array $params = array()): void
    { }

    /**
     * Undocumented function
     *
     * @return Environment
     */
    public function getEnvironment(): Environment
    {
        return new Environment();
    }

    /**
     * Нестатический метод возвращает объект отклика контекста.
     *
     * @return HttpResponse
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/getresponse.php
     */
    public function getResponse(): HttpResponse
    {
        return new HttpResponse();
    }

    /**
     * Нестатический метод устанавливает ответ контента.
     *
     * @param Response $response Response.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/setresponse.php
     */
    public function setResponse(Response $response): void
    { }

    /**
     * Нестатический метод возвращает запрошенный объект контекста.
     *
     * @return HttpRequest
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/getrequest.php
     */
    public function getRequest(): HttpRequest
    {
        return new HttpRequest(new Server([]), [], [], [], []);
    }

    /**
     * Нестатический метод возвращает серверный объект контекста.
     *
     * @return Server
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/getserver.php
     */
    public function getServer(): Server
    {
        return new Server([]);
    }

    /**
     * Нестатический метод возвращает обратную ссылку на приложение.
     *
     * @return Application
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/getapplication.php
     */
    public function getApplication(): Application
    {
        return new Application();
    }

    /**
     * Нестатический метод возвращает региональные культурные настройки для контекста.
     *
     * @return \Bitrix\Main\Context\Culture
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/getculture.php
     */
    public function getCulture(): Context\Culture
    {
        return new Context\Culture();
    }

    /**
     * Нестатический метод возвращает текущую языковую раскладку (en, ru).
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/getlanguage.php
     */
    public function getLanguage(): string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает текущий сайт (SITE_ID).
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/getsite.php
     */
    public function getSite(): string
    {
        return '';
    }

    /**
     * Нестатический метод устанавливает региональные культурные настройки для контекста.
     *
     * @param \Bitrix\Main\Context\Culture $culture
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/setculture.php
     */
    public function setCulture(Context\Culture $culture): void
    { }

    /**
     * Нестатический метод устанавливает язык контекста.
     *
     * @param string $language
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/setlanguage.php
     */
    public function setLanguage(string $language): void
    { }

    /**
     * Нестатический метод устанавливает сайт для контекста.
     *
     * @param string $site
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/setsite.php
     */
    public function setSite(string $site): void
    { }

    /**
     * Статический метод возвращает текущий экземпляр контекста.
     *
     * @static
     * @return Context
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/context/getcurrent.php
     */
    public static function getCurrent(): Context
    {
        return Application::getInstance()->getContext();
    }
}
