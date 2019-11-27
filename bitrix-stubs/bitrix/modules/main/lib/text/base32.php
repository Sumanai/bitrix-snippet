<?php

namespace Bitrix\Main\Text;

use Bitrix\Main\ArgumentTypeException;
use Bitrix\Main\DecodingException;

class Base32
{
    /**
     * Encode data to Base32 string
     *
     * @param string $string Data to encode.
     * @return string Base32 encoded data.
     * @throws ArgumentTypeException
     */
    public static function encode(string $string): string
    {
        return '';
    }

    /**
     * Decode Base32 encoded string
     *
     * @param string $base32String Base32 encoded string.
     * @throws ArgumentTypeException
     * @throws DecodingException
     * @return string Original data.
     */
    public static function decode($base32String): string
    {
        return '';
    }
}
