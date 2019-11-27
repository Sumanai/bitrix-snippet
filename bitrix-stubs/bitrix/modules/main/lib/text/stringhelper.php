<?php

/**
 * Bitrix Framework
 * @package    bitrix
 * @subpackage main
 * @copyright  2001-2018 Bitrix
 */

namespace Bitrix\Main\Text;

/**
 * String functions
 * @package    bitrix
 * @subpackage main
 */
class StringHelper
{
    /**
     * Regular uppercase with result cache
     *
     * @param mixed $str
     *
     * @return mixed
     */
    public static function strtoupper($str)
    { }

    /**
     * Changes registry from CamelCase to snake_case
     *
     * @param string $str
     *
     * @return string
     */
    public static function camel2snake(string $str): string
    {
        return '';
    }

    /**
     * Changes registry from snake_case or SNAKE_CASE to CamelCase
     *
     * @param string $str
     *
     * @return mixed
     */
    public static function snake2camel(string $str): string
    {
        return '';
    }
}
