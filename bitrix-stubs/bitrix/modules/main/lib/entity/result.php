<?php

namespace Bitrix\Main\Entity;

/**
 * Result - класс результата выполнения запроса. Расширение класса \Bitrix\Main\Result.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/result/index.php
 */
class Result extends \Bitrix\Main\Result
{
    /**
     * Нестатический метод возвращает статус результата. В ядре и событиях должен вызываться с флагом internalCall.
     *
     * @param boolean $internalCall
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/result/issuccess.php
     */
    public function isSuccess(bool $internalCall = false): bool
    {
        return false;
    }

    /**
     * Метод возвращает массив объектов \Main\Error.
     *
     * @return EntityError[]|FieldError[]
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/result/geterrors.php
     */
    public function getErrors(): array
    {
        return [];
    }

    /**
     * Метод возвращает массив строк с сообщениями об ошибках.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/result/geterrormessages.php
     */
    public function getErrorMessages(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function __destruct(): void
    { }
}
