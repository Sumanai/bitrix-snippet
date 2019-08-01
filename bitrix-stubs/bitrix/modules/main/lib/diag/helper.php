<?php

namespace Bitrix\Main\Diag;

/**
 * Helper - класс-помощник.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/diag/helper/index.php
 */
class Helper
{
    /**
     * Метод возвращает текущую метку времени Unix с микросекундами.
     *
     * @return float
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/diag/helper/getcurrentmicrotime.php
     */
    public static function getCurrentMicrotime(): float
    {
        return 0.0;
    }

    /**
     * Метод возвращает трассировку массива.
     *
     * @param integer $limit Максимальное стек элементов для возврата.
     * @param null|integer $options Передаваемые опции для функции debug_backtrace.
     * @param integer $skip Количество пропускаемых фреймов стека.
     * @return array
     * @see debug_backtrace
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/diag/helper/getbacktrace.php
     */
    public static function getBackTrace(int $limit = 0, ?int $options = null, int $skip = 1): array
    {
        return [];
    }
}
