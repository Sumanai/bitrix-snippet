<?php

namespace Bitrix\Main\Config;

use Bitrix\Main;

/**
 * Option - класс для работы с параметрами модулей, хранимых в базе данных. Аналог класса COption в старом ядре.
 * Как правило управление параметрами модулей осуществляется в административном интерфейсе в настройках соответствующих модулей.
 * Класс является (с определёнными оговорками) заменой COption в старом ядре. В новом ядре нет разделение методов на int и string, а при удалении используется массив-фильтр. Так же в новом классе есть несколько совершенно новых методов, не имеющих аналогов в старом классе.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/option/index.php
 */
class Option
{

    /**
     * Возвращает значение параметра.
     *
     * Аналог методов COption::GetOptionInt и COption::GetOptionString в старом ядре.
     *
     * @param string $moduleId ID модуля.
     * @param string $name Имя параметра.
     * @param string $default Возвращается значение по умолчанию, если значение не задано.
     * @param boolean|string $siteId ID сайта, если значение параметра различно для разных сайтов.
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/option/get.php
     */
    public static function get(string $moduleId, string $name, string $default = '', $siteId = false): string
    {
        return '';
    }

    /**
     * Возвращает реальные значения параметров, какие были записаны в Базу данных.
     *
     * @param string $moduleId ID модуля.
     * @param string $name Имя параметра.
     * @param boolean|string $siteId ID сайта, если для разных сайтов установлены разные значения.
     * @return null|string
     * @throws Main\ArgumentNullException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/option/getrealvalue.php
     */
    public static function getRealValue(string $moduleId, string $name, $siteId = false): ?string
    {
        return '';
    }

    /**
     * Возвращает массив с значениями по умолчанию параметров модуля
     *
     * @param string $moduleId ID модуля.
     * @return array
     * @throws Main\ArgumentOutOfRangeException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/option/getdefaults.php
     */
    public static function getDefaults(string $moduleId): array
    {
        return [];
    }

    /**
     * Возвращает массив установленных параметров для модуля array(name => value).
     *
     * @param string $moduleId Идентификатор модуля.
     * @param boolean|string $siteId ID сайта, если параметры различаются для разных сайтов.
     * @return array
     * @throws Main\ArgumentNullException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/option/getformodule.php
     */
    public static function getForModule(string $moduleId, $siteId = false): array
    {
        return [];
    }

    /**
     * Устанавливает значения параметра и сохраняет его в Базу данных. После сохранения запускается событие OnAfterSetOption.
     * Аналогичен функциям COption::SetOptionInt и COption::SetOptionString в старом ядре.
     *
     * @param string $moduleId ID модуля. Длина не более 50 символов.
     * @param string $name Имя параметра. Длина не более 50 символов.
     * @param string $value Значение параметра. Максимальная сохраняемая длина значения - 2000 символов.
     * @param string $siteId Идентификатор сайта, для которого устанавливается параметр. Если установлен false, то будет текущий сайт.
     * @throws Main\ArgumentOutOfRangeException
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/option/set.php
     */
    public static function set(string $moduleId, string $name, string $value = '', string $siteId = ''): void
    { }

    /**
     * Удаляет значения параметров модуля для сайта из Базы данных. Значение только одно, массив полей передать нельзя. То есть удалить сразу несколько параметров, просто перечислив их имена, нельзя.
     * Аналог метода COption::RemoveOption в старом ядре.
     *
     * @param string $moduleId ID модуля.
     * @param array $filter Массив ключей фильтра:
     * + name - Название параметра
     * + site_id - ID сайта (может оставаться пустым)
     * @throws Main\ArgumentNullException
     */
    public static function delete(string $moduleId, array $filter = []): void
    { }
}
