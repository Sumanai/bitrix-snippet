<?php

namespace Bitrix\Main\Config;

/**
 * ConfigurationException - класс для вывода ошибок в конфигурации.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/configurationexception/index.php
 */
class ConfigurationException extends \Bitrix\Main\SystemException
{
    /**
     * Исключение выводится если произошла ошибка конфигурации (т.е. система расстроена). Код ошибки выставляется 180.
     *
     * @param string $message
     * @param \Exception $previous
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/config/configurationexception/__construct.php
     */
    public function __construct(string $message = '', \Exception $previous = null)
    { }
}
