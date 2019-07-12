<?php

namespace Bitrix\Main\Data;

class ManagedCache
{
    public function __construct()
    { }

    /**
     * Tries to read cached variable value from the file
     * Returns true on success
     * otherwise returns false
     *
     * @param integer $ttl
     * @param string $uniqueId
     * @param mixed $tableId
     * @return boolean
     */
    public function read(int $ttl, string $uniqueId, $tableId = false): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @param integer $ttl
     * @param string $uniqueId
     * @param mixed $tableId
     * @return void
     */
    public function getImmediate(int $ttl, string $uniqueId, $tableId = false)
    { }

    /**
     * This method is used to read the variable value
     * from the cache after successfull Read
     *
     * @param string $uniqueId
     * @return mixed
     */
    public function get(string $uniqueId)
    { }

    /**
     * Sets new value to the variable
     *
     * @param string $uniqueId
     * @param mixed $val
     * @return void
     */
    public function set(string $uniqueId, $val): void
    { }

    public function setImmediate(string $uniqueId, $val): void
    { }

    /**
     * Marks cache entry as invalid
     *
     * @param string $uniqueId
     * @param mixed $tableId
     * @return void
     */
    public function clean(string $uniqueId, $tableId = false): void
    { }

    /**
     * Marks cache entries associated with the table as invalid
     *
     * @param string $tableId
     * @return void
     */
    public function cleanDir(string $tableId): void
    { }

    /**
     * Clears all managed_cache
     *
     * @return void
     */
    public function cleanAll(): void
    { }

    /**
     * Use it to flush cache to the files.
     * Causion: only at the end of all operations!
     *
     * @return void
     */
    public static function finalize()
    { }

    /**
     * Undocumented function
     *
     * @param string $relativePath
     * @return string
     */
    public function getCompCachePath(string $relativePath): string
    {
        return '';
    }
}
