<?php

namespace Bitrix\Main\Text;

class GeoHash
{
    const MAX_LENGTH = 15;

    /**
     * Undocumented function
     *
     * @param array $coordinate
     * @param integer $length
     * @return string
     */
    public static function encode(array $coordinate, int $length = self::MAX_LENGTH): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $geohash
     * @return array
     */
    public static function decode(string $geohash): array
    {
        return [];
    }
}
