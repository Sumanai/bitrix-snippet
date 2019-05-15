<?php

class CAllIBlockElement
{
    /** @var string Текст последней ошибки */
    public $LAST_ERROR = '';

    /**
     * Позволяет использовать подзапросы.
     * Примечание: применимо только к полю ID элемента основного запроса.
     *
     * @param string $strField Название поля, по которому будет осуществляться фильтрация.
     * Возможные значения:
     * ID - по идентификатору элемента 
     * PROPERTY_<PROPERTY_CODE> - по значению свойства, где PROPERTY_CODE - это ID или символьный код свойства привязки. Свойство должно быть типа "привязка к элементам". 
     * @param array $arFilter Фильтр элементов тот же, что и в методе CIBlockElement::GetList.
     * @return object
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/SubQuery.php
     */
    public static function SubQuery(string $strField, array $arFilter)
    { }

    /**
     * Метод добавляет новый элемент информационного блока. Перед добавлением элемента вызываются обработчики события OnBeforeIBlockElementAdd, из которых можно изменить значения полей или отменить добавление элемента вернув сообщение об ошибке. После добавления элемента вызывается событие OnAfterIBlockElementAdd.
     *
     * @param array $arFields Массив вида Array("поле"=>"значение", ...), содержащий значения полей элемента инфоблоков и дополнительно может содержать поле "PROPERTY_VALUES" - массив со всеми значениями свойств элемента в виде массива Array("код свойства"=>"значение свойства"). Где "код свойства" - числовой или символьный код свойства, "значение свойства" - одиночное значение, либо массив значений если свойство множественное. Дополнительно для сохранения значения свойств см: CIBlockElement::SetPropertyValues(), CIBlockElement::SetPropertyValueCode().
     * Примечание: поля с датами задаются в формате сайта.
     * @param boolean $bWorkFlow Вставка в режиме документооборота. Если true и модуль документооборота установлен, то данное добавление будет учтено в журнале изменения элемента. Не обязательный параметр, по умолчанию вставка в режиме документооборота отключена.
     * @param boolean $bUpdateSearch Индексировать элемент для поиска. Для повышения производительности можно отключать этот параметр во время серии добавлений элементов, а после вставки переиндексировать поиск. Не обязательный параметр, по умолчанию элемент после добавления будет проиндексирован в поиске.
     * @param boolean $bResizePictures Использовать настройки инфоблока для обработки изображений. По умоляанию настройки не применяются. Если этот параметр имеет значение true, то к полям PREVIEW_PICTURE и DETAIL_PICTURE будут применены правила генерации и масштабирования в соответствии с настройками информационного блока.
     * @return integer|boolean Метод возвращает ID добавленного элемента инфоблока, если добавление прошло успешно. При возникновении ошибки метод вернет false, а в свойстве объекта LAST_ERROR будет содержаться текст ошибки.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/add.php
     */
    public function Add(
        array $arFields,
        bool $bWorkFlow = false,
        bool $bUpdateSearch = true,
        bool $bResizePictures = false
    ) { }

    /**
     * Метод удаляет элемент информационного блока. Также удаляются значения свойств типа "Привязка к элементу" указывающие на удаляемый. При установленном модуле поиска элемент удаляется из поискового индекса. Перед удалением вызываются обработчики события OnBeforeIBlockElementDelete из которых можно отменить это действие. После удаления вызывается обработчик события OnAfterIBlockElementDelete.
     *
     * @param integer $ID Код элемента.
     * @return boolean Возвращается true в случае успешного удаления, в противном случае метод вернет false. При попытке удаления несуществующего элемента метод также вернет true.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/delete.php
     */
    public static function Delete(int $ID): bool
    {
        return false;
    }

    /**
     * Возвращается объект CIBlockResult с полями элемента информационного блока.
     * Примечание: метод не проверяет, чтобы элемент с кодом ID был опубликован и не являлся записью из истории. Для выборки только опубликованных элементов воспользуйтесь методом CIBlockElement::GetList().
     *
     * @param integer $ID ID элемента.
     * @return CIBlockResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getbyid.php
     */
    public static function GetByID(int $ID): CIBlockResult
    {
        return new CIBlockResult();
    }

    /**
     * Метод возвращает инфоблок по ID его элемента.
     *
     * @param integer $ID ID элемента.
     * @return boolean|integer Метод возвращает идентификатор инфоблока по ID его элемента или false, если элемент не найден.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getiblockbyid.php
     */
    public static function GetIBlockByID(int $ID)
    { }

    /**
     * Return IBLOCK_ID for element.
     *
     * @param array $list
     * @return array
     */
    public static function GetIBlockByIDList(array $list): array
    {
        return [];
    }

