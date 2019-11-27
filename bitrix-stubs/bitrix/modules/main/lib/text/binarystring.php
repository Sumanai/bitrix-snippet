<?php

namespace Bitrix\Main\Text;

/**
 * **BinaryString** - класс для операций с бинарными строками.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/binarystring/index.php
 */
class BinaryString
{
    /**
     * Возвращает длину строки или **0**, если строка пуста. Выполняет безопасную с точки зрения многобайтных кодировок операцию. Аналог PHP функции **strlen**.
     *
     * @param mixed $str Строка, для которой измеряется длина.
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/binarystring/getlength.php
     */
    public static function getLength($str): int
    {
        return 0;
    }

    /**
     * Возвращает подстроку строки `str`, начинающейся с `start` символа по счету или false в случае возникновения ошибки или пустую строку **string**. Выполняет безопасную с точки зрения многобайтных кодировок операцию. Аналог PHP функции **substr**.
     *
     * @param mixed $str Входная строка. Должна содержать хотя бы один символ.
     * @param mixed $start Если значение неотрицательно, то возвращаемая подстрока начинается с указанной позиции от начала строки, считая от нуля. Например, в строке `abcdef`, в позиции 0 находится символ **a**, в позиции 2 - символ **c**, и так далее.
     * Если значение отрицательное, то возвращаемая подстрока начинается с позиции, отстоящей на указанное число символов от конца строки `string`.
     * Если `string` меньше либо содержит ровно `start` символов, будет возвращено *false*.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/binarystring/getsubstring.php
     */
    public static function getSubstring($str, $start): string
    {
        return '';
    }

    /**
     * Возвращает позицию, в которой находится искомая строка, относительно начала строки **haystack**, независимо от смещения **offset**. Позиция строки отсчитывается от 0, а не от 1. Возвращает *false*, если искомая строка не найдена. Выполняет безопасную с точки зрения многобайтных кодировок операцию. Аналог PHP функции **strpos**.
     *
     * @param mixed $haystack Строка, в которой производится поиск.
     * @param mixed $needle Искомая подстрока. Если не является строкой, он приводится к целому и трактуется как код символа.
     * @param integer $offset Смещение. Если этот параметр указан, то поиск будет начат с указанного количества символов с начала строки. Не может быть отрицательным.
     * @return boolean|integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/binarystring/getposition.php
     */
    public static function getPosition($haystack, $needle, int $offset = 0)
    { }

    /**
     * Ищет позицию последнего вхождения подстроки **needle** в строку **haystack**. Выполняет безопасную с точки зрения многобайтных кодировок операцию. Возвращает номер позиции последнего вхождения искомой подстроки относительно начала строки **haystack**, независимо от направления поиска и смещения **offset**. Позиция строки отсчитывается от 0, а не от 1. Возвращает *false*, если искомая строка не найдена. Аналог PHP функции **strrpos**.
     *
     * @param mixed $haystack Строка, в которой производится поиск.
     * @param mixed $needle Искомая подстрока. Если не является строкой, то он приводится к целому и трактуется как код символа
     * @param integer $offset Если значение указано, то поиск начнется с данного количества символов с начала строки. Если значение отрицательное, то поиск начнется с указанного количества символов от конца строки, но по прежнему будет производится поиск последнего вхождения.
     * @return boolean|integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/binarystring/getlastposition.php
     */
    public static function getLastPosition($haystack, $needle, int $offset = 0)
    { }

    /**
     * Возвращает позицию, в которой находится искомая строка, относительно начала строки **haystack**, независимо от смещения **offset**, без учета регистра. Позиция строки отсчитывается от 0, а не от 1. Возвращает *false*, если искомая строка не найдена. Выполняет безопасную с точки зрения многобайтных кодировок операцию. Аналог PHP функции **stripos**.
     *
     * @param mixed $haystack Строка, в которой производится поиск.
     * @param mixed $needle Искомая подстрока
     * @param integer $offset Если этот параметр указан, то поиск будет начат с указанного количества символов с начала строки. Не может быть отрицательным.
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/binarystring/getpositionignorecase.php
     */
    public static function getPositionIgnoreCase($haystack, $needle, int $offset = 0): int
    {
        return 0;
    }

    /**
     * Выполняет безопасную с точки зрения многобайтных кодировок операцию. Возвращает номер позиции последнего вхождения подстроки **needle** относительно начала строки **haystack**, независимо от направления поиска и смещения **offset**. Позиция строки отсчитывается от 0, а не от 1. Возвращает *false*, если искомая строка не найдена. Аналог PHP функции **strripos**.
     *
     * @param mixed $haystack Строка, в которой производится поиск.
     * @param mixed $needle Искомая подстрока. Если параметр не является строкой, то он будет преобразован к целому и обработан как код символа.
     * @param integer $offset Если значение указано, то поиск начнется с данного количества символов с начала строки. Если значение отрицательное, то поиск начнется с указанного количества символов от конца строки, но по прежнему будет производится поиск последнего вхождения.
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/binarystring/getlastpositionignorecase.php
     */
    public static function getLastPositionIgnoreCase($haystack, $needle, int $offset = 0): int
    {
        return 0;
    }

    /**
     * Преобразует строку в нижний регистр. Выполняет безопасную с точки зрения многобайтных кодировок операцию. Аналог PHP функции **strtolower**.
     *
     * @param mixed $str Входная строка для преобразования.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/binarystring/changecasetolower.php
     */
    public static function changeCaseToLower($str): string
    {
        return '';
    }
}
