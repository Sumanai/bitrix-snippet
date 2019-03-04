<?
/** @global CUser $USER */

class CUser {
    /**
     * Метод добавляет нового пользователя.
     * @param array $fields Массив значений полей.
     * @return mixed При успешном выполнении возвращает ID нового пользователя, в противном случае - вернет "false", а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     */
    public function Add(array $fields) {}

    /**
     * Метод удаляет пользователя.
     * @param int $id ID пользователя.
     * @return CDBResult Возвращается объект CDBResult.
     */
    static public function Delete(int $id): CDBResult {return new CDBResult;}

    /**
     * Возвращает пользователя по его коду id в виде объекта класса CDBResult.
     * @param int $id ID пользователя.
     * @return CDBResult Возвращается объект CDBResult.
     */
    public function GetByID(int $id): CDBResult {return new CDBResult;}

    /**
     * Возвращает список пользователей в виде объекта класса CDBResult.
     * @param mixed $by Ссылка на переменную с полем для сортировки.
     * @param string $order Ссылка на переменную с порядком сортировки.
     * @param array $filter Массив для фильтрации пользователей.
     * @param array $arParams Массив с дополнительными параметрами метода.
     * @return CDBResult Список пользователей
     */
    static public function GetList(&$by = "timestamp_x", string &$order = "desc", array $filter = [], array $arParams=[]): CDBResult {
        return new CDBResult;
    }

    /**
     * Метод изменяет параметры пользователя с идентификатором id. Возвращает "true", если изменение прошло успешно, при возникновении ошибки метод вернет "false", а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     * @param int $id ID пользователя.
     * @param array $fields Массив значений полей вида array("поле"=>"значение" [, ...]). В качестве полей могут быть использованы все поля CUser, а также GROUP_ID - массив с ID групп пользователей, в которые входит этот пользователь.
     * @param bool $authActions Авторизовать ли пользователя после обновления данных. По умолчанию - true - не авторизовывать.
     * @return mixed 
     */
    public function Update(int $id, array $fields, bool $authActions = true): bool {return false;}
}
