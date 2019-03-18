<?php

abstract class CDatabaseMysql extends CAllDatabase
{
    /**
     * Метод выполняет запрос к базе данных и если не произошло ошибки возвращает результат. В случае успешного выполнения метод возвращает объект класса CDBResult.
     * Если произошла ошибка и параметр ignore_errors равен "true", то метод вернет "false".
     * Если произошла ошибка и параметр ignore_errors равен "false", то метод прерывает выполнение страницы, выполняя перед этим следующие действия:
     * Вызов функции AddMessage2Log.
     * Если текущий пользователь является администратором сайта, либо в файле /bitrix/php_interface/dbconn.php была инициализирована переменная $DBDebug=true;, то на экран будет выведен полный текст ошибки, в противном случае будет вызвана функция SendError.
     * Будет подключен файл /bitrix/php_interface/dbquery_error.php, если он не существует, то будет подключен файл /bitrix/modules/main/include/dbquery_error.php
     * 
     * Аналог метода в новом ядре D7 - Bitrix\Main\DB\Connection::query .
     *
     * @param string $strSql SQL запрос.
     * @param boolean $bIgnoreErrors Игнорировать ошибки. Если true, то в случае ошибки функция возвращает "false". Если параметр ignore_errors равен "false", то в случае ошибки функция прекращает выполнение всей страницы.
     * @param string $error_position Строка идентифицирующая позицию в коде, откуда была вызвана данная функция CDatabase::Query. Если в SQL запросе будет ошибка и если в файле /bitrix/php_interface/dbconn.php установлена переменная $DBDebug=true;, то на экране будет выведена данная информация и сам SQL запрос.
     * @param array $arOptions Необязательный.
     * @return mixed
     */
    public function Query(
        string $strSql,
        bool $bIgnoreErrors = false,
        string $error_position = '',
        array $arOptions = []
    ) { }

    /**
     * Метод изменяет записи в таблицы table значениями полей fields. Возвращает количество измененных записей.
     *
     * @param string $table Название таблицы.
     * @param array $arFields Массив вида значений полей "поле"=>"значение",...
     * @param string $WHERE Ограничение для WHERE в формате SQL
     * 	Необязательный. По умолчанию все записи в таблице будут изменены.
     * @param string $error_position Строка идентифицирующая позицию в коде, откуда был вызван метод CDatabase::Update. Если в SQL запросе будет ошибка и если в файле /bitrix/php_interface/dbconn.php установлена переменная $DBDebug=true;, то на экране будет выведена данная информация и сам SQL запрос.
     * @param boolean $DEBUG Если значение - "true", то на экран будет выведен текст SQL запроса.
     * @param boolean $ignore_errors если значение "true", то в случае ошибки возникшей в результате выполнения SQL запроса, она будет проигнорирована и работа скрипта продолжена.
     * @param boolean $additional_check Необязательный. По умолчанию true.
     * @return int
     */
    public function Update(
        string $table,
        array $arFields,
        string $WHERE = '',
        string $error_position = '',
        bool $DEBUG = false,
        bool $ignore_errors = false,
        $additional_check = true
    ): int {
        return 0;
    }

    /**
     * Метод вставляет запись в таблицу table с значениями полей fields. Необходимые условия использования данной метода: 
     * Необходимо наличие поля "ID" в таблице, представляющее из себя Primary Key для данной таблицы. 
     * Для MySQL поле "ID" должно быть auto increment (если при вызове метода явно не задается параметр exist_id). 
     * Для Oracle обязательно наличие sequence (последовательности) с именем вида "SQ_.table". 
     *
     * @param string $table Название таблицы.
     * @param array $arFields Массив вида значений полей "поле"=>"значение",...
     * @param string $error_position Строка идентифицирующая позицию в коде, откуда была вызвана данная функция CDatabase::Insert. Если в SQL запросе будет ошибка и если в файле /bitrix/php_interface/dbconn.php установлена переменная $DBDebug=true;, то на экране будет выведена данная информация и сам SQL запрос.
     * @param boolean $DEBUG Если значение - "true", то на экран будет выведен текст SQL запроса.
     * @param int $EXIST_ID Если данный параметр задан в виде положительного числа, то при вставке записи в таблицу, будет добавлено поле с именем "ID" и значением exist_id. Если данный параметр явно не задан, то для Oracle таблицы будет добавлено поле "ID", со значением SQ_table.nextval().
     * @param boolean $ignore_errors если значение "true", то в случае ошибки возникшей в результате выполнения SQL запроса, она будет проигнорирована и работа скрипта продолжена.
     * @return mixed Возвращает ID вставленной записи или false в случае ошибки.
     */
    public function Insert(
        string $table,
        array $arFields,
        string $error_position = "",
        bool $DEBUG = false,
        $EXIST_ID = "",
        bool $ignore_errors = false
    ) { }

