<?php
/** @global CDatabase $DB */

class CDatabase extends CDatabaseMysql
{ }

class CDBResult extends CDBResultMysql
{
    /**
     * Метод возвращает название поля по его номеру.
     * @param int $column Номер поля.
     * @return mixed Название поле или false в случае ошибки.
     */
    public function FieldName(int $column)
    { }

    /**
     * Метод возвращает количество полей результата выборки
     * @return int Количество полей
     */
    public function FieldsCount(): int
    {
        return 0;
    }

    /**
     * Метод возвращает количество выбранных записей (выборка записей осуществляется с помощью SQL-команды "SELECT ...").
     * @return int Количество выбранных записей.
     */
    public function SelectedRowsCount(): int
    {
        return 0;
    }

    /**
     * Метод возвращает количество записей, измененных SQL-командами INSERT, UPDATE или DELETE.
     * @return int Количество записей
     */
    public function AffectedRowsCount(): int
    {
        return 0;
    }
}
