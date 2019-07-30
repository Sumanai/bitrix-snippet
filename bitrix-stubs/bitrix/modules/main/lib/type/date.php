<?php

namespace Bitrix\Main\Type;

use Bitrix\Main;
use Bitrix\Main\Context;

/**
 * Date - класс для работы с датами.
 *
 * Обращается к пространству имён:
 * - \Main;
 * - \Main\DB;
 * - \Main\Context.
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/index.php
 */
class Date
{
    /**
     * @param string $date String representation of date.
     * @param string $format PHP date format. If not specified, the format is got from the current culture.
     *
     * @return void
     * @throws Main\ObjectException
     */
    public function __construct(string $date = null, string $format = null): void
    { }

    /**
     * Нестатический метод возвращает строковое значение формата даты.
     *
     * @param string $format PHP формат даты.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/format.php
     */
    public function format(string $format): string
    {
        return '';
    }

    /**
     * Нестатический метод создаёт копию объекта.
     *
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/__clone.php
     */
    public function __clone() :void
    { }

    /**
     * Нестатический метод выполняет арифметические действия с датами.
     *
     * Продолжительность каждого периода представлена числовым значением, следующим за указателем периода. Если продолжительность включает элементы времени, то этой части спецификации предшествует буква T.
     *
     * Форматы метода аналогичны форматам дат и интервалов в PHP.
     *
     * Примеры: два дня - 2D, две секунды - T2S, 6 лет и 5 минут - 6YT5M.
     *
     * Типы блоков должны вводиться слева на право от больших величин к меньшим. Для негативных периодов используйте первым символ "-"., как и для относительного периода.
     *
     * Примеры: "+5 weeks", "12 day", "-7 weekdays", '3 months - 5 days'
     *
     * @param string $interval Временной интервал для добавления.
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/add.php
     */
    public function add(string $interval): self
    {
        return $this;
    }

    /**
     * Sets the current date of the DateTime object to a different date.
     *
     * @param integer $year
     * @param integer $month
     * @param integer $day
     * @return $this
     */
    public function setDate(int $year, int $month, int $day)
    {
        return $this;
    }

    /**
     * Нестатический метод возвращает Unix отметку времени для даты.
     *
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/gettimestamp.php
     */
    public function getTimestamp()
    {
        return 0;
    }

    /**
     * Нестатический метод конвертирует дату в строку.
     *
     * @param Context\Culture $culture Региональные настройки даты.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/tostring.php
     */
    public function toString(?Context\Culture $culture = null): string
    {
        return '';
    }

    /**
     * Нестатический метод конвертирует дату в строку в соответствии с региональными установками по умолчанию.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/__tostring.php
     */
    public function __toString(): string
    {
        return '';
    }

    /**
     * Статический метод конвертирует формат даты из региональных настроек в PHP формат.
     *
     * @param Context\Culture $culture Культурные настройки.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/getformat.php
     */
    public static function getFormat(?Context\Culture $culture = null): string
    {
        return '';
    }

    /**
     * Returns short date culture format.
     *
     * @param Context\Culture $culture Culture.
     * @return string
     */
    protected static function getCultureFormat(Context\Culture $culture)
    {
        return '';
    }

    /**
     * Статический метод конвертирует формат даты из региональных настроек в PHP формат. Аналог старого CDatabase::DateFormatToPHP
     *
     * @param string $format Format string.
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/convertformattophp.php
     */
    public static function convertFormatToPhp(string $format)
    {
        return '';
    }

    /**
     * Статический метод проверяет строку на корректность даты (при попытке создать объект класса \Date).
     *
     * @param string $time Строковое представление даты.
     * @param string $format Формат PHP даты. Если не указано, то используется формат текущих настроек.
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/iscorrect.php
     */
    public static function isCorrect(string $time, ?string $format = null): bool
    {
        return false;
    }

    /**
     * Статический метод создаёт объект класса \Date из PHP объекта класса \DateTime.
     *
     * @param \DateTime $datetime Источник объекта.
     * @return static
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/createfromphp.php
     */
    public static function createFromPhp(\DateTime $datetime): Date
    {
        return new Date();
    }

    /**
     * Статический метод создаёт объект класса \Date из Unix метки времени.
     *
     * @param integer $timestamp Метка времени.
     * @return static
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/date/createfromtimestamp.php
     */
    public static function createFromTimestamp(int $timestamp): Date
    {
        return new Date();
    }

    /**
     * Creates Date object from Text (return array of result object)
     * Examples: "end of next week", "tomorrow morning", "friday 25.10"
     *
     * @param string $text
     * @return \Bitrix\Main\Type\DateTime|null
     */
    public static function createFromText(string $text): ?DateTime
    { }
}
