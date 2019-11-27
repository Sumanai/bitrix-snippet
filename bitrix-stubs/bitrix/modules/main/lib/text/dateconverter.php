<?php

namespace Bitrix\Main\Text;

/**
 * **DateConverter** - класс по распознаванию дат из текста. Класс работает для языков EN / RU / DE. Словарь для остальных языков можно создать самостоятельно: используйте в качестве примера файл `main/lang/ru/lib/text/dateconverter.php`.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverter/index.php
 */
class DateConverter
{

    /**
     * Осуществляет распознавание дат из текста.
     *
     * Examples: "end of next week", "tomorrow morning", "friday 25.10"
     *
     * @param string $text Текст для распознавания.
     * @param integer $limit Ограничение на обработку текста в символах. 0 - без ограничений. Рекомендуется использовать разумный лимит, например: распознавать дату только из первой тысячи символов.
     * @return \Bitrix\Main\Text\DateConverterResult[]
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/dateconverter/decode.php
     */
    public static function decode(string $text, int $limit = 0): array
    {
        return [];
    }
}
