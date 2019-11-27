<?php

namespace Bitrix\Main\Text;

/**
 * Encoding - класс для работы с кодировкой.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/encoding/index.php
 */
class Encoding
{
    public static function resolveAlias($alias)
    { }

    /**
     * Конвертирует данные из кодировки источника в целевую кодировку.
     *
     * @param string|array|\SplFixedArray $data Данные для конвертации. С версии 16.0.10 данные могут быть массивом.
     * @param string $charsetFrom Кодировка источника.
     * @param string $charsetTo Целевая кодировка.
     * @param string $errorMessage Ссылка на переменную, содержащую сообщения об ошибках.
     * @return string|array|\SplFixedArray|boolean Возвращает сконвертированные данные или false в случае ошибки.
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/encoding/convertencoding.php
     */
    public static function convertEncoding($data, string $charsetFrom, string $charsetTo, string &$errorMessage = "")
    { }

    /**
     * Undocumented function
     *
     * @param string $string
     * @return boolean|string
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function convertEncodingToCurrent(string $string)
    { }

    /**
     * Undocumented function
     *
     * @param string $string
     * @return boolean
     */
    public static function detectUtf8(string $string): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getErrors(): array
    {
        return [];
    }
}
