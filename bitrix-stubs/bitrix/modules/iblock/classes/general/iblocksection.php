<?php

class CAllIBlockSection
{
    /**
     * Текст последней ошибки.
     *
     * @var mixed
     */
    public $LAST_ERROR;

    /**
     * Метод возвращает список разделов, отсортированный в порядке "полного развернутого дерева". Метод статический. По сути является оберткой метода CIBlockSection::GetList() с предустановленным параметром сортировки.
     *
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значение" [, ...]).
     * @param array $arSelect Массив для выборки.
     * @return CIBlockResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/gettreelist.php
     */
    public static function GetTreeList(array $arFilter = [], array $arSelect = []): CIBlockResult
    {
        return new CIBlockResult();
    }

    /**
     * Метод возвращает путь по дереву от корня до раздела SECTION_ID (пользовательские поля не возвращаются).
     *
     * @param integer $IBLOCK_ID Код информационного блока, служит для проверки что раздел SECTION_ID, находится в заданном информационном блоке. Если значение IBLOCK_ID ноль, то проверка не будет выполнена и код информационного блока не будет учитываться.
     * @param integer $SECTION_ID Код раздела информационного раздела, путь до которого будет выбран.
     * @param array $arSelect Массив возвращаемых полей раздела. По умолчанию будут возвращены все доступные поля.
     * @param boolean $arrayResult
     * @return CIBlockResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/getnavchain.php
     */
    public static function GetNavChain(
        int $IBLOCK_ID,
        int $SECTION_ID,
        array $arSelect = [],
        bool $arrayResult = false
    ): CIBlockResult {
        return new CIBlockResult();
    }

    /**
     * Возвращает параметры раздела по его коду ID.
     *
     * @param integer $ID Код раздела.
     * @return CIBlockResult Возвращается объект CIBlockResult. Пользовательские поля не возвращаются.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/getbyid.php
     */
    public static function GetByID(int $ID): CIBlockResult
    {
        return new CIBlockResult();
    }

    /**
     * Метод добавляет новый раздел в информационный блок. Перед добавлением раздела вызываются обработчики события OnBeforeIBlockSectionAdd из которых можно изменить значения полей или отменить добавление раздела вернув сообщение об ошибке. После добавления раздела вызывается событие OnAfterIBlockSectionAdd.
     *
     * @param array $arFields Массив вида Array("поле"=>"значение", ...), содержащий значения полей раздела инфоблоков. 
     * Пользовательские свойства UF_XXX можно тоже занести в массив и они будут добавляться.
     * @param boolean $bResort Флаг, указывающий пересчитывать ли правую и левую границы после изменения (поля LEFT_MARGIN и RIGHT_MARGIN). 
     * Примечание: настоятельно рекомендуется не устанавливать значение false.
     * @param boolean $bUpdateSearch Флаг, указывающий, что раздел должен быть проиндексирован для поиска сразу же после сохранения
     * @param boolean $bResizePictures Использовать настройки инфоблока для обработки изображений. По умолчанию настройки не применяются. Если этот параметр имеет значение true, то к полям PICTURE и DETAIL_PICTURE будут применены правила генерации и масштабирования в соответствии с настройками информационного блока.
     * @return integer|boolean Метод возвращает код добавленного раздела блока, если добавление прошло успешно. При возникновении ошибки метод вернет false, а в свойстве объекта LAST_ERROR будет содержаться текст ошибки.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/add.php
     */
    public function Add(
        array $arFields,
        bool $bResort = true,
        bool $bUpdateSearch = true,
        bool $bResizePictures = false
    ) { }

