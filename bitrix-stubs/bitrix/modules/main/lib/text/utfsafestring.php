<?php

namespace Bitrix\Main\Text;

/**
 * **UtfSafeString** - класс для безопасных операций со строками, возможно содержащими невалидные символы.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/utfsafestring/index.php
 */
class UtfSafeString
{
    /**
     * Undocumented function
     *
     * @param string $haystack
     * @param string $needle
     * @return integer|boolean
     */
    public static function getLastPosition(string $haystack, string $needle)
    { }

    /**
     * Undocumented function
     *
     * @param string $string
     * @return string
     */
    public static function rtrimInvalidUtf(string $string): string
    {
        return '';
    }

    /**
     * Escapes 4-bytes UTF sequences.
     *
     * @param string $string
     * @return string
     */
    public static function escapeInvalidUtf(string $string): string
    {
        return '';
    }

    /**
     * Pads utf string as str_pad.
     * Using parameters like native str_pad().
     *
     * @param string $string
     * @param integer $padLength
     * @param string $padString
     * @param integer $padType
     * @return string
     */
    public static function pad(
        string $string,
        int $padLen,
        string $padStr = ' ',
        int $padType = STR_PAD_RIGHT
    ): string {
        return '';
    }

    /**
     * Checks array of strings or string for invalid unicode symbols.
     * If input data does not contain invalid characters, returns TRUE; otherwise, returns FALSE.
     *
     * @param array|string $data Input data to validate.
     *
     * @return boolean
     */
    public static function checkEncoding($data): bool
    {
        return false;
    }
}
