<?php

/**
 * CIBlockSection - класс для работы с разделами (группами) информационных блоков.
 */
class CIBlockSection extends CAllIBlockSection
{
    /**
     * Возвращает список разделов, отсортированных в порядке arOrder по фильтру arFilter.
     *
     * @param array $arOrder Массив для сортировки, имеющий вид by1=>order1[, by2=>order2 [, ..]]
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значение" [, ...]).
     * @param boolean $bIncCnt Возвращать ли поле ELEMENT_CNT - количество элементов в разделе.
     * @param array $arSelect Массив для выборки.
     * @param boolean $arNavStartParams Массив для постраничной навигации.
     * @return CIBlockResult Возвращается объект CIBlockResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/getlist.php
     */
    public static function GetList(
        array $arOrder = array("SORT" => "ASC"),
        array $arFilter = [],
        bool $bIncCnt = false,
        array $arSelect = [],
        bool $arNavStartParams = false
    ): CIBlockResult {
        return new CIBlockResult();
    }
}