    /**
     * Метод изменяет значение свойства элемента информационного блока. Выполняет один дополнительный запрос к БД для определения кода информационного блока элемента. Если код инфоблока известен, то лучше воспользоваться функцией SetPropertyValues, задав ей 4-й параметр.
     *
     * @param integer $ELEMENT_ID Код элемента, значение свойства которого изменяется.
     * @param string|int $PROPERTY_CODE Символьный или числовой код свойства, которое изменяется.
     * Если передан неверный PROPERTY_CODE метод все равно вернет true.
     * @param mixed $PROPERTY_VALUE Значение свойства (одиночное или множественное в виде массива значений).
     * Если для свойства типа список, привязка к элементам или разделам (и их клонам) будет установлено равным переданному значению PROPERTY_VALUE, без проверки, метод вернет true. (Если передавать значение, а не его ENUM_ID, то в БД будет записано само значение, привязки к значению не будет.)
     * @return boolean При успешном изменении вернет true, иначе - false.
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/setpropertyvaluecode.php
     */
    public function SetPropertyValueCode(int $ELEMENT_ID, $PROPERTY_CODE, $PROPERTY_VALUE): bool
    {
        return false;
    }

    /**
     * Принимает массив идентификаторов элементов. Возвращает группы, которым принадлежит элемент, по его коду ID.
     *
     * @param mixed $ID ID элемента, либо массив ID элементов, для которых надо вернуть привязки к разделам.
     * @param boolean $bElementOnly Не обязательный параметр. Указывает на необходимость выборки привязок и из свойств типа "Привязка к разделу". По умолчанию равен false и значения свойств будут выбраны. Если значения свойств не нужны, то значением параметра надо задать true.
     * @param array $arSelect Перечень возвращаемых полей.
     * @return CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getelementgroups.php
     */
    public static function GetElementGroups($ID, bool $bElementOnly = false, array $arSelect = []): CDBResult
    {
        return new CDBResult();
    }
    /**
     * Метод привязывает элемент информационного блока к группам. При использовании метода время обновления элемента не меняется.
     * Начиная с версии 15.0.1 модуля Информационные блоки, добавлен фасетный (т.е. предопределенный) поиск по товарам торгового каталога. После использовании функции CIBlockElement::SetElementSection() необходимо осуществить:
     * PropertyIndex\Manager::updateElementIndex($iblockId, $elementId);
     *
     * @param integer $ID Код (ID) элемента.
     * @param array $arSections Массив кодов групп, к которым принадлежит указанный элемент. Если передать пустой, то элемент будет "отвязан" от всех групп.
     * @param boolean $bNew Если это новый элемент или элемент не имеющий привязок, то можно указать значением этого параметра true. Это позволит экономит один запрос.
     * Параметр используется только для оптимизации, когда известно, что элемент ни к чему не привязан.
     * @param integer $bRightsIBlock Код (ID) инфоблока, к которому принадлежит элемент. Параметр обязателен в случае включенных расширенных прав, иначе - необязателен.
     * @param mixed $sectionId
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/setelementsection.php
     */
    public function SetElementSection(
        int $ID,
        array $arSections,
        bool $bNew = false,
        int $bRightsIBlock = 0,
        $sectionId = null
    ): bool
    {
        return false;
    }

    /**
     * Индексирует элемент с кодом ID в модуле поиска.
     *
     * @param integer $ID Код элемента.
     * @param boolean $bOverWrite Переиндексировать ли элемент, если дата его изменения не изменилась.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/updatesearch.php
     */
    public function UpdateSearch(int $ID, bool $bOverWrite = false)
    { }

    /**
     * Метод позволяет получить значения свойств для элементов одного информационного блока, отобранных по фильтру
     *
     * @param integer $IBLOCK_ID ID инфоблока (ЕДИНИЧНОЕ значение).
     * @param array $arElementFilter Фильтр CIBlockElement::GetList для отбора элементов. Ключ IBLOCK_ID указывать нет необходимости - он будет добавлен внутри метода.
     * @param boolean $extMode Признак возврата расширенного числа полей.
     * @param array $propertyFilter Фильтр возвращаемых свойств. Может иметь только 1 ключ - ID. Это массив ID возвращаемых свойств. Если пуст - будут возвращены значения всех свойств инфоблока, включая неактивные.
     * @return CIBlockPropertyResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getpropertyvalues.php
     */
    public static function GetPropertyValues(
        int $IBLOCK_ID,
        array $arElementFilter,
        bool $extMode = false,
        array $propertyFilter = array()
    ): CIBlockPropertyResult
    {
        return new CIBlockPropertyResult();
    }

