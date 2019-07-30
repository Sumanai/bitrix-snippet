<?php

namespace Bitrix\Main\Type;

use Bitrix\Main;
use Bitrix\Main\Context;

class DateTime extends Date
{
    /**
     * Undocumented function
     *
     * @param string $time String representation of datetime.
     * @param string $format PHP datetime format. If not specified, the format is got from the current culture.
     * @param \DateTimeZone $timezone Optional timezone object.
     * @return void
     * @throws Main\ObjectException
     */
    public function __construct(string $time = null, string $format = null, \DateTimeZone $timezone = null): void
    { }

    /**
     * Нестатический метод конвертирует дату в строку с использованием региональных настроек и настроек глобальных временных зон.
     *
     * @param Context\Culture $culture Формат даты и времени для региональных настроек.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/datetime/tostring.php
     */
    public function toString(?Context\Culture $culture = null): string
    {
        return '';
    }

    /**
     * Нестатический метод возвращает объект временной зоны.
     *
     * @return \DateTimeZone
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/datetime/gettimezone.php
     */
    public function getTimeZone(): \DateTimeZone
    {
        return new \DateTimeZone('');
    }

    /**
     * Нестатический метод устанавливает объект временной зоны.
     *
     * @param \DateTimeZone $timezone Объект временной зоны.
     * @return DateTime
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/datetime/settimezone.php
     */
    public function setTimeZone(\DateTimeZone $timezone): DateTime
    {
        return $this;
    }

    /**
     * Sets default timezone.
     *
     * @return DateTime
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/datetime/setdefaulttimezone.php
     */
    public function setDefaultTimeZone(): DateTime
    {
        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $hour Hour value.
     * @param integer $minute Minute value.
     * @param integer $second Second value.
     * @return DateTime
     */
    public function setTime(int $hour, int $minute, int $second = 0): DateTime
    {
        return $this;
    }

    /**
     * Нестатический метод изменяет время с серверного на время пользователя с использованием настроек глабальных временных зон.
     *
     * @return DateTime
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/datetime/tousertime.php
     */
    public function toUserTime(): DateTime
    {
        return $this;
    }

    /**
     * Статический метод создаёт объект класса \DateTime из локального времени пользователя с использованием глобальных настроек временной зоны и региональных настроек по умолчанию.
     *
     * @param string $timeString Полное или краткое форматированное время.
     * @return DateTime
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/datetime/createfromusertime.php
     */
    public static function createFromUserTime(string $timeString): DateTime
    {
        return new DateTime();
    }

    /**
     * Returns long (including time) date culture format.
     *
     * @param Context\Culture $culture Culture.
     * @return string
     */
    protected static function getCultureFormat(Context\Culture $culture): string
    {
        return '';
    }

    /**
     * Статический метод создаёт объект класса \DateTime из объекта \DateTime PHP.
     *
     * @param \DateTime $datetime Объект источника.
     * @return static
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/datetime/createfromphp.php
     */
    public static function createFromPhp(\DateTime $datetime): DateTime
    {
        return new DateTime();
    }

    /**
     * Статический метод создаёт объект класса \DateTime из временной метки Unix.
     *
     * @param integer $timestamp Временная метка источника.
     * @return static
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/datetime/createfromtimestamp.php
     */
    public static function createFromTimestamp(int $timestamp): DateTime
    {
        return new DateTime();
    }

    /**
     * Creates DateTime object from string.
     * NULL will be returned on failure.
     *
     * @param string $timeString Full formatted time.
     * @param string $format PHP datetime format. If not specified, the format is got from the current culture.
     * @return DateTime|null
     */
    public static function tryParse(string $timeString, string $format = null): ?DateTime
    { }
}
