<?php

namespace Bitrix\Main\Text;

use \Bitrix\Main\Type\DateTime;

/**
 * **DateConverterResult** - класс для работы с результатом поиска дат в тексте.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/index.php
 */
class DateConverterResult
{
    const TYPE_UNKNOWN = 'UNKNOWN';
    const TYPE_RELATIVE = 'RELATIVE';
    const TYPE_DAYOFWEEK = 'DAYOFWEEK';
    const TYPE_MODIFIER = 'MODIFIER';
    const TYPE_CALENDAR = 'CALENDAR';
    const TYPE_PARTOFDAY = 'PARTOFDAY';

    /**
     * Конструктор класса `DateConverterResult`.
     *
     * @param \Bitrix\Main\Type\DateTime $date Объект класса `DateTime`
     * @param string $text Текст
     * @param string $type Необязательный параметр - тип распознавания.
     * @param array $metrics Массив фраз для распознавания.
     * @param array $metricModifier Массив модификаторов фраз распознавания.
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/__construct.php
     */
    function __construct(
        \Bitrix\Main\Type\DateTime $date,
        string $text,
        string $type = self::TYPE_UNKNOWN,
        array $metrics = [],
        array $metricModifier = []
    ) { }

    /**
     * Получает дату из текста и возвращает ее в виде объекта класса `DateTime`. В случае неудачи возвращает `null`.
     *
     * @return \Bitrix\Main\Type\DateTime|null
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/getdate.php
     */
    public function getDate(): ?DateTime
    { }

    /**
     * Преобразует дату в строку.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/gettext.php
     */
    public function getText(): string
    {
        return '';
    }

    /**
     * Возвращает позицию начала части текста, которая была преобразована в дату.
     *
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/gettextposition.php
     */
    public function getTextPosition(): int
    {
        return 0;
    }

    /**
     * Возвращает длину строки, которая была использована для преобразования в дату.
     *
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/gettextlength.php
     */
    public function getTextLength(): int
    {
        return 0;
    }

    /**
     * Возвращает основной тип распознавания даты.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/gettype.php
     */
    public function getType(): string
    {
        return '';
    }

    /**
     * Возвращает массив фраз для распознавания.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/getmetrics.php
     */
    public function getMetrics(): array
    {
        return [];
    }

    /**
     * Возвращает массив модификаторов для фраз распознавания (к примеру, "прошлый", "следующий" и т.п.)
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverterresult/getmetricmodifier.php
     */
    public function getMetricModifier(): array
    {
        return [];
    }
}