    abstract function LastID();

    /**
     * Метод подготавливает глобальные переменные, соответствующие именам полей таблицы table для записи в БД.
     * Создает глобальные переменные ${prefix.имя_поля.postfix} и устанавливает их значениями глобальных переменных, соответствующих именам полей из таблицы table, предварительно преобразовав их в зависимости от типа поля. 
     *
     * @param string $strTableName Имя таблицы.
     * @param string $strPrefix Префикс переменных.
     * @param string $strSuffix Постфикс переменных.
     * @return void
     */
    public function PrepareFields(string $strTableName, string $strPrefix = "str_", string $strSuffix = ""): void
    { }

    /**
     * Метод подготавливает массив из двух строк для SQL запроса вставки записи в базу данных. Возвращает массив из двух элементов, где элемент с ключом 0 строка список полей вида "имя поля1, имя поля2[, ...]", а элемент с ключом 1 строка значений вида "значение1, значение2[, ...]". При этом метод сам преобразует все значение в SQL вид в зависимости от типа поля.
     *
     * @param string $strTableName Имя таблицы для вставки записи.
     * @param array $arFields Массив значений полей в формате "имя поля1"=>"значение1", "имя поля2"=>"значение2" [, ...].
     * Если необходимо вставить значение NULL, то значение должно быть равно false. 
     * @param string $strFileDir Не используется.
     * @param string|boolean $lang Код сайта для публичной части, либо код языка для административной части. Используется для определения формата даты, для вставки полей типа date или datetime. 
     * @return array
     */
    function PrepareInsert(
        string $strTableName,
        array $arFields,
        string $strFileDir = "",
        $lang = false
    ): array {
        return [];
    }

    /**
     * Метод подготавливает строку для SQL запроса изменения записи в базе данных. Возвращает строку вида "имя поля1 = значение1", имя поля2 = значение2[, ...]". При этом метод сам преобразует все значение в SQL вид в зависимости от типа поля.
     *
     * @param string $strTableName Имя таблицы.
     * @param array $arFields Массив значений полей в формате "имя поля1"=>"значение1", "имя поля2"=>"значение2" [, ...].
     * Если необходимо изменить значение на NULL, то значение в массиве должно быть равно false.
     * @param string $strFileDir Не используется.
     * @param string|boolean $lang Код сайта для публичной части, либо код языка для административной части. Используется для определения формата даты, для вставки полей типа date или datetime.
     * @param string $strTableAlias Необязательный.
     * @return array
     */
    function PrepareUpdate(
        string $strTableName,
        array $arFields,
        string $strFileDir = "",
        $lang = false,
        string $strTableAlias = ""
    ): array {
        return [];
    }

    /**
     * Создает глобальные переменные с именами ${prefix_to.имя_поля} и присваивает им значения переменных с именами ${prefix_from.имя_поля.postfix_from} переводя при этом в HTML-безопасный вид. Под "имя_поля" подразумеваются имена полей таблицы table.
     * Метод работает с переменными из глобальной области видимости, это необходимо учитывать при создании основных файлов компонентов.
     *
     * @param string $tablename Название таблицы.
     * @param string $strIdentFrom Префикс для переменных ИЗ которых будет производиться преобразование. 
     * @param string $strIdentTo Префикс для переменных В которые будет производиться преобразование. 
     * @param string $strSuffixFrom Суффикс (постфикс) для переменных ИЗ которых будет производиться преобразование. 
     * @param boolean $bAlways Значение "true" - инициализировать переменные всегда, т.е. не зависимо были ли они изначально. 
     * @return void
     */
    function InitTableVarsForEdit(
        string $tablename,
        string $strIdentFrom = "str_",
        string $strIdentTo = "str_",
        string $strSuffixFrom = "",
        bool $bAlways = false
    ): void { }

    /**
     * Открывает транзакцию. Для закрытия используйте Commit или Rollback. Работает для Oracle, MSSQL, MySQL (для типа таблиц InnoDB).
     *
     * @return void
     */
    function StartTransaction(): void
    { }

