<?php

namespace Bitrix\Main;

/**
 * HttpApplication - класс отвечает за обычный http-хит на сайте. Расширение абстрактного класса \Application.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httpapplication/index.php
 */
class HttpApplication extends Application
{
    /**
     * Нестатический метод запускает выполнение запроса. Вызывается после инициализации.
     * 
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httpapplication/start.php
     */
    public function start(): void
    { }

    /**
     * Нестатический метод завершает выполнение запроса.
     * Метод регистрируется в start и вызывается автоматически при выполнении скрипта.
     * 
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/httpapplication/finish.php
     */
    public function finish(): void
    { }
}
