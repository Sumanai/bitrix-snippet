<?php

namespace Bitrix\Main\Web;

/**
 * Json - класс реализует работу с текстовым форматом обмена данными JavaScript Object Notation (JSON).
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/json/index.php
 */
class Json
{
    const JSON_ERROR_UNKNOWN = -1;

    /**
     * Метод возвращает строку, содержащую JSON представление переменной $data.
     *
     * @param mixed $data Данные для кодирования.
     * @param integer $options Параметры битовой маски. По умолчанию: JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS|JSON_HEX_QUOT.
     * @return string|boolean
     * @throws \Bitrix\Main\ArgumentException
     * @see json_encode
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/json/encode.php
     */
    public static function encode($data, int $options = null)
    { }

    /**
     * Метод выполняет декодирование строки JSON и конвертирует данные в переменные PHP.
     *
     * @param string $data Json строка для декодирования.
     * @return mixed
     * @throws \Bitrix\Main\ArgumentException
     * @see json_decode
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/json/decode.php
     */
    public static function decode(string $data)
    { }
}
