<?php

namespace Bitrix\Main;

use Bitrix\Main\Data;
use Bitrix\Main\Diag;

/**
 * Application - абстрактный класс для любых приложений. Любой конкретный класс приложения является наследником этого абстрактного класса.

 * Приложение является базовой точкой входа (маршрутизатором) для обращения к глобальным сущностям ядра: соединение с источниками данных, управляемый кеш и т.п. Также приложение содержит глобальные данные, которые относятся к самому сайту и не зависят от конкретного хита. То есть, приложение является неизменяемой частью, не зависящей от конкретного хита.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/index.php
 */
abstract class Application
{
    /**
     * Статический метод возвращает текущий экземпляр приложения.
     *
     * @return Application
     * @throws SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/getinstance.php
     */
    public static function getInstance(): Application
    {
        return new static();
    }

    /**
     * Нестатичный метод производит первичную инициализацию ядра.
     *
     * @return void
     * @throws SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/initializebasickernel.php
     */
    public function initializeBasicKernel(): void
    { }

    /**
     * Нестатический метод производит полную инициализацию ядра. Метод следует вызывать после метода initializeBasicKernel.
     *
     * @param array $params Параметры текущего запроса (в зависимости от типа приложения).
     * @return void
     * @throws SystemException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/initializeextendedkernel.php
     */
    public function initializeExtendedKernel(array $params): void
    { }

    /**
     * Undocumented function
     *
     * @return Dispatcher
     */
    final public function getDispatcher(): Dispatcher
    {
        return new Dispatcher;
    }

    /**
     * Initializes context of the current request.
     * Should be implemented in subclass.
     */
    abstract protected function initializeContext(array $params);

    /**
     * Нестатический метод запускает выполнение запроса. Вызывается после методов инициализации.
     * Следует реализовывать как подкласс.
     * 
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/start.php
     */
    abstract public function start(): void;

    /**
     * Runs controller and its action and sends response to the output.
     *
     * It's a stub method and we can't mark it as abstract because there is compatibility.
     * 
     * @return void
     */
    public function run(): void
    { }

    /**
     * Ends work of application.
     * Sends response and then terminates execution.
     * If there is no $response the method will use Context::$response.
     *
     * @param integer $status
     * @param Response|null $response
     *
     * @return void
     * @throws SystemException
     */
    public function end(int $status = 0, ?Response $response = null): void
    { }


    /**
     * Terminates application by invoking exit().
     * It's the right way to finish application @see \CMain::finalActions().
     *
     * @param integer $status
     * @return void
     */
    public function terminate(int $status = 0)
    { }

    /**
     * Undocumented function
     * 
     * @return mixed
     */
    public function createExceptionHandlerLog()
    { }

    /**
     * Undocumented function
     *
     * @return Diag\ExceptionHandlerOutput
     */
    public function createExceptionHandlerOutput(): Diag\ExceptionHandlerOutput
    {
        return new Diag\ExceptionHandlerOutput();
    }

    /**
     * Undocumented function
     *
     * @return \Bitrix\Main\Diag\ExceptionHandler
     */
    public function getExceptionHandler(): \Bitrix\Main\Diag\ExceptionHandler
    {
        return new \Bitrix\Main\Diag\ExceptionHandler();
    }

    /**
     * Нестатический метод возвращает объект пула соединений базы данных.
     *
     * @return Data\ConnectionPool
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/getconnectionpool.php
     */
    public function getConnectionPool(): Data\ConnectionPool
    {
        return new Data\ConnectionPool();
    }

    /**
     * Нестатический метод возвращает содержание текущего соединения.
     *
     * @return Context
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/getcontext.php
     */
    public function getContext(): Context
    {
        return new Context();
    }

    /**
     * Нестатический метод изменяет содержание текущего запроса.
     *
     * @param Context $context
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/setcontext.php
     */
    public function setContext(Context $context): void
    { }

    /**
     * Статический метод возвращает соединение с базой данных указанного имени.
     * Если параметр name - пустой, то возвращается соединение по умолчанию.
     *
     * @param string $name Название соединения. Если пустое - то соединение по умолчанию.
     * @return DB\Connection
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/getconnection.php
     */
    public static function getConnection(string $name = ''): DB\Connection
    {
        return new DB\Connection();
    }

    /**
     * Возвращает новый экземпляр объекта кеша. Нестатический метод.
     *
     * @return Data\Cache
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/getcache.php
     */
    public function getCache(): Data\Cache
    {
        return Data\Cache::createInstance();
    }

    /**
     * Нестатический метод возвращает объект управляемого кеша.
     *
     * @return Data\ManagedCache
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/getmanagedcache.php
     */
    public function getManagedCache(): Data\ManagedCache
    {
        return new Data\ManagedCache();
    }

    /**
     * Нестатический метод возвращает объект тегированного кеша.
     *
     * @return Data\TaggedCache
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/gettaggedcache.php
     */
    public function getTaggedCache(): Data\TaggedCache
    {
        return new Data\TaggedCache();
    }

    /**
     * Returns UF manager.
     *
     * @return \CUserTypeManager
     */
    public static function getUserTypeManager(): \CUserTypeManager
    {
        return new \CUserTypeManager();
    }

    /**
     * Статический метод вернёт true если сервер работает в utf-8. И вернёт false в противном случае.
     *
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/isutfmode.php
     */
    public static function isUtfMode(): bool
    {
        return false;
    }

    /**
     * Статический метод возвращает document root сервера.
     * Обратите внимание: вместо $_SERVER["DOCUMENT_ROOT"] сейчас можно использовать Bitrix\Main\Application::getDocumentRoot().
     *
     * @return null|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/getdocumentroot.php
     */
    public static function getDocumentRoot(): ?string
    {
        return '';
    }

    /**
     * Статический метод возвращает путь к персональной директории (относительно document root).
     *
     * @return null|string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/getpersonalroot.php
     */
    public static function getPersonalRoot(): ?string
    {
        return '';
    }

    /**
     * Статический метод производит перезапуск акселлератора.
     * 
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/application/resetaccelerator.php
     */
    public static function resetAccelerator(): void
    { }
}
