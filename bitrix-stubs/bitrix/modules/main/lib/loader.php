<?php
namespace Bitrix\Main;

/**
 * Loader - класс для загрузки необходимых файлов, классов и модулей. Это единственный класс, который включается непосредственно. Используется для подключения всех модулей, кроме main и fileman.
 * @package Bitrix\Main
 */
final class Loader
{
    /**
     * Returned by includeSharewareModule() if module is not found
     */
    const MODULE_NOT_FOUND = 0;
    /**
     * Returned by includeSharewareModule() if module is installed
     */
    const MODULE_INSTALLED = 1;
    /**
     * Returned by includeSharewareModule() if module works in demo mode
     */
    const MODULE_DEMO = 2;
    /**
     * Returned by includeSharewareModule() if the trial period is expired
     */
    const MODULE_DEMO_EXPIRED = 3;


    /**
     * Статический метод подключает модуль по его имени. Возвращает true если подключение успешно и false в обратном случае.
     *
     * @param string Имя подключаемого модуля.
     * @return boolean
     * @throws LoaderException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/loader/includemodule.php
     */
    public static function includeModule(string $moduleName): bool
    {
        return false;
    }

    /**
     * Includes module by its name, throws an exception in case of failure
     *
     * @param $moduleName
     *
     * @return boolean
     * @throws LoaderException
     */
    public static function requireModule(string $moduleName): bool
    {
        return false;
    }

    /**
     * Статический метод подключает партнёрский модуль по его имени.
     * Модуль должен инициировать константу <module name>_DEMO = Y в файле include.php для определения деморежима. Файл include.php должен возвращать false для опредения истёкшего триал-периода.
     * Константы используются в силу того, что их легче подвергать обфускации.
     * Аналог метода CModule::IncludeModuleEx в старом ядре.
     *
     * @param string $moduleName Имя подключаемого модуля.
     * @return int Возвращает одну из следующих констант: Loader::MODULE_NOT_FOUND, Loader::MODULE_INSTALLED, Loader::MODULE_DEMO, Loader::MODULE_DEMO_EXPIRED
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/loader/includesharewaremodule.php
     */
    public static function includeSharewareModule(string $moduleName): int
    {
        return Loader::MODULE_NOT_FOUND;
    }

    /**
     * Undocumented function
     *
     * @param string $moduleName Имя модуля.
     * @return void
     */
    public static function clearModuleCache(string $moduleName): void
    { }

    /**
     * Статический метод возвращает document root.
     *
     * @return string
     */
    public static function getDocumentRoot(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param boolean $value
     * @return void
     */
    public static function switchAutoLoad(bool $value = true): void
    { }

    /**
     * Статический метод регистрирует классы для автозагрузки.
     * Все часто используемые классы должны быть зарегистрированы для автозагрузки. Для редкоиспользуемых классов можно регистрацией пренебречь, они будут найдены и подключены при первом использовании.
     *
     * @param ?string $moduleName Имя модуля. Может быть null если классы не являются часть какого-либо модуля.
     * @param array $arClasses Массив классов с именами классов как ключами и пути как значения ключей.
     * @return void
     * @throws LoaderException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/loader/registerautoloadclasses.php
     */
    public static function registerAutoLoadClasses(?string $moduleName, array $arClasses): void
    { }

    /**
     * Registers namespaces with custom paths.
     * e.g. ('Bitrix\Main\Dev', 'main', 'dev/lib')
     *
     * @param string $namespace
     * @param string $module
     * @param string $path
     */
    public static function registerNamespace(string $namespace, string $module, string $path): void
    { }

    /**
     * Undocumented function
     *
     * @param string $className
     * @return boolean
     */
    public static function isAutoLoadClassRegistered(string $className): bool
    {
        return false;
    }

    /**
     * Статический метод производит загрузку зарегистрированных для автозагрузки методов из следующих файлов:
     * + \Bitrix\Main\IO\File -> /main/lib/io/file.php
     * + \Bitrix\IBlock\Type -> /iblock/lib/type.php
     * + \Bitrix\IBlock\Section\Type -> /iblock/lib/section/type.php
     * + \QSoft\Catalog\Tools\File -> /qsoft.catalog/lib/tools/file.php
     *
     * @param string $className Имя класса для загрузки
     */
    public static function autoLoad(string $className): void
    { }


    /**
     * Статический метод проверяет существование файла в персональной директории.
     *
     * @param string $path Путь к файлу относительно персональной директории.
     * @param string $root Server document root, default static::getDocumentRoot()
     * @return string|bool Returns combined path or false if the file does not exist in both dirs
     */
    public static function getLocal(string $path, ?string $root = null)
    { }


    public static function getPersonal(string $path)
    { }

    /**
     * Changes requireModule behavior
     *
     * @param bool $requireThrowException
     */
    public static function setRequireThrowException($requireThrowException)
    {
        self::$requireThrowException = (bool) $requireThrowException;
    }
}

/**
 * LoaderException - Исключение возникающее в загрузчике.
 */
class LoaderException extends \Exception
{ }
