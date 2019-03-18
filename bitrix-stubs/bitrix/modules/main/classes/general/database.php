<?php

abstract class CAllDatabase
{
    abstract function ForSql($strValue, $iMaxLength = 0);

    abstract function Query($strSql, $bIgnoreErrors = false, $error_position = "", $arOptions = array());

    abstract function PrepareInsert($strTableName, $arFields);

    abstract function PrepareUpdate($strTableName, $arFields);

    /**
     * Метод разбирает строку из пакета запросов на массив запросов и возвращает этот массив.
     *
     * @param string $strSql Строка с пакетом запросов, разделенных символом ";" для MySQL версии и символом "/" для Oracle версии.
     * @param boolean $bIncremental
     * @return array
     */
    public function ParseSqlBatch(string $strSql, bool $bIncremental = false): array
    {
        return [];
    }

    /**
     * Метод выполняет пакет запросов из файла path.
     *
     * @param string $filepath Файл с пакетом запросов. Для MySQL версии запросы разделяются символом ";", для Oracle версии разделитель "/".
     * @param boolean $bIncremental Необязательный. По умолчанию False.
     * @return mixed Возвращает "false", если все запросы выполнились, или массив ошибок для запросов которые привели к ошибке.
     */
    public function RunSQLBatch(string $filepath, bool $bIncremental = false)
    { }

    abstract function Connect($DBHost, $DBName, $DBLogin, $DBPassword);

    /**
     * Метод конвертирует любой формат времени допустимый в настройках сайта в формат принятый в PHP. Нестатический метод.
     *
     * @param string $format Формат для конвертации. До версии 12.0.7 назывался date_format
     * @return string
     */
    public static function DateFormatToPHP(string $format): string
    {
        return '';
    }

    /**
     * Преобразует дату из одного заданного формата в другой заданный формат.
     *
     * @param string $strDate Дата для конвертации.
     * @param string $format Текущий формат даты.
     * @param string $new_format В какой формат необходимо преобразовать.
     * @return string
     */
    public static function FormatDate(
        string $strDate,
        string $format = "DD.MM.YYYY HH:MI:SS",
        string $new_format = "DD.MM.YYYY HH:MI:SS"
    ): string {
        return '';
    }

    /**
     * Проверяет дату на корректность и возвращает "true" если дата корректна, в противном случае - "false".
     *
     * @param string $value Строка с проверяемой датой.
     * @param string|boolean $format Формат даты. По умолчанию - "false" - определять формат по текущему сайту, либо языку (если административная часть).
     * @param string|boolean $lang Код сайта для публичной части, либо код языка для административной части (для определения формата, если format равен false). По умолчанию - текущий сайт, либо текущий язык (если административная часть).
     * @param string $format_type Тип формата даты: "FULL" - для даты со временем, "SHORT" - для даты (без времени)
     * @return boolean
     */
    function IsDate(
        string $value,
        $format = false,
        $lang = false,
        string $format_type = "SHORT"
    ): bool
    {
        return false;
    }

}

abstract class CAllDBResult {
    /** Дескриптор результата. */
    public $result;

    /** Результат в виде массива (доступен только после CDBResult::NavStart). Данное свойство содержит неформатированные данные, например, дата для свойства типа "дата/время" элемента инфоблока. Для работы с объектом рекомендуется использовать CDBresult::Fetch, CDBresult::GetNext. */
    public $arResult;

    /** Количество записей (доступен только после CDBResult::NavStart). */
    public $NavRecordCount;

    /** Количество страниц (доступен только после CDBResult::NavStart). */
    public $NavPageCount;

    /** Номер текущей страницы постраничной навигации (доступен только после NavStart). */
    public $NavPageNomer;

    /** Размер страницы (доступен только после CDBResult::NavStart). */
    public $NavPageSize;

    /** Равен "true" если метод CDBResult::NavPrint был вызван один раз (доступен только после CDBResult::NavStart). */
    public $bFirstPrintNav = true;

    /** Разрешено ли показывать ссылку "Все" в постраничной навигации ("true"|"false") (доступен только после CDBResult::NavStart). */
    public $bShowAll = false;

    /** Равен "true", если в данный момент показываются все записи выборки, а не постранично (т.е. была нажата ссылка "Все") (доступен только после CDBResult::NavStart). */
    public $NavShowAll;

    /** Порядковый номер постраничной навигации использованной на данной странице (доступен только после CDBResult::NavStart). */
    public $NavNum;

    /** Равен "true", если в данный момент открыта первая страница в постраничной навигации (доступен только после CDBResult::NavStart). */
    public $nStartPage = 0;

    /** Равен "true", если в данный момент открыта последняя страница в постраничной навигации (доступен только после CDBResult::NavStart). */
    public $nEndPage = 0;

    abstract public function Fetch();

    /**
     * Возвращает массив значений полей. Если установлен флаг init_globals, то объявляет глобальные переменные с именами prefix.имя_поля. Если достигнут конец результата выборки, то метод вернет "false".
     * @param bool $SetGlobalVars Если "true", то метод будет объявлять глобальные переменные соответствующие именам полей выборки.
     * @param string $prefix Префикс глобальных переменных (только если init_globals установлен).
     * @param bool $DoEncode Приводить глобальные переменные в HTML-безопасный вид (только если init_globals установлен).
     * @param bool $SkipEntities Необязательный. По умолчанию - "true".
     * @return mixed Массив или false
     */
    public function NavNext(bool $SetGlobalVars = true, string $prefix = "str_", bool $DoEncode = true, bool $SkipEntities = true)
    { }