    /**
     * Получение значений свойств элементов одного инфоблока для компонента. Строго рекомендуется как замена кода вида … в целях улучшения производительности.
     *
     * @param mixed $result Массив результатов, в качестве ключей должен содержать ID элементов. Передается по ссылке. Для каждого элемента вернет массив значений свойств.
     * @param mixed $iblockID ID инфоблока (ЕДИНИЧНОЕ значение)
     * @param mixed $filter Фильтр CIBlockElement::GetList для отбора элементов. Ключ IBLOCK_ID указывать нет необходимости - он будет добавлен внутри метода.
     * @param array $propertyFilter Фильтр для отбора свойств. необязательный. Может содержать 3 ключа. либо ID - массив ID возвращаемых свойств. либо CODE - массив символьных кодов свойств. При указании обоих ключей учитывается только ID. Третий ключ - фильтр по активности свойств. Если не указать - будут выведены только активные свойства
     * @param array $options Дополнительные настройки. Необязательный. Возможные ключи:
     * USE_PROPERTY_ID = Y - ключами массива значений для каждого элемента использовать ID свойств. Иначе - символьные коды.
     * PROPERTY_FIELDS - массив полей СВОЙСТВА, возвращаемых в результате.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getpropertyvaluesarray.php
     */
    public static function GetPropertyValuesArray(
        &$result,
        $iblockID,
        $filter,
        array $propertyFilter = [],
        array $options = []
    ) { }

    /**
     * Метод возвращает значения свойства для элемента element_id.
     *
     * @param integer $IBLOCK_ID Код инфоблока.
     * @param integer $ELEMENT_ID Код элемента.
     * @param string|array $arOrder Массив вида Array(by1=>order1[, by2=>order2 [, ..]]), где by - поле для сортировки
     * Примечание: параметр не должен быть false, иначе метод отработает неправильно и результат не будет отобран по заданным критериям.
     * @param string|array $arFilter Массив вида array("фильтруемое поле"=>"значения фильтра" [, ...])
     * @param array $arFilter
     * @return CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getproperty.php
     */
    public static function GetProperty(
        int $IBLOCK_ID,
        int $ELEMENT_ID,
        $by = "sort",
        $order = "asc",
        array $arFilter = []
    ): CDBResult
    {
        return new CDBResult();
    }

    /**
     * Увеличивает счетчик просмотров элемента с кодом ID. При увеличении учитывается уникальность просмотров данного элемента в одной сессии. Метод не сбрасывает тегированый кеш.
     *
     * @param integer $ID Код элемента.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/counterinc.php
     */
    public static function CounterInc(int $ID)
    { }

    public static function GetIBVersion(int $iblock_id): int
    {
        return 1; // 2
    }

    /**
     * Метод сохраняет значения всех свойств элемента информационного блока. В отличие от SetPropertyValues может не содержать полный набор значений. Значения свойств, неуказанных в массиве PROPERTY_VALUES, будут сохранены. Этот метод более экономен в количестве запросов к БД.
     * Если необходимо сохранить пустое значение для множественного свойства, то используйте значение false, так как просто пустой массив не сохранится.
     *
     * @param integer $ELEMENT_ID Код элемента, значения свойств которого необходимо установить.
     * @param integer $IBLOCK_ID Код информационного блока. Может быть не указан. В этом случае будет прочитан из базы данных по коду элемента.
     * @param array $PROPERTY_VALUES Массив значений свойств, в котором коду свойства ставится в соответствие значение свойства.
     * Должен быть вида Array("код свойства1"=>"значения свойства1", ....), где "код свойства" - числовой или символьный код свойства, "значения свойства" - одно или массив всех значений свойства (множественное).
     * Примечания:
     * При добавлении значений свойств типа "Файл" поле DESCRIPTION обязательно.
     * Если передаётся массив "свойство"=>"значение", то в качестве значения свойств типа "справочник" нужно указывать внешний код элемента справочника.
     * Для свойства типа Список следует передавать идентификатор значения свойства, а не значение.
     * @param array $FLAGS Необязательный параметр предоставляет информацию для оптимизации выполнения. Может содержать следующие ключи:
     * NewElement - можно указать если заведомо известно, что значений свойств у данного элемента нет. Экономит один запрос к БД.
     * DoNotValidateLists - для свойств типа "список" отключает проверку наличия значений в метаданных свойства.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/setpropertyvaluesex.php
     */
    public static function SetPropertyValuesEx(
        int $ELEMENT_ID,
        int $IBLOCK_ID,
        array $PROPERTY_VALUES,
        array $FLAGS = []
    ) { }
}
