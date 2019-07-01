<?php


class CAllEvent
{
    /**
     * Собирает неотправленные почтовые события и отправляет их в виде E-Mail сообщений с помощью функции bxmail. Метод автоматически вызывается при загрузке каждой страницы и не требует ручного вызова.
     *
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cevent/checkevents.php
     */
    public static function CheckEvents()
    { }

    /**
     * Отправляет сообщение немедленно. В отличие от CEvent::Send не возвращает идентификатор созданного сообщения. При отправке сообщения данным методом запись в таблицу b_event не производится.
     *
     * @param string $event Идентификатор типа почтового события.
     * @param mixed $lid Идентификатор сайта, либо массив идентификаторов сайта.
     * @param array $arFields Массив полей типа почтового события идентификатор которого задается в параметре event_type. Массив имеет следующий формат: array("поле"=>"значение" [, ...]).
     * @param string $Duplicate Отправить ли копию письма на адрес указанный в настройках главного модуля в поле "E-Mail адрес или список адресов через запятую на который будут дублироваться все исходящие сообщения".
     * @param integer|string $message_id Идентификатор почтового шаблона по которому будет отправлено письмо.
     * Если данный параметр не задан, либо равен "", то письма будут отправлены по всем шаблонам привязанным к типу почтового события, идентификатор которого задается в параметре event_type, а также привязанных к сайту(ам) идентификатор которого указан в параметре site.
     * @param array $files
     * @param string $languageId Идентификатор языковой версии.
     * 
     * @see Аналог метода в новом ядре D7: Bitrix\Main\Mail\Event::sendImmediate.
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cevent/sendimmediate.php
     */
    public static function SendImmediate(
        string $event,
        $lid,
        array $arFields,
        string $Duplicate = "Y",
        $message_id = "",
        array $files = [],
        $languageId = ''
    ) { }

    /**
     * Метод создает почтовое событие которое будет в дальнейшем отправлено в качестве E-Mail сообщения. Возвращает идентификатор созданного события.
     *
     * @param string $event Идентификатор типа почтового события.
     * @param mixed $lid Идентификатор сайта, либо массив идентификаторов сайта.
     * @param array $arFields Массив полей типа почтового события идентификатор которого задается в параметре event_type. Массив имеет следующий формат: array("поле"=>"значение" [, ...]).
     * @param string $Duplicate Отправить ли копию письма на адрес указанный в настройках главного модуля в поле "E-Mail адрес или список адресов через запятую на который будут дублироваться все исходящие сообщения".
     * @param integer|string $message_id Идентификатор почтового шаблона по которому будет отправлено письмо.
     * Если данный параметр не задан, либо равен "", то письма будут отправлены по всем шаблонам привязанным к типу почтового события, идентификатор которого задается в параметре event_type, а также привязанных к сайту(ам) идентификатор которого указан в параметре site.
     * @param array $files Массив id файлов, которые используются классом CFile. Либо можно передать массив абсолютных путей до файлов.
     * @param string $languageId Идентификатор языковой версии.
     * @return integer
     * @see Аналог метода в новом ядре D7: \Bitrix\Main\Mail\Event::send.
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cevent/send.php
     */
    public static function Send(
        string $event,
        $lid,
        array $arFields,
        string $Duplicate = "Y",
        $message_id = "",
        array $files = [],
        $languageId = ''
    ): int {
        return 0;
    }
}

class CAllEventMessage
{
    /**
     * Текст последней ошибки.
     *
     * @var string
     */
    public $LAST_ERROR;

    /**
     * Метод добавляет новый почтовый шаблон. Возвращает ID вставленного шаблона. При возникновении ошибки, метод вернет false, а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     *
     * @param array $arFields Массив значений полей вида array("поле"=>"значение" [, ...]). В качестве "полей" допустимо использовать: 
     * + ACTIVE - флаг активности почтового шаблона: "Y" - активен; "N" - не активен;
     * + EVENT_NAME - идентификатор типа почтового события;
     * + LID - идентификатор сайта;
     * + EMAIL_FROM - поле "From" ("Откуда");
     * + EMAIL_TO - поле "To" ("Куда");
     * + BCC - поле "BCC" ("Скрытая копия");
     * + SUBJECT - заголовок сообщения;
     * + BODY_TYPE - тип тела почтового сообщения: "text" - текст; "html" - HTML;
     * + MESSAGE - тело почтового сообщения.
     * @return integer|boolean
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventmessage/add.php
     */
    public function Add(array $arFields)
    { }

    /**
     * Изменяет почтовый шаблон с кодом id.
     *
     * @param integer $ID ID изменяемой записи.
     * @param array $arFields Массив значений полей вида array("поле"=>"значение" [, ...]).
     * @return boolean Возвращает true, если изменение прошло успешно, при возникновении ошибки метод вернет false, а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventmessage/update.php
     */
    public function Update(int $ID, array $arFields): bool
    {
        return false;
    }

    /**
     * Возвращает почтовый шаблон по его коду id в виде объекта класса CDBResult.
     *
     * @param integer $ID ID шаблона.
     * @return CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventmessage/getbyid.php
     */
    public static function GetByID(int $ID): CDBResult
    {
        return new CDBResult();
    }