    /**
     * Завершает открытую транзакцию. Работает для Oracle, MSSQL, MySQL (для типа таблиц InnoDB).
     *
     * @return void
     */
    function Commit(): void
    { }

    /**
     * Откатывает назад изменения произведенные открытой и незавершенной транзакцией. Работает для Oracle, MSSQL, MySQL (для типа таблиц InnoDB).
     *
     * @return void
     */
    function Rollback(): void
    { }

    /**
     * Открывает соединение с базой данных. Метод возвращает "true" при успешном открытии соединения или "false" при ошибке.
     *
     * @param string $DBHost Сервер (хост) базы данных.
     * @param string $DBName Имя базы данных.
     * @param string $DBLogin Логин.
     * @param string $DBPassword Пароль.
     * @param string $connectionName
     * @return boolean
     */
    function Connect(
        string $DBHost,
        string $DBName,
        string $DBLogin,
        string $DBPassword,
        string $connectionName = ""
    ): bool {
        return false;
    }

    /**
     * Закрывает соединение с базой данных.
     *
     * @return void
     */
    function Disconnect(): void
    { }

    /**
     * Метод возвращает SQL функцию, которая в свою очередь возвращающую текущую дату. А именно: "CURRENT_DATE" для MySQL и "TRUNC(SYSDATE)" для Oracle. Нестатический метод (документация врёт).
     *
     * @return string
     */
    public static function CurrentDateFunction(): string
    {
        return '';
    }

    /**
     * Метод возвращает строку "SYSDATE" для Oracle версии и "now()" для MySQL. Нестатический метод (документация врёт).
     *
     * @return string
     */
    public static function CurrentTimeFunction(): string
    {
        return '';
    }

    /**
     * Возвращает для MySQL значение сконвертированное в формат YYYY-MM-DD [HH:MI:SS], для Oracle - метод вернет строку TO_DATE с нужными параметрами.
     * Форматы даты устанавливается в Региональных настройках сайта.
     *
     * @param string $strValue Если функция вызывается в публичной части сайта, то это - значение даты для формата текущего сайта. Если функция вызывается в административной части, то это - значение даты для формата текущего языка. 
     * @param string $strType Тип формата даты: "FULL" - для даты со временем, "SHORT" - для даты (без времени)
     * @param string|boolean $lang Код языка для административной части. Необязательный. По умолчанию текущий. Отсутствовал в версиях с 3.0.11 по 3.3.21.
     * @return string
     */
    function CharToDateFunction(string $strValue, string $strType = "FULL", $lang = false): string
    {
        return '';
    }

    /**
     * Возвращает для MySQL строку DATE_FORMAT, для Oracle - TO_CHAR с нужными параметрами.
     * Форматы даты устанавливается в Региональных настройках.
     *
     * @param string $strFieldName Значение даты для формата текущего сайта.
     * @param string $strType Тип формата даты: "FULL" - для даты со временем, "SHORT" - для даты (без времени)
     * @param string|boolean $lang Код языка для административной части.
     * @param string|boolean $bSearchInSitesOnly Необязательный.
     * @return string
     */
    function DateToCharFunction(
        string $strFieldName,
        string $strType = "FULL",
        $lang = false,
        $bSearchInSitesOnly = false
    ): string {
        return '';
    }

    /**
     * Сравнивает между собой две даты.
     *
     * @param string $date1 Первая дата для сравнения.
     * @param string $date2 Вторая дата для сравнения.
     * @return integer
     */
    function CompareDates(string $date1, string $date2): int
    {
        return 0;
    }

    /**
     * Позволяет выбирать дату в формате UNIX_TIMESTAMP без обращения к MakeTimeStamp.
     *
     * @param string $fieldName Поле в БД которое требуется перевести из формата DATE TIME в формат TIMESTAMP.
     * @return string
     */
    function DatetimeToTimestampFunction(string $fieldName): string
    {
        return '';
    }
}


abstract class CDBResultMysql extends CAllDBResult
{
    /**
     * Делает выборку значений полей в массив. Возвращает массив вида Array("поле"=>"значение" [, ...]) и передвигает курсор на следующую запись. Если достигнута последняя запись (или в результате нет ни одной записи) - метод вернет "false".
     * @return mixed Массив вида Array("поле"=>"значение" [, ...]) или false
     */
    public function Fetch()
    { }
}