    /**
     * Метод изменяет параметры раздела с кодом ID. Перед изменением раздела вызываются обработчики события OnBeforeIBlockSectionUpdate из которых можно изменить значения полей или отменить изменение параметров раздела вернув сообщение об ошибке. После изменения раздела вызывается событие OnAfterIBlockSectionUpdate.
     * Примечание: Изменить значения полей GLOBAL_ACTIVE, DEPTH_LEVEL, LEFT_MARGIN, RIGHT_MARGIN, IBLOCK_ID, DATE_CREATE и CREATED_BY нельзя. Значение первого определяется флагом активности раздела и его родителей. DEPTH_LEVEL, LEFT_MARGIN и RIGHT_MARGIN расчитываются автоматически в зависимости от положения раздела в дереве.
     *
     * @param integer $ID Код изменяемой записи.
     * @param array $arFields Массив вида Array("поле"=>"значение", ...), содержащий значения полей раздела инфоблоков.
     * @param boolean $bResort Флаг, указывающий пересчитывать ли правую и левую границы после изменения (поля LEFT_MARGIN и RIGHT_MARGIN).
     * Примечание: настоятельно рекомендуется не устанавливать значение false.
     * Если в перечне обновляемых полей имеются ключи IBLOCK_SECTION_ID, NAME, SORT, ACTIVE, то параметр bResort обязательно должен быть установлен в true. В противном случае необходимо вызывать после серии операций метод CIBlockSection::ReSort.
     * @param boolean $bUpdateSearch Флаг, указывающий, что раздел должен быть проиндексирован для поиска сразу же после сохранения.
     * @param boolean $bResizePictures Использовать настройки инфоблока для обработки изображений. По умолчанию настройки не применяются. Если этот параметр имеет значение true, то к полям PICTURE и DETAIL_PICTURE будут применены правила генерации и масштабирования в соответствии с настройками информационного блока.
     * @return boolean Метод возвращает true если изменение прошло успешно, при возникновении ошибки метод вернет false, а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/update.php
     */
    public function Update(
        int $ID,
        array $arFields,
        bool $bResort = true,
        bool $bUpdateSearch = true,
        bool $bResizePictures = false
    ): bool {
        return false;
    }

    /**
     * Метод удаляет раздел с кодом ID, вместе со всеми подразделами и элементами, которые привязаны только к этому разделу. Также удаляются значения свойств типа "Привязка к разделу" указывающие на удаляемый. При установленном модуле поиска раздел удаляется из поискового индекса. Перед удалением раздела вызываются обработчики события OnBeforeIBlockSectionDelete из которых можно отменить это действие. После удаления вызывается обработчик события OnAfterIBlockSectionDelete.
     *
     * @param integer $ID Код раздела.
     * @param boolean $bCheckPermissions Флаг проверки прав доступа.
     * @return boolean Возвращается true в случае успешного удаления, иначе возвращается false.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/delete.php
     */
    public static function Delete(int $ID, bool $bCheckPermissions = true): bool
    {
        return false;
    }

    /**
     * Метод пересчитывает параметры левой и правой границ для всех разделов информационного блока IBLOCK_ID. Должен использоваться после применения серии добавлений или изменений разделов при помощи методов CIBlockSection::Add() или CIBlockSection::Update() c отключенным параметром bReSort, в целях повышения производительности.
     *
     * @param integer $IBLOCK_ID код информационного блока.
     * @param integer $ID
     * @param integer $cnt
     * @param integer $depth
     * @param string $ACTIVE
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/resort.php
     */
    public static function ReSort(
        int $IBLOCK_ID,
        $ID = 0,
        $cnt = 0,
        $depth = 0,
        $ACTIVE = "Y"
    ): void { }

    /**
     * Возвращает список разделов и элементов, отсортированных в порядке arOrder по фильтру arFilter.
     * 
     * @param array $arOrder Массив для сортировки, имеющий вид by1=>order1[, by2=>order2 [, ..]], где by1, ... - поле сортировки
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значение" [, ...]).
     * @param boolean $bIncCnt Возвращать ли поле ELEMENT_CNT - количество элементов в разделе.
     * @param boolean|array $arSelectedFields Массив для выборки. Задается только для элементов.
     * @return CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/getmixedlist.php
     */
    public static function GetMixedList(
        array $arOrder = array("SORT" => "ASC"),
        array $arFilter = [],
        bool $bIncCnt = false,
        $arSelectedFields = false
    ): CDBResult {
        return new CDBResult();
    }

    /**
     * Метод считает количество элементов внутри раздела ID, учитывая фильтр arFilter.
     * @deprecated Примечание: метод устарел, для получения количества рекомендуется использовать метод CIBlockElement::GetList с установленным параметром для группировки.
     *
     * @param integer $ID Код раздела.
     * @param array $arFilter Массив вида Array("фильтруемое поле"=>"значение", ...)
     * @return integer
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/getsectionelementscount.php
     */
    public function GetSectionElementsCount(int $ID, array $arFilter = []): int
    {
        return 0;
    }

    /**
     * Возвращает количество разделов, удовлетворяющих фильтру arFilter.
     *
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значение" [, ...])
     * @return integer Число - количество разделов.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblocksection/getcount.php
     */
    public function GetCount(array $arFilter = []): int
    {
        return 0;
    }
}
