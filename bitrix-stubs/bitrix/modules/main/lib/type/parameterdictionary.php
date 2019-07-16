<?php

namespace Bitrix\Main\Type;

/**
 * ParameterDictionary - класс параметров словаря. Расширение класса \Bitrix\Main\Type\Dictionary.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/type/parameterdictionary/index.php
 */
class ParameterDictionary extends Dictionary
{
    /**
     * Нестатический метод возвращает оригинальное значение любой переменной по её имени. Возвращает null, если переменной не существует.
     *
     * @param string $name
     * @return string|null
     */
    public function getRaw(string $name): ?string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function toArrayRaw(): array
    {
        return [];
    }
}
