<?php

namespace Bitrix\Main\Config;

/**
 * Configuration - Класс отвечает за глобальные настройки всего приложения. (Это то, что в старом ядре определяется константами.)
 * Класс оперирует единой базой настроек, которые хранятся в файле .settings.php. Данные хранятся произвольные. Например, для соединений может храниться целый пул данных для именованных соединений.
 * По самой структуре, файл настроек содержит параметр readonly для определенных секций, это означает, что данные настройки не будут изменены через API.
 * Обращается к пространству имён:
 * - \Main;
 * Финальный класс, обеспечивает выполнение: \ArrayAccess, \Iterator, \Countable.
 * После внесения изменений нужно обязательно вызвать метод saveConfiguration, иначе эти изменения не сохранятся.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/configuration/index.php
 */
final class Configuration implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * Получает значение одного параметра. Обертка над Configuration::get. 
     *
     * @param string $name Название параметра.
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/configuration/getvalue.php
     */
    public static function getValue(string $name)
    { }

    /**
     * Undocumented function
     *
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public static function setValue(string $name, $value): void
    { }

    /**
     * Получает объект класса Configuration. Паттерн Singleton.
     *
     * @param string|null $moduleId Название модуля. Позволяет получить настройки модуля из файла .settings.php.
     * @return Configuration
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/configuration/getinstance.php
     */
    public static function getInstance(?string $moduleId = null): Configuration
    {
        return new Configuration();
    }

    /**
     * Сохраняет изменение конфигурации.
     *
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/configuration/saveconfiguration.php
     */
    public function saveConfiguration(): void
    { }

    /**
     * Добавляет/изменяет конкретный параметр.
     *
     * @param string $name Добавляемый параметр
     * @param array $value Значение параметра
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/configuration/add.php
     */
    public function add(string $name, array $value): void
    { }

    /**
     * Изменяет параметры "только для чтения".
     * Внимание! Данный метод следует использовать с осторожностью и только в том случае если вы понимаете что делаете!
     * 
     * @param string $name Изменяемый параметр
     * @param array $value Новое значение параметра
     * @return void
     */
    public function addReadonly(string $name, array $value): void
    { }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public function delete(string $name): void
    { }

    /**
     * Возвращает значения параметров.
     *
     * @param string $name Имя параметра.
     * @return array|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/configuration/get.php
     */
    public function get(string $name)
    { }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return boolean
     */
    public function offsetExists(string $name): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return mixed
     */
    public function offsetGet(string $name)
    { }

    /**
     * Undocumented function
     *
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function offsetSet(string $name, $value)
    { }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public function offsetUnset(string $name)
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function current()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function next()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function key()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function valid()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function rewind()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    public function count()
    { }

    /**
     * Создает файл настроек .settings.php
     * Важно! Метод заменит файл, если он уже существует.
     *
     * @return mixed
     */
    public static function wnc()
    { }
}
