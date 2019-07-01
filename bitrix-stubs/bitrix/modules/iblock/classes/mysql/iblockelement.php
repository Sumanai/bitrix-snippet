<?php
/**
 * CIBlockElement - класс для работы с элементами информационных блоков.
 */
class CIBlockElement extends CAllIBlockElement
{
    /**
     * Возвращает список элементов по фильтру arFilter.
     *
     * @param array $arOrder Массив вида Array(by1=>order1[, by2=>order2 [, ..]]).
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значения фильтра" [, ...]).
     * @param boolean|array $arGroupBy Массив полей для группировки элемента. Если поля указаны, то выборка по ним группируется (при этом параметр arSelectFields будет проигнорирован), а в результат добавляется поле CNT - количество сгруппированных элементов. Если указать в качестве arGroupBy пустой массив, то метод вернет количество элементов CNT по фильтру. Группировать можно по полям элемента, а также по значениям его свойств. Для этого в качестве одного из полей группировки необходимо указать PROPERTY_<PROPERTY_CODE>, где PROPERTY_CODE - ID или символьный код свойства.
     * @param boolean|array $arNavStartParams Параметры для постраничной навигации и ограничения количества выводимых элементов. массив вида "Название параметра"=>"Значение".
     * @param array $arSelectFields Массив возвращаемых полей элемента. В списке полей элемента можно сразу выводить значения его свойств. Обязательно должно быть использованы поля IBLOCK_ID и ID, иначе не будет работать корректно. Кроме того, также  в качестве одного из полей необходимо указать PROPERTY_<PROPERTY_CODE>, где PROPERTY_CODE - ID или символьный код (задается в верхнем регистре, даже если в определении свойств инфоблока он указан в нижнем регистре). В результате будет выведены значения свойств элемента в виде полей PROPERTY_<PROPERTY_CODE>_VALUE - значение; PROPERTY_<PROPERTY_CODE>_ID - код значения у элемента; PROPERTY_<PROPERTY_CODE>_ENUM_ID - код значения (для свойств типа список).
     * При установленном модуле торгового каталога можно выводить и цены элемента. Для этого в качестве одного из полей необходимо указать CATALOG_GROUP_<PRICE_CODE>, где PRICE_CODE - ID типа цены.
     * Так же есть возможность выбрать поля элементов по значениям свойства типа "Привязка к элементам". Для этого необходимо указать  PROPERTY_<PROPERTY_CODE>.<FIELD>, где PROPERTY_CODE - ID или символьный код свойства привязки, а FIELD - поле указанного в привязке элемента. См. ниже "Поля связанных элементов для сортировки".
     * Можно выбрать и значения свойств элементов по значениям свойства типа "Привязка к элементам". Для этого необходимо указать  PROPERTY_<PROPERTY_CODE>.PROPERTY_<PROPERTY_CODE2>, где PROPERTY_CODE - ID или символьный код свойства привязки, а PROPERTY_CODE2 - свойство указанного в привязке элемента.
     * @return integer|CIBlockResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getlist.php
     */
    public static function GetList(
        $arOrder = array("SORT" => "ASC"),
        $arFilter = [],
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = []
    ): CIBlockResult {
        return new CIBlockResult();
    }

    /**
     * Метод изменяет параметры элемента с кодом ID. Перед изменением элемента вызываются обработчики события  OnStartIBlockElementUpdate из которых можно изменить значения полей или отменить изменение элемента вернув сообщение об ошибке. После изменения элемента вызывается само событие OnAfterIBlockElementUpdate.
     * Если изменяется свойство типа файл, то необходимо сформировать массив.
     *
     * @param integer $ID ID изменяемой записи.
     * @param array $arFields Массив вида Array("поле"=>"значение", ...), содержащий значения полей элемента инфоблоков и дополнительно может содержать поле "PROPERTY_VALUES" - массив со всеми значениями свойств элемента в виде массива Array("код свойства"=>"значение свойства"). Где "код свойства" - числовой или символьный код свойства, "значение свойства" - одиночное значение, либо массив значений (если свойство множественное).
     * Если массив PROPERTY_VALUES задан, то он должен содержать полный набор значений свойств для данного элемента, т.е. если в нем будет отсутствовать одно из свойств, то все его значения для данного элемента будут удалены.
     * Это справедливо для всех типов свойств кроме типа файл. Файлы надо удалять через массив с параметром "del"=>"Y".
     * Если свойство типа список, то в PROPERTY_VALUES надо отдавать не название, а ID значения.
     * Дополнительно для сохранения значения свойств см: CIBlockElement::SetPropertyValues(), CIBlockElement::SetPropertyValueCode().
     * @param boolean $bWorkFlow Изменение в режиме документооборота. Если true и модуль документооборота установлен, то данное изменение будет учтено в журнале изменений элемента.
     * @param boolean $bUpdateSearch Индексировать элемент для поиска. Для повышения производительности можно отключать этот параметр во время серии изменений элементов, а после их окончания переиндексировать поиск. Не обязательный параметр, по умолчанию элемент после изменения будет автоматически проиндексирован в поиске.
     * @param boolean $bResizePictures Использовать настройки инфоблока для обработки изображений. По умолчанию настройки не применяются. Если этот параметр имеет значение true, то к полям PREVIEW_PICTURE и DETAIL_PICTURE будут применены правила генерации и масштабирования в соответствии с настройками информационного блока.
     * @param boolean $bCheckDiskQuota Проверять ограничение по месту занимаемому базой данных и файлами или нет (настройка главного модуля).
     * @return boolean Метод возвращает true если изменение прошло успешно, при возникновении ошибки метод вернет false, а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/update.php
     */
    public function Update(
        int $ID,
        array $arFields,
        bool $bWorkFlow = false,
        bool $bUpdateSearch = true,
        bool $bResizePictures = false,
        bool $bCheckDiskQuota = true
    ): bool {
        return false;
    }

    /**
     * Метод сохраняет значения всех свойств элемента информационного блока.
     *
     * @param integer $ELEMENT_ID Код элемента, значения свойств которого необходимо установить.
     * @param integer $IBLOCK_ID Код информационного блока.
     * @param array $PROPERTY_VALUES Массив значений свойств, в котором коду свойства ставится в соответствие значение свойства.
     * Если PROPERTY_CODE установлен, то должен содержать одно или массив всех значений свойства (множественное) для заданного элемента.
     * Если PROPERTY_CODE равен false, то PROPERTY_VALUES должен быть вида Array("код свойства1"=>"значения свойства1", ....), где "код свойства" - числовой или символьный код свойства, "значения свойства" - одно или массив всех значений свойства (множественное). При этом массив PROPERTY_VALUES должен содержать полный набор значений свойств для данного элемента, т.е. если в нем будет остутствовать одно из свойств, то все его значения для данного элемента будут удалены.
     * Это справедливо для всех типов свойств кроме типа файл. Файлы надо удалять через массив с параметром "del"=>"Y".
     *  Если свойство типа файл множественное, то файл будет удален в случае присутствия параметра del, независимо от принимаемого им значения.
     * @param string|boolean $PROPERTY_CODE  Код изменяемого свойства. Если этот параметр отличен от false, то изменяется только свойство с таким кодом.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/setpropertyvalues.php
     */
    public function SetPropertyValues(
        int $ELEMENT_ID,
        int $IBLOCK_ID,
        array $PROPERTY_VALUES,
        $PROPERTY_CODE = false
    ): void { }
}