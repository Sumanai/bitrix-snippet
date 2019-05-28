<?php

class CAllIBlockProperty
{
    /**
     * Текст последне ошибки
     *
     * @var string
     */
    public $LAST_ERROR = "";

    /**
     * Возвращает список свойств по фильтру arFilter отсортированные в порядке arOrder.
     *
     * @param array $arOrder Массив для сортировки, имеющий вид by1=>order1[,by2=>order2 [, ..]], где: by - поле сортировки
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значение" [, ...]). Ни один параметр фильтра не принимает массивы.
     * @return CIBlockPropertyResult Возвращается объект CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockproperty/getlist.php
     */
    public static function GetList(array $arOrder = [], array $arFilter = []): CIBlockPropertyResult
    {
        return new CIBlockPropertyResult();
    }

    /**
     * Метод удаляет свойство и все его значения.
     *
     * @param integer $ID Код свойства.
     * @return boolean В случае успешного удаления возвращается true, иначе - false.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockproperty/delete.php
     */
    public static function Delete(int $ID): bool
    {
        return false;
    }

    /**
     * Метод добавляет новое свойство. Отменить добавление или изменить поля свойства можно в обработчике события OnBeforeIBlockPropertyAdd. После добавления нового свойства вызываются обработчики события OnAfterIBlockPropertyAdd.
     *
     * @param array $arFields Массив Array("поле"=>"значение", ...). Содержит значения всех полей свойства. Кроме того, с помощью поля "VALUES", значением которого должен быть массив структуры array(array("VALUE"=>"значение", "DEF"=>"по умолчанию (Y/N)", "SORT"=>"индекс сортировки"),...), можно установить варианты выбора для свойств типа "список" (подробнее смотрите метод CIBlockProperty::UpdateEnum()).
     * @return integer|boolean  Метод возвращает ID добавленного свойства, если добавление прошло успешно, при возникновении ошибки метод вернет false, а в свойстве объекта LAST_ERROR будет содержаться текст ошибки.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockproperty/add.php
     */
    public function Add(array $arFields)
    { }

    /**
     * Метод изменяет параметры свойства с кодом ID. Перед изменением параметров вызываются обработчики события OnBeforeIBlockPropertyUpdate из которых можно отменить изменения или переопределить поля. А после изменения параметром вызывается событие OnAfterIBlockPropertyUpdate.
     * Примечание: без необходимости не передавайте в arFields параметр IBLOCK_ID. Если в arFields передается IBLOCK_ID и в инфоблоке включена поддержка свойств для разделов (и умный фильтр), то свойство отвяжется от верхнего раздела и снова привяжется к верхнему разделу.
     *
     * @param integer $ID ID изменяемой записи.
     * @param array $arFields Массив Array("поле"=>"значение", ...). Содержит значения всех полей изменяемого свойства. Кроме того, с помощью поля "VALUES", значением которого должен быть массив вида Array(Array("VALUE"=>"значение", "DEF"=>"по умолчанию (Y/N)", "SORT"=>"индекс сортировки"),...), можно установить варианты выбора для свойств типа "список" (подробнее смотрите метод CIBlockProperty::UpdateEnum()).
     * @param boolean $bCheckDescription
     * @return boolean Метод возвращает true если изменение прошло успешно, при возникновении ошибки метод вернет false, а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockproperty/update.php
     */
    public function Update(int $ID, array $arFields, bool $bCheckDescription = false): bool
    {
        return false;
    }

    /**
     * Возвращает свойство по его коду ID.
     * Примечание: если заданы оба значения IBLOCK_ID и IBLOCK_CODE, то будет производиться попытка найти свойство в одном из них (логика "или").
     *
     * @param mixed $ID Числовой или символьный код свойства.
     * @param integer|boolean $IBLOCK_ID Код информационного блока. Используется для уточнения свойства, если его ID задано символьным кодом и с таким символьным кодом свойства присутствует в нескольких информационных блоках.
     * @param string|boolean $IBLOCK_CODE Символьный код информационного блока. Используется для уточнения свойства, если его ID задано Символьным кодом и с таким символьным кодом свойства присутствует в нескольких информационных блоках.
     * @return CIBlockPropertyResult Возвращается объект CDBResult.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockproperty/getbyid.php
     */
    public static function GetByID($ID, $IBLOCK_ID = false, $IBLOCK_CODE = false): CIBlockPropertyResult
    {
        return new CIBlockPropertyResult();
    }

    /**
     * Возвращает варианты для значения свойства PROP_ID типа "список" отсортированные в порядке arOrder и отфильтрованные по arFilter.
     *
     * @param mixed $PROP_ID Числовой или символьный код свойства.
     * @param array $arOrder Массив для сортировки, имеющий вид by1=>order1[, by2=>order2 [, ..]], где by - поле сортировки, может принимать значения:
     * + id - код;
     * + value - значение,
     * + sort - поле сортировки,
     * + external_id - внешний код,
     *
     * order - порядок сортировки, может принимать значения:
     * + asc - по возрастанию;
     * + desc - по убыванию;
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значение" [, ...]) "фильтруемое поле" может принимать значения:
     * + VALUE - по значению варианта свойства (можно искать по шаблону [%_]);
     * + EXTERNAL_ID - по значению внешнего кода варианта свойства (можно искать по шаблону [%_]);
     * + IBLOCK_ID - по коду информационного блока, которому принадлежит свойство;
     * + ID - по коду значения варианта свойства;
     * @return CDBResult Возвращается объект CDBResult, содержащий записи полей вариантов свойства.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockproperty/getpropertyenum.php
     */
    public static function GetPropertyEnum($PROP_ID, array $arOrder = ["SORT"=>"asc"], array $arFilter = []): CDBResult
    {
        return new CDBResult();
    }

    /**
     * Метод устанавливает значения перечислений свойства типа "список".
     * Примечание: массив arVALUES должен содержать полный список значений, те значение для которых в этом массиве не будет найден "код существующего значения" будут удалены.
     *
     * @param integer $ID Код свойства.
     * @param array $arVALUES Массив всех значений в формате Array("код существующего значения"=>"массив полей значения", ..., "массив полей нового значения", ...). Где массив полей имеет вид: Array("VALUE"=>"значение"[, "SORT"=>"порядок сортировки"][, "DEF"=>"является значением по умолчанию (Y|N)"][, "XML_ID"=>"внешний код"]).
     * @param boolean $bForceDelete Если принимает значение true, то удаляются варианты значений, у которых VALUE пустой. Значение false позволяет сохранить значения, использованные хотя бы у одного элемента.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockproperty/updateenum.php
     */
    public function UpdateEnum(int $ID, array $arVALUES, bool $bForceDelete = true): void
    { }

    /**
     * Метод возвращает описание пользовательского типа.
     * Примечание: если параметр USER_TYPE не задан, то метод вернет массив всех пользовательских типов свойств модуля инфоблоков.
     *
     * @param string|boolean $USER_TYPE
     * @return array
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockproperty/GetUserType.php
     */
    public static function GetUserType($USER_TYPE = false): array
    {
        return [];
    }
}
