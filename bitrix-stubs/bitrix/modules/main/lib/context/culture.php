<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2012 Bitrix
 */

namespace Bitrix\Main\Context;

class Culture
{
    /**
     * Undocumented function
     *
     * @param array|null $fields
     * @return void
     */
    public function __construct(?array $fields = null): void
    { }

    /**
     * Undocumented function
     *
     * @param integer $cultureId
     * @return Culture
     */
    public static function wakeUp(int $cultureId): ?Culture
    { }

    /**
     * Undocumented function
     *
     * @return string
     * @throws Main\ObjectPropertyException
     */
    public function getDateTimeFormat(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string
     * @throws Main\ObjectPropertyException
     */
    public function getDateFormat(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string
     * @throws Main\ObjectPropertyException
     */
    public function getCharset(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return string
     * @throws Main\ObjectPropertyException
     */
    public function getNameFormat(): string
    {
        return '';
    }
}