    /**
     * Удаляет почтовый шаблон.
     *
     * @param integer $ID
     * @return CDBResult|boolean Если шаблон удален успешно, то возвращается объект CDBResult, в противном случае - false.
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventmessage/delete.php
     */
    public static function Delete(int $ID)
    { }

    /**
     * Возвращает список почтовых шаблонов в виде объекта класса CDBResult.
     *
     * @param string $by Ссылка на переменную с полем для сортировки, может принимать значения:
     * + site_id - идентификатор сайта;
     * + subject - тема;
     * + timestamp_x - дата изменения;
     * + event_name - тип события;
     * + id - ID шаблона;
     * + active - активность;
     * @param string $order Ссылка на переменную с порядком сортировки, может принимать значения:
     * + asc - по возрастанию;
     * + desc - по убыванию;
     * @param array $arFilter Массив вида array("фильтруемое поле"=>"значение" [, ...]), может принимать значения:
     * + ID - ID шаблона;
     * + TYPE - код и заголовок типа события (допустима сложная логика);
     * + TYPE_ID - код типа события (допустима сложная логика);
     * + TIMESTAMP_1 - левая часть интервала ("c") для поиска по дате изменения;   
     * + TIMESTAMP_2 - правая часть интервала ("по") для поиска по дате изменения;
     * + SITE_ID - идентификатор сайта (допустимо задание массива для поиска по логике "или", либо допустимо использование сложной логики);
     * + ACTIVE - флаг активности (Y|N);
     * + FROM - поле "От кого" (допустима сложная логика);
     * + TO - поле "Кому" (допустима сложная логика);
     * + BCC - поле "Скрытая копия" (допустима сложная логика);
     * + SUBJECT - по теме сообщения (допустима сложная логика);
     * + BODY_TYPE - по типу тела сообщения (text|html);
     * + BODY - по телу сообщения (допустима сложная логика);
     * @return CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventmessage/getlist.php
     */
    public static function GetList(string &$by, string &$order, array $arFilter = []): CDBResult
    {
        return new CDBResult();
    }
}

/**
 * CEventType - класс для работы с типами почтовых событий.
 */
class CEventType
{
    /**
     * Добавляет тип почтового события. Возвращает ID вставленного типа. При возникновении ошибки метод вернет false, а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     *
     * @param array $arFields Массив значений полей вида array("поле"=>"значение" [, ...]). В качестве "полей" допустимо использовать:
     * + LID - язык интерфейса
     * + EVENT_NAME - идентификатор типа почтового события
     * + NAME - заголовок типа почтового события
     * + DESCRIPTION - описание задающее поля типа почтового события
     * @return integer|boolean
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventtype/add.php
     */
    public static function Add(array $arFields)
    { }

    /**
     * Изменяет параметры типа почтового события. Возвращается объект класса CDBResult. При возникновении ошибки метод вернет false, а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     *
     * @param array $arID Массив значений ID почтовых событий, которые нужно изменить. В массиве допустимо использовать:
     * + ID - идентификатор типа почтового события
     * + LID - язык интерфейса
     * + EVENT_NAME - идентификатор почтового события
     * @param array $arFields Массив значений полей вида array("поле"=>"значение" [, ...]). В качестве "полей" допустимо использовать:
     * + LID - язык интерфейса
     * + EVENT_NAME - идентификатор типа почтового события
     * + NAME - заголовок типа почтового события
     * + DESCRIPTION - описание задающее поля типа почтового события
     * @return CDBResult|boolean
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventtype/update.php
     */
    public static function Update(array $arID = [], array $arFields = [])
    { }

    /**
     * Удаляет тип почтового события. Возвращается объект класса CDBResult.
     *
     * @param string $arID Тип почтового события.
     * @return CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventtype/delete.php
     */
    public static function Delete(string $arID): CDBResult
    {
        return new CDBResult();
    }

    /**
     * Возвращает список типов почтовых событий по фильтру filter в виде объекта класса CDBResult.
     *
     * @param array $arFilter Массив фильтрации вида array("фильтруемое поле"=>"значение" [, ...]). "Фильтруемое поле" может принимать значения:
     * + TYPE_ID - идентификатор типа события;
     * + LID - идентификатор языка;
     * @param array $arOrder Массив сортировки вида array("фильтруемое поле"=>"значение" [, ...]). "Фильтруемое поле" может принимать значения:
     * + TYPE_ID - идентификатор типа события;
     * + LID - идентификатор языка;
     * @return CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventtype/getlist.php
     */
    public static function GetList(array $arFilter = [], array $arOrder = []): CDBResult
    {
        return new CDBResult();
    }

    /**
     * Возвращает тип почтового события в виде объекта класса CDBResult.
     *
     * @param string $ID Идентификатор типа почтового события.
     * @param string $LID Идентификатор языка.
     * @return CDBResult
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/ceventtype/getbyid.php
     */
    public static function GetByID(string $ID, string $LID): CDBResult
    {
        return new CDBResult();
    }
}
