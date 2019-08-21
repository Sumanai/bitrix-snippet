<?php
namespace Bitrix\Main;

/**
 * Result - класс результата выполнения запроса.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/index.php
 */
class Result
{
    /**
     * Метод возвращает статус результата.
     *
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/issuccess.php
     */
    public function isSuccess(): bool
    {
        return false;
    }

    /**
     * Метод добавляет ошибку.
     *
     * @param Error $error
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/adderror.php
     */
    public function addError(Error $error): self
    {
        return $this;
    }

    /**
     * Метод возвращает массив объектов \Main\Error.
     *
     * @return Error[]
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/geterrors.php
     */
    public function getErrors(): array
    {
        return [];
    }

    /**
     * Метод возвращает коллекцию ошибок.
     *
     * @return ErrorCollection
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/geterrorcollection.php
     */
    public function getErrorCollection(): ErrorCollection
    {
        return new ErrorCollection();
    }

    /**
     * Метод возвращает массив строк с сообщениями об ошибках.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/geterrormessages.php
     */
    public function getErrorMessages(): array
    {
        return [];
    }

    /**
     * Метод добавляет массив объектов ошибок.
     *
     * @param Error[] $errors
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/adderrors.php
     */
    public function addErrors(array $errors): self
    {
        return $this;
    }

    /**
     * Метод устанавливает данные результата.
     *
     * @param array $data
     * @return $this
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/setdata.php
     */
    public function setData(array $data): self
    {
        return $this;
    }

    /**
     * Метод возвращает массив данных, записанных в результат.
     *
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/result/getdata.php
     */
    public function getData(): array
    {
        return [];
    }
}
