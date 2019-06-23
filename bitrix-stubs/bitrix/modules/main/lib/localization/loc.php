<?php
namespace Bitrix\Main\Localization;

/**
 * Loc - финальный класс для работы с языковыми файлами.
 */
final class Loc
{
    /**
     * Статический метод возвращает по коду соответствующее сообщение на текущем языке. Массивы соответствий кодов и сообщений задаются в языковых файлах. Перед использованием этой функции необходимо подключить соответствующий языковой файл ( Loc::loadMessages(\_\_FILE\_\_)).
     *
     * @param string $code Код сообщения. Код должен быть уникальным в рамках всего продукта.
     * @param array $replace Массив пар "шаблон" => "замена". Позволяет организовать замену по шаблону. Например, array("#NUM#"=>5).
     * @param string $language ID языка.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/localization/loc/getmessage.php
     */
    public static function getMessage(string $code, array $replace = null, string $language = null): string
    {
        return '';
    }

    /**
     * Статический метод обозначает, для какого файла мы бы хотели в будущем загрузить языковые файлы. Поиск папки и подключение языкового файла будет происходить только при необходимости, когда вызовется Loc::getMessage (или функция GetMessage старого ядра, которая вызовет Loc::getMessage). Этот механизм в Bitrix Framework называется ленивая загрузка.
     * Loc::getMessage будет искать первую папку /lang наверх по файловой структуре относительно переданного файла.
     *
     * @param string $file Файл.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/localization/loc/loadmessages.php
     */
    public static function loadMessages(string $file): void
    { }

    /**
     * Undocumented function
     *
     * @return string
     */
    public static function getCurrentLang(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $language
     * @return void
     */
    public static function setCurrentLang(string $language): void
    { }

    /**
     * Статический метод возвращает языковые сообщения для указанного файла.
     *
     * @param string $file Файл
     * @param string $language ID языка
     * @param bool $normalize
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/localization/loc/loadlanguagefile.php
     */
    public static function loadLanguageFile(string $file, string $language = null, bool $normalize = true): array
    {
        return [];
    }

    /**
     * Статический метод загружает изменённые фразы из файла для перезаписи сообщений по их ID.
     *
     * @param string $file Файл с фразами
     * @param string $language ID языка
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/localization/loc/loadcustommessages.php
     */
    public static function loadCustomMessages(string $file, string $language = null): void
    { }

    /**
     * Статический метод возвращает язык-замену по умолчанию для других языков. Сообщение на языке по умолчанию используется если сообщение на выбранном языке не найдено.
     *
     * @param string $lang Сообщение на выбранном языке.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/localization/loc/getdefaultlang.php
     */
    public static function getDefaultLang(string $lang): string
    {
        return '';
    }

    /**
     * Returns previously included lang files.
     * 
     * @return array
     */
    public static function getIncludedFiles(): array
    {
        return [];
    }
}
