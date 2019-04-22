<?php
/**
 * CIBlock - класс для работы с информационными блоками
 */
class CIBlock extends CAllIBlock
{
    /**
     * Возвращает список информационных блоков по фильтру arFilter отсортированный в порядке arOrder. Метод статический.
     *
     * @param array $arOrder Массив для сортировки результата. Содержит пары "поле сортировки"=>"направление сортировки".
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значение фильтра" [, ...]).
     * @param boolean $bIncCnt Возвращать ли количество элементов в информационном блоке в поле ELEMENT_CNT.
     * @return CDBResult
     */
    public static function GetList(array $arOrder=Array("SORT"=>"ASC"), array $arFilter=Array(), bool $bIncCnt = false): CDBResult
    {
        return new CDBResult();
    }
}
