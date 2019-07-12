<?php

namespace Bitrix\Main\Data;

class TaggedCache
{
    /**
     * Undocumented function
     *
     * @param string $relativePath
     * @return void
     */
    public function startTagCache(string $relativePath): void
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function endTagCache(): void
    { }

    public function abortTagCache(): void
    { }

    /**
     * Undocumented function
     *
     * @param string $tag
     * @return void
     */
    public function registerTag(string $tag): void
    { }

    /**
     * Undocumented function
     *
     * @param string $tag
     * @return void
     */
    public function clearByTag(string $tag): void
    { }
}
