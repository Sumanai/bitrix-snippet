<?php


/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */
namespace Bitrix\Main;

use Bitrix\Main\Diag;
use Bitrix\Main\IO;

/**
 * EventManager - класс кратко- и долгосрочной регистрации обработчиков событий. Класс реализует паттерн Singleton (Одиночка), обращаться к нему нужно через getInstance().
 * В обработчики, зарегистрированные с помощью \Bitrix\Main\EventManager::AddEventHandler, в качестве аргумента будет передан объект события (Bitrix\Main\Event). Если хотите, чтобы передавались старые аргументы, нужно использовать \Bitrix\Main\EventManager::addEventHandlerCompatible. Аналогично с \Bitrix\Main\EventManager::registerEventHandler и \Bitrix\Main\EventManager::registerEventHandlerCompatible.
 */
class EventManager
{
    /**
	 * @static
	 * @return EventManager
	 */
    public static function getInstance(): EventManager
    {
        return new EventManager;
    }

    /**
     * @param string $fromModuleId Идентификатор модуля который будет инициировать событие.
     * @param string $eventType Идентификатор события.
     * @param callable $callback Название функции обработчика. Если это метод класса, то массив вида Array(класс(объект), название метода).
     * @param mixed $includeFile Полный путь к файлу для подключения при возникновении события перед вызовом callback.
     * @param int $sort Очередность (порядок), в котором выполняется данный обработчик (обработчиков данного события может быть больше одного).
     * @return int
     */
    public function addEventHandler(string $fromModuleId, string $eventType, callable $callback, $includeFile = false, int $sort = 100): int
    {
        return 0;
    }

    /**
     * @param string $fromModuleId Идентификатор модуля который будет инициировать событие.
     * @param string $eventType Идентификатор события.
     * @param callable $callback Название функции обработчика. Если это метод класса, то массив вида Array(класс(объект), название метода).
     * @param mixed $includeFile Полный путь к файлу для подключения при возникновении события перед вызовом callback.
     * @param int $sort Очередность (порядок), в котором выполняется данный обработчик (обработчиков данного события может быть больше одного).
     * @return int
     */
    public function addEventHandlerCompatible(string $fromModuleId, string $eventType, callable $callback, $includeFile = false, int $sort = 100): int
    {
        return 0;
    }

    /**
     * Функция отзывает зарегистрированный обработчик.
     *
     * @param string $fromModuleId Идентификатор модуля
     * @param string $eventType Идентификатор события
     * @param mixed $iEventHandlerKey Идентификатор, возвращенный функцией AddEventHandler.
     * @return boolean
     */
    public function removeEventHandler(string $fromModuleId, string $eventType, $iEventHandlerKey): bool
    {
        return false;
    }

    /**
     * Удаляет регистрационную запись обработчика события.
     *
     * @param string $fromModuleId Идентификатор модуля который инициирует событие.
     * @param string $eventType Идентификатор события.
     * @param string $toModuleId Идентификатор модуля содержащий функцию-обработчик события.
     * @param string $toClass Класс принадлежащий модулю module, метод которого является функцией-обработчиком события.
     * @param string $toMethod Метод класса to_class являющийся функцией-обработчиком события.
     * @param string $toPath Необязательный параметр, по умолчанию пустой.
     * @param array $toMethodArg Массив аргументов для функции-обработчика событий. 
     * @return void
     */
    public function unRegisterEventHandler(
        string $fromModuleId,
        string $eventType,
        string $toModuleId,
        string $toClass = "",
        string $toMethod = "",
        string $toPath = "",
        array $toMethodArg = []
    ): void { }

    /**
     * Undocumented function
     *
     * @param string $fromModuleId Идентификатор модуля, который будет инициировать событие.
     * @param string $eventType Идентификатор события.
     * @param string $toModuleId  	Идентификатор модуля, содержащий функцию-обработчик события.
     * @param string $toClass Класс принадлежащий модулю module, метод которого является функцией-обработчиком события.
     * Необязательный параметр. По умолчанию - "" (будет просто подключен файл /bitrix/modules/to_module_id/include.php).
     * @param string $toMethod Метод класса to_class являющийся функцией-обработчиком события.
     * Необязательный параметр. По умолчанию - "" (будет просто подключен файл /bitrix/modules/to_module_id/include.php).
     * @param integer $sort Очередность (порядок), в котором выполняется данный обработчик (обработчиков данного события может быть больше одного).
     * @param string $toPath Необязательный параметр, по умолчанию пустой.
     * @param mixed $toMethodArg Массив аргументов для функции-обработчика событий.
     * @return void
     */
    public function registerEventHandler(
        string $fromModuleId,
        string $eventType,
        string $toModuleId,
        string $toClass = "",
        string $toMethod = "",
        int $sort = 100,
        string $toPath = "",
        $toMethodArg = array()
    ): void { }

    /**
     * Undocumented function
     *
     * @param string $fromModuleId Идентификатор модуля, который будет инициировать событие.
     * @param string $eventType Идентификатор события.
     * @param string $toModuleId  	Идентификатор модуля, содержащий функцию-обработчик события.
     * @param string $toClass Класс принадлежащий модулю module, метод которого является функцией-обработчиком события.
     * Необязательный параметр. По умолчанию - "" (будет просто подключен файл /bitrix/modules/to_module_id/include.php).
     * @param string $toMethod Метод класса to_class являющийся функцией-обработчиком события.
     * Необязательный параметр. По умолчанию - "" (будет просто подключен файл /bitrix/modules/to_module_id/include.php).
     * @param integer $sort Очередность (порядок), в котором выполняется данный обработчик (обработчиков данного события может быть больше одного).
     * @param string $toPath Необязательный параметр, по умолчанию пустой.
     * @param mixed $toMethodArg Массив аргументов для функции-обработчика событий.
     * @return void
     */
    public function registerEventHandlerCompatiblestring(
        string $fromModuleId,
        string $eventType,
        string $toModuleId,
        string $toClass = "",
        string $toMethod = "",
        int $sort = 100,
        string $toPath = "",
        $toMethodArg = array()
    ): void { }

    /**
     * Возвращает список обработчиков события event_id модуля module_id в виде объекта класса CDBResult.
     *
     * @param string $eventModuleId Идентификатор модуля.
     * @param string $eventType Идентификатор события.
     * @param array|null $filter
     * @return CDBResult
     */
    public function findEventHandlers(string $eventModuleId, string $eventType, ?array $filter = null): CDBResult {
        return new CDBResult;
    }

    /**
     * Undocumented function
     *
     * @param Event $event
     * @return void
     */
    public function send(Event $event): void {}
}
