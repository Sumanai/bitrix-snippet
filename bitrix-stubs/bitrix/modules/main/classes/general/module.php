<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */

class CModule
{
    /**
     * Вставляет идентификатор модуля в таблицу b_module.
     *
     * @return void
     */
    public function Add(): void
    { }

    /**
     * Запускает процедуру инсталляции модуля.
     *
     * @return void
     */
    function DoInstall(): void
    { }

    /**
     * Запускает процедуру деинсталляции модуля.
     *
     * @return void
     */
    function DoUninstall(): void
    { }

    /**
     * Возвращает список модулей в виде объекта класса CDBResult для применения в функциях SelectBox или SelectBoxM, выводящих HTML тег <select> (список).
     *
     * @param string $strSqlOrder SQL код который может применяться для задания сортировки выбираемых ID модулей.
     * 
     * @return CDBResult
     */
    public static function GetDropDownList(string $strSqlOrder = "ORDER BY ID"): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Возвращает список модулей в виде объекта класса CDBResult.
     *
     * @return CDBResult
     */
    public static function GetList(): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Проверяет установлен ли модуль и если установлен, то подключает его (точнее подключает файл /bitrix/modules/ID модуля/include.php). Возвращает "true", если модуль установлен, иначе - "false".
     *
     * @param string $module_name
     * 
     * @return bool
     */
    public static function IncludeModule(string $module_name): bool
    {
        return false;
    }

    /**
     * Определяет установлен ли модуль. Возвращает "true", если модуль установлен и "false" - в противном случае.
     *
     * @return boolean
     */
    public function IsInstalled(): bool
    {
        return false;
    }

    /**
     * Удаляет регистрационную запись о модуле из базы данных.
     *
     * @return void
     */
    function Remove(): void
    { }
}

/**
 * Регистрирует произвольный обработчик callback события MESSAGE_ID модуля from_module_id. Если указан полный путь к файлу с обработчиком full_path, то он будет автоматически подключен перед вызовом обработчика. Вызывается на каждом хите и работает до момента окончания работы скрипта.
 *
 * @param string $from_module_id Идентификатор модуля который будет инициировать событие.
 * @param string $MESSAGE_ID Идентификатор события.
 * @param mixed $callback Название функции обработчика. Если это метод класса, то массив вида Array(класс(объект), название метода).
 * @param integer $sort Очередность (порядок), в котором выполняется данный обработчик (обработчиков данного события может быть больше одного).
 * @param mixed $full_path Полный путь к файлу для подключения при возникновении события перед вызовом callback.
 * 
 * @return int HandlerKey
 */
function AddEventHandler(string $from_module_id, string $MESSAGE_ID, $callback, int $sort = 100, $full_path = false): int
{
    return 0;
}

/**
 * Сравнивает версии в форматах XX.XX.XX. Возвращает true, если первая версия, переданная в параметре version1, больше или равна второй версии, переданной в параметре version2, иначе - false.
 * 
 * @param string $version1 Первая версия в формате "XX.XX.XX" 
 * @param string $version2 Вторая версия в формате "XX.XX.XX" 
 * 
 * @return boolean
 */
function CheckVersion(string $version1, string $version2): bool
{
    return false;
}

/**
 * Запускает обработчик события на выполнение. Возвращает то значение, которое возвращает конкретный обработчик события.
 * 
 * @param $arEvent Массив описывающий одну регистрационную запись хранящую связь между событием и обработчиком этого события (подобные записи хранятсяв таблице b_module_to_module).
 * @param null $param1 Произвольный набор значений, которые передаются в качестве параметров в обработчик события.
 * @param null $param2
 * @param null $param3
 * @param null $param4
 * @param null $param5
 * @param null $param6
 * @param null $param7
 * @param null $param8
 * @param null $param9
 * @param null $param10
 * @return bool|mixed|null
 *
 * @deprecated
 */
function ExecuteModuleEvent(
    $arEvent,
    $param1 = null,
    $param2 = null,
    $param3 = null,
    $param4 = null,
    $param5 = null,
    $param6 = null,
    $param7 = null,
    $param8 = null,
    $param9 = null,
    $param10 = null
) { }

/**
 * Запускает обработчик события на выполнение.
 *
 * @param array $arEvent Структура данных описывающая один обработчик события.
 * @param array $arParams Перечень параметров передаваемых в обработчики события. Этот перечень определяется автором события и индивидуален для каждого события. Параметры могут передаваться как по ссылке так и по значению. Параметры переданные по значению могут быть изменены внутри обработчика. Для передачи параметра по значению в массив должна быть добавлена ссылка на него.
 * @return mixed
 */
function ExecuteModuleEventEx(array $arEvent, array $arParams = array())
{ }
