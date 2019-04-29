<?php

namespace Bitrix\Main\Data;

interface ICacheEngine
{
    public function isAvailable();
    public function clean($baseDir, $initDir = false, $filename = false);
    public function read(&$allVars, $baseDir, $initDir, $filename, $TTL);
    public function write($allVars, $baseDir, $initDir, $filename, $TTL);
    public function isCacheExpired($path);
}

interface ICacheEngineStat
{
    public function getReadBytes();
    public function getWrittenBytes();
    public function getCachePath();
}

class Cache
{
    public static function createCacheEngine(): ICacheEngine
    {
        return new CacheEngineNone();
    }

    public static function getCacheEngineType(): string
    {
        return '';
    }

    public static function createInstance(): Cache
    {
        return new static(static::createCacheEngine());
    }

    public function __construct(ICacheEngine $cacheEngine)
    { }

    public static function setShowCacheStat($showCacheStat)
    { }

    public static function getShowCacheStat()
    { }

    /**
     * Статический метод позволяет пользователю с достаточным уровнем прав пропустить создание кеша на данном хите.
     *
     * @param boolean $clearCache
     * @return void
     */
    public static function setClearCache(bool $clearCache): void
    { }

    /**
     * Статический метод позволяет пользователю с достаточным уровнем прав пропустить создание кеша в этой сессии.
     *
     * @param boolean $clearCacheSession
     * @return void
     */
    public static function setClearCacheSession(bool $clearCacheSession): void
    { }

    public static function getSalt(): string
    {
        return '';
    }

    /**
     * Статический метод возвращает true если пользователь с достаточным уровнем прав пропускает чтение данных из кеша в этой сессии.
     *
     * @return boolean
     */
    public static function shouldClearCache(): bool
    {
        return false;
    }

    public static function getPath(string $uniqueString): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $uniqueString
     * @param string|boolean $initDir
     * @param string $baseDir
     * @return boolean
     */
    public function clean(string $uniqueString, $initDir = false, string $baseDir = "cache"): bool
    {
        return false;
    }

    /**
     * Метод очищает кеш по параметру basedir.
     *
     * @param string|boolean $initDir По умолчанию false
     * @param string $baseDir Базовая директория кеша. По умолчанию равен cache, то есть все сохраняется в /BX_PERSONAL_ROOT/cache/, где BX_PERSONAL_ROOT по умолчанию равен bitrix.
     * @return boolean
     */
    public function cleanDir($initDir = false, string $baseDir = "cache"): bool
    {
        return false;
    }

    /**
     * Инициализирует ряд свойств объекта класса Cache. Если файл кеша отсутствует или истек период его жизни, то метод вернет "false", в противном случае метод вернет "true".
     *
     * @param integer $TTL Время жизни кеша в секундах.
     * @param string $uniqueString Уникальный идентификатор кеша. В этот идентификатор должны входить все параметры которые могут повлиять на результат исполнения кешируемого кода.
     * @param boolean $initDir Папка, в которой хранится кеш компонента, относительно /bitrix/cache/. Если значение - "/", то кеш будет действительным для всех каталогов сайта.
     * @param string $baseDir Базовая директория кеша. По умолчанию равен cache, то есть все сохраняется в /BX_PERSONAL_ROOT/cache/, где BX_PERSONAL_ROOT по умолчанию равен bitrix.
     * @return boolean
     */
    public function initCache(int $TTL, string $uniqueString, $initDir = false, string $baseDir = "cache"): bool
    {
        return false;
    }

    /**
     * Выводит HTML содержимое кеша.
     *
     * @return void
     */
    public function output(): void
    { }

    /**
     * Возвращает PHP переменные сохраненные в кеше.
     *
     * @return array
     */
    public function getVars(): array
    {
        return [];
    }

    /**
     * Начинает буферизацию выводимого HTML, либо выводит содержимое кеша если он ещё не истек. Если файл кеша истек, то метод возвращает "true", в противном случае - "false".
     *
     * @param integer|boolean $TTL Время жизни кеша в секундах. По умолчанию - время жизни кеша предварительно заданное в методе InitCache.
     * @param string|boolean $uniqueString Уникальный идентификатор кеша. В этот идентификатор должны входить все параметры которые могут повлиять на результат исполнения кешируемого кода.
     * По умолчанию - уникальный идентификатор кеша предварительно заданный в методе InitCache.
     * @param string|boolean $initDir Папка, в которой хранится кеш компонента, относительно /bitrix/cache/. Если значение - "/", то кеш будет действительным для всех каталогов сайта.
     * По умолчанию - имя каталога предварительно заданное в методе InitCache.
     * @param array $vars Массив переменных, которые необходимо закешировать
     * @param string $baseDir Базовая директория кеша. По умолчанию равен cache, то есть все сохраняется в /BX_PERSONAL_ROOT/cache/, где BX_PERSONAL_ROOT по умолчанию равен bitrix.
     * @return boolean
     */
    public function startDataCache($TTL = false, $uniqueString = false, $initDir = false, array $vars = array(), string $baseDir = "cache"): bool
    {
        return false;
    }

    /**
     * Отменяет создание текущего кэша.
     *
     * @return void
     */
    public function abortDataCache(): void
    { }

    /**
     * Выводит буферизированный HTML и сохраняет его на диске вместе с заданным массивом переменных в файл кеша.
     *
     * @param array|boolean $vars Массив переменных, значения которых необходимо записать в файл кэша
     * @return void
     */
    public function endDataCache($vars = false)
    { }

    /**
     * Проверяет не истек ли период жизни кеша. Метод как правило используется для удаления файлов кеша, период жизни которых истек.
     * Примечание. Файл кеша создаваемый методами класса CPHPCache имеет расширение ".php"
     *
     * @param string $path Полный путь к файлу кеша.
     * @return boolean
     */
    public function isCacheExpired(string $path): bool
    {
        return false;
    }

    public function isStarted(): bool
    {
        return false;
    }

    public static function clearCache($full = false, $initDir = ""): bool
    {
        return false;
    }

    /**
     * Метод устанавливает режим игнорирования TTL и перезаписывает кеш.
     *
     * @param boolean $mode
     * @return void
     */
    public function forceRewriting(bool $mode): void
    { }
}
