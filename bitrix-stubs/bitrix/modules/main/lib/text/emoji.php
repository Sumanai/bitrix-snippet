<?php

namespace Bitrix\Main\Text;

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2019 Bitrix
 */
class Emoji
{
    /**
     * Undocumented function
     *
     * @param string $text
     * @return string
     */
    public static function encode(string $text): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $text
     * @return string
     */
    public static function decode(string $text): string
    {
        return '';
    }

    /**
     * Undocumented function
     * 
     * @param string $text
     * @param callable $callback
     *
     * @return string|string[]|null
     */
    public static function replace(string $text, callable $callback)
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    public static function getSaveModificator(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public static function getFetchModificator(): array
    {
        return [];
    }
}
