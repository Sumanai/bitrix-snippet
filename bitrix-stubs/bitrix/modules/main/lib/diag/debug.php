<?php

namespace Bitrix\Main\Diag;

/**
 * Debug класс для проведения отладки ajax-запросов, крон-файлов и решения других подобных задач.
 * Аналоги в старом ядре:
 * AddMessage2Log,
 * mydump.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/diag/debug/index.php
 */
class Debug
{
    /**
     * Начинает отсчёт времени выполнения по имени метке.
     *
     * @param string $name Имя метки
     * @return void
     */
    public static function startTimeLabel(string $name): void
    { }

    /**
     * Заканчивает отсчёт времени выполнения по имени метки.
     *
     * @param string $name
     * @return void
     */
    public static function endTimeLabel(string $name): void
    { }

    /**
     * Выводит массив с результатами замеров.
     *
     * @return array
     */
    public static function getTimeLabels(): array
    {
        return [];
    }

    /**
     * Выводит значения переменной на экран или возвращает его.
     *
     * @param mixed $var Имя переменной
     * @param string $varName Текст, который выведется перед переменной
     * @param boolean $return Признак возврата вместо печати на экран
     * @return string|null
     */
    public static function dump($var, string $varName = '', bool $return = false): ?string
    { }

    /**
     * Запись значения переменной в лог-файл в формате функции var_dump.
     *
     * @param mixed $var Имя переменной
     * @param string $varName Текст, который выведется перед переменной
     * @param string $fileName Путь к файлу относительно корня сайта, по умолчанию __bx_log.log
     * @return void
     */
    public static function dumpToFile($var, string $varName = '', string $fileName = ''): void
    { }

    /**
     * Запись значения переменной в лог-файл в формате print_r.
     *
     * @param mixed $var Имя переменной
     * @param string $varName Текст, который выведется перед переменной
     * @param string $fileName Путь к файлу относительно корня сайта, по умолчанию __bx_log.log
     * @return void
     */
    public static function writeToFile($var, string $varName = '', string $fileName = ''): void
    { }
}