    /**
     * Метод выводит ссылки для постраничной навигации. Перед использованием данного метода необходимо вызвать метод NavStart.
     * По умолчанию в сессии запоминается последняя открытая страница постраничной навигации.
     * @param string $title Названия выводимых элементов.
     * @param bool $show_always Если "false", то метод не будет выводить навигационные ссылки если все записи умещаются на одну страницу. Если "true", то ссылки для постраничной навигации будут выводиться всегда.
     * @param string $StyleText CSS класс шрифта для вывода навигационных ссылок.
     * @param mixed $template_path Путь к шаблону показа навигационных ссылок. Если "false", то используется шаблон по умолчанию.
     */
    public function NavPrint(string $title, bool $show_always = false, string $StyleText = "text", $template_path = false)
    { }

    /**
     * Метод разбивает результат выборки на страницы.
     * @param int $page_size Размер страницы (от 1 и более).
     * @param bool $show_all Разрешить показывать все записи (и выводить ссылку "Все" в навигации).
     * @return void
     */
    public function NavStart(int $page_size = 10, bool $show_all = true): void
    { }

    /**
     * Возвращает уникальную строку идентифицирующую текущее состояние постраничной навигации (номер текущей страницы, нажата ли ссылка "Все"). Результат данного метода применяется как правило для составления идентификатора кэша, который в свою очередь используется в методах классов CPageCache и CPHPCache.
     * @param int $page_size Размер страницы постраничной навигации (от 1 и более).
     * @param bool $show_all Разрешить ли показывать все записи (и выводить ссылку "Все" в навигации).
     * @param mixed $NumPage Принудительно ли открывать страницу с этим номером (в независимости от параметров в URL).
     * @return string
     */
    public function NavStringForCache(int $page_size = 10, bool $show_all = true, $NumPage = false): string
    {
        return '';
    }

    /**
     * Метод возвращает false, если все записи умещаются в одну страницу. В противном случае true.
     * Внимание! Перед использованием данного метода необходимо вызвать CDBResult::NavStart.
     *
     * @return boolean
     */
    public function IsNavPrint(): bool
    {
        return false;
    }

    /**
     * Возвращает массив значений полей приведенный в HTML-безопасный вид. Если достигнут конец результата выборки метод вернет false.
     * @param bool $TextHtmlAuto Если значение данного параметра - "true", то метод будет автоматически обрабатывать поля с выбором формата text/html.
     * @param bool $use_tilda Если значение данного параметра - "true", то помимо преобразованных в HTML-безопасный вид полей, в результирующий массив будут включены также оригинальные (исходные) значения этих полей (ключи массива с оригинальными значениями этих полей будут иметь суффикс "~").
     * @return mixed Массив или false.
     */
    public function GetNext(bool $TextHtmlAuto = true, bool $use_tilda = true)
    { }

    /**
     * Объявляет глобальные переменные с именами вида ${prefix."имя поля"} и значениями соответствующими именам полей, приведенных в HTML-безопасный вид.
     * Возвращает массив вида Array("поле"=>"значение" [, ...]) и передвигает курсор на следующую запись. Если достигнута последняя запись (или в результате нет ни одной записи), то метод вернет "false". 
     * @param string $prefix Префикс глобальных переменных.
     * @param bool $encode Приводить глобальные переменные в HTML-безопасный вид.
     * @return mixed Массив вида Array("поле"=>"значение" [, ...]) или false
     */
    public function ExtractFields(string $prefix = "str_", bool $encode = true)
    { }

    abstract public function FieldName($iCol);

    abstract public function FieldsCount();

    abstract public function SelectedRowsCount();

    abstract public function AffectedRowsCount();

    /**
     * Метод инициализирует объект класса CDBResult значениями из массива.
     * @param array $values Ассоциативный массив со значениями для объекта класса CDBResult.
     * @return void
     */
    public function InitFromArray(array $values): void
    { }

    /**
     * Возвращает панель постраничной навигации в HTML виде. Формирует ее на основе параметров.
     * @param string $navigationTitle Название категорий.
     * @param string $templateName Название шаблона.
     * @param bool $showAlways Выводить всегда.
     * @param object $parentComponent Родительский компонент, который вызывает навигацию.
     * @return string Панель постраничной навигации в HTML виде
     */
    public function GetPageNavString(string $navigationTitle, string $templateName = "", bool $showAlways = false, ? object $parentComponent = null): string
    {
        return '';
    }

    /**
     * Возвращает панель постраничной навигации в HTML виде. Формирует ее на основе параметров.
     * @param mixed $navComponentObject Код компонента bitrix:system.pagenavigation.
     * @param string $navigationTitle Название категорий.
     * @param string $templateName Название шаблона.
     * @param bool $showAlways Выводить всегда.
     * @param object $parentComponent Родительский компонент, который вызывает навигацию.
     * @param array $componentParams Используется для подмены массива $arParams для компонента system.pagenavigation на основе которого работает метод.
     * @return string Панель постраничной навигации в HTML виде
     */
    public function GetPageNavStringEx(
        &$navComponentObject,
        string $navigationTitle,
        string $templateName = "",
        bool $showAlways = false,
        ? object $parentComponent = null,
        array $componentParams = []
    ): string {
        return '';
    }
}
