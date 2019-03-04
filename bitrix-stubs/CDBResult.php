<?php

class CDBResult
{
    /**
     * Метод возвращает количество записей, измененных SQL-командами INSERT, UPDATE или DELETE.
     * @return int Количество записей
     */
    public function AffectedRowsCount(): int {return 0;}

    /**
     * Делает выборку значений полей в массив. Возвращает массив вида Array("поле"=>"значение" [, ...]) и передвигает курсор на следующую запись. Если достигнута последняя запись (или в результате нет ни одной записи) - метод вернет "false".
     * @return mixed Массив вида Array("поле"=>"значение" [, ...]) или false
     */
    public function Fetch() {}

    /**
     * Объявляет глобальные переменные с именами вида ${prefix."имя поля"} и значениями соответствующими именам полей, приведенных в HTML-безопасный вид.
     * Возвращает массив вида Array("поле"=>"значение" [, ...]) и передвигает курсор на следующую запись. Если достигнута последняя запись (или в результате нет ни одной записи), то метод вернет "false". 
     * @param string $prefix Префикс глобальных переменных.
     * @param bool $encode Приводить глобальные переменные в HTML-безопасный вид.
     * @return mixed Массив вида Array("поле"=>"значение" [, ...]) или false
     */
    public function ExtractFields(string $prefix="str_", bool $encode=true) {}

    /**
     * Метод возвращает название поля по его номеру.
     * @param int $column Номер поля.
     * @return mixed Название поле или false в случае ошибки.
     */
    public function FieldName(int $column) {
    }

    /**
     * Метод возвращает количество полей результата выборки
     * @return int Количество полей
     */
    public function FieldsCount(): int {return 0;}

    /**
     * Возвращает массив значений полей приведенный в HTML-безопасный вид. Если достигнут конец результата выборки метод вернет false.
     * @param bool $TextHtmlAuto Если значение данного параметра - "true", то метод будет автоматически обрабатывать поля с выбором формата text/html.
     * @param bool $use_tilda Если значение данного параметра - "true", то помимо преобразованных в HTML-безопасный вид полей, в результирующий массив будут включены также оригинальные (исходные) значения этих полей (ключи массива с оригинальными значениями этих полей будут иметь суффикс "~").
     * @return mixed Массив или false.
     */
    public function GetNext(bool $TextHtmlAuto=true, bool $use_tilda=true) {}

    /**
     * Возвращает панель постраничной навигации в HTML виде. Формирует ее на основе параметров.
     * @param string $navigationTitle Название категорий.
     * @param string $templateName Название шаблона.
     * @param bool $showAlways Выводить всегда.
     * @param object $parentComponent Родительский компонент, который вызывает навигацию.
     * @return string Панель постраничной навигации в HTML виде
     */
    public function GetPageNavString(string $navigationTitle, string $templateName = "", bool $showAlways=false, ?object $parentComponent=null): string {return '';}

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
    public function GetPageNavStringEx(&$navComponentObject, string $navigationTitle, string $templateName = "", bool $showAlways=false, ?object $parentComponent=null, array $componentParams = []): string {return '';}

    /**
     * Метод инициализирует объект класса CDBResult значениями из массива.
     * @param array $values Ассоциативный массив со значениями для объекта класса CDBResult.
     * @return void
     */
    public function InitFromArray(array $values): void {}

    /**
     * Метод возвращает false, если все записи умещаются в одну страницу. В противном случае true.
     * Внимание! Перед использованием данного метода необходимо вызвать CDBResult::NavStart.
     * @return bool 
     */
    public function IsNavPrint(): bool {return false;}

    /**
     * Возвращает массив значений полей. Если установлен флаг init_globals, то объявляет глобальные переменные с именами prefix.имя_поля. Если достигнут конец результата выборки, то метод вернет "false".
     * @param bool $SetGlobalVars Если "true", то метод будет объявлять глобальные переменные соответствующие именам полей выборки.
     * @param string $prefix Префикс глобальных переменных (только если init_globals установлен).
     * @param bool $DoEncode Приводить глобальные переменные в HTML-безопасный вид (только если init_globals установлен).
     * @param bool $SkipEntities Необязательный. По умолчанию - "true".
     * @return mixed Массив или false
     */
    public function NavNext(bool $SetGlobalVars = true, string $prefix = "str_", bool $DoEncode = true, bool $SkipEntities=true) {}

    /**
     * Метод выводит ссылки для постраничной навигации. Перед использованием данного метода необходимо вызвать метод NavStart.
     * По умолчанию в сессии запоминается последняя открытая страница постраничной навигации.
     * @param string $title Названия выводимых элементов.
     * @param bool $show_always Если "false", то метод не будет выводить навигационные ссылки если все записи умещаются на одну страницу. Если "true", то ссылки для постраничной навигации будут выводиться всегда.
     * @param string $StyleText CSS класс шрифта для вывода навигационных ссылок.
     * @param mixed $template_path Путь к шаблону показа навигационных ссылок. Если "false", то используется шаблон по умолчанию.
     */
    public function NavPrint(string $title, bool $show_always=false, string $StyleText="text", $template_path=false) {}

    /**
     * Метод разбивает результат выборки на страницы.
     * @param int $page_size Размер страницы (от 1 и более).
     * @param bool $show_all Разрешить показывать все записи (и выводить ссылку "Все" в навигации).
     * @return void
     */
    public function functionNavStart(int $page_size=10, bool $show_all=true): void {}

    /**
     * Возвращает уникальную строку идентифицирующую текущее состояние постраничной навигации (номер текущей страницы, нажата ли ссылка "Все"). Результат данного метода применяется как правило для составления идентификатора кэша, который в свою очередь используется в методах классов CPageCache и CPHPCache.
     * @param int $page_size Размер страницы постраничной навигации (от 1 и более).
     * @param bool $show_all Разрешить ли показывать все записи (и выводить ссылку "Все" в навигации).
     * @param mixed $NumPage Принудительно ли открывать страницу с этим номером (в независимости от параметров в URL).
     * @return string
     */
    public function NavStringForCache(int $page_size=10, bool $show_all=true, $NumPage=false): string {return '';}

    /**
     * Метод возвращает количество выбранных записей (выборка записей осуществляется с помощью SQL-команды "SELECT ...").
     * @return int Количество выбранных записей.
     */
    public function SelectedRowsCount(): int {return 0;}
}
