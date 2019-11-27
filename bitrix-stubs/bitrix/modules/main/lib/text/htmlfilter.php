<?php

namespace Bitrix\Main\Text;

/**
 * **HtmlFilter** - для безопасного вывода в HTML.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/htmlfilter/index.php
 */
class HtmlFilter
{
    /**
     * Конвертирует специальные символы в HTML-сущности для безопасного вывода.
     *
     * @param string $string Конвертируемая строка.
     * @param string $flags Флаг, определяющий режим обработки кавычек, некорректных кодовых последовательностей и используемый тип документа. По умолчанию используется - `ENT_COMPAT`.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/htmlfilter/encode.php
     */
    public static function encode(string $string, string $flags = ENT_COMPAT): string
    {
        return '';
    }
}
