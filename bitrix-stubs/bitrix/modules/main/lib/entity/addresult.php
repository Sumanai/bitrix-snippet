<?php

namespace Bitrix\Main\Entity;

/**
 * AddResult - класс добавления записей. Расширение класса \Bitrix\Main\Entity\Result.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/addresult/index.php
 */
class AddResult extends Result
{
    /**
     * Undocumented function
     *
     * @param integer|array $id
     * @return void
     */
    public function setId($id): void
    { }

    /**
     * Метод возвращает ID добавленной записи.
     *
     * @return integer|array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/entity/addresult/getid.php
     */
    public function getId()
    { }

    /**
     * Undocumented function
     *
     * @param array $primary
     */
    public function setPrimary($primary): void
    { }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getPrimary(): array
    {
        return [];
    }
}
