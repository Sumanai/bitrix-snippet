<?
/** @global CUser $USER */

/**
 * Класс для работы с пользователями.
 * При запуске каждой страницы автоматически создаётся объект этого класса $USER - данные о текущем пользователе.
 * Аналог класса в новом ядре D7 - Bitrix\Main\UserTable.
 */
class CUser
{
    const STATUS_ONLINE = 'online';
    const STATUS_OFFLINE = 'offline';

    /**
     * Метод добавляет нового пользователя.
     * 
     * @param array $fields Массив значений полей.
     * @return mixed При успешном выполнении возвращает ID нового пользователя, в противном случае - вернет "false", а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     */
    public function Add(array $fields)
    { }

    /**
     * Метод непосредственно осуществляет процесс авторизации пользователя. Инициализирует необходимые сессионные переменные и переменные объекта класса CUser. Если авторизация успешна, то возвращает "true", иначе - "false".
     * @param int $id ID пользователя.
     * @param bool $bSave Флаг указывающий на необходимость запоминания авторизации пользователя. Если равен true, то будет сгененрирован случайный хэш, выставлена кука с его значением и этот хэш будет сохранен в базе данных для последующей авторизации методом CUser::LoginByHash.
     * @param bool $bUpdate Обновить информацию о последнем входе в БД.
     * @param string|null $applicationId An application password ID.
     * @return bool
     */
    public function Authorize(int $id, bool $bSave = false, bool $bUpdate = true, bool $applicationId = null): bool
    {
        return false;
    }

    /**
     * Выполнение операций над файлом.
     *
     * @param array $op_name Операция
     * @param array $arPath Путь. Массив вида:
     *      ($arPath = Array($site, $path);)
     * @return boolean
     */
    public function CanDoFileOperation(array $op_name, array $arPath): bool
    {
        return false;
    }

    /**
     * Изменяет пароль пользователя, затем вызывает на исполнение метод CUser::SendUserInfo, которая в свою очередь отсылает почтовое сообщение по шаблону типа USER_INFO. Возвращает массив с сообщением о результате выполнения (массив может быть обработан методом ShowMessage).
     *
     * @param string $login Логин пользователя.
     * @param string $checkword Контрольная строка для смены пароля.
     * @param string $password Новый пароль.
     * @param string $CONFIRM_PASSWORD Подтверждение пароля (для успешной смены пароля он должен совпадать с new_password).
     * @param boolean $site_id ID сайта почтового шаблона типа USER_INFO для отсылки уведомления. По умолчанию - текущий сайт.
     * @param string $captcha_word Слово в CAPTCHA, если установлена опция использования CAPTCHA.
     * @param integer $captcha_sid Идентификатор CAPTCHA, если установлена опция использования CAPTCHA.
     * @param boolean $authActions Авторизовать пользователя после смены пароля или нет. По умолчанию true - не авторизовывать.
     * @return array
     */
    public function ChangePassword(
        string $login,
        string $checkword,
        string $password,
        string $CONFIRM_PASSWORD,
        $site_id = false,
        string $captcha_word = "",
        $captcha_sid = 0,
        $authActions = true
    ): array {
        return [];
    }

    /**
     * Метод удаляет пользователя.
     * 
     * @param int $id ID пользователя.
     * @return CDBResult Возвращается объект CDBResult.
     */
    static public function Delete(int $id): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Возвращает пользователя по его коду id в виде объекта класса CDBResult.
     * 
     * @param int $id ID пользователя.
     * @return CDBResult Возвращается объект CDBResult.
     */
    public function GetByID(int $id): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Возвращает список пользователей в виде объекта класса CDBResult.
     * 
     * @param mixed $by Ссылка на переменную с полем для сортировки.
     * @param string $order Ссылка на переменную с порядком сортировки.
     * @param array $filter Массив для фильтрации пользователей.
     * @param array $arParams Массив с дополнительными параметрами метода.
     * @return CDBResult Список пользователей
     */
    static public function GetList(&$by = "timestamp_x", string &$order = "desc", array $filter = [], array $arParams = []): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Возвращает пользователя по его логину login в виде объекта класса CDBResult.
     *
     * @param string $login Логин пользователя.
     * 
     * @return CDBResult
     */
    public static function GetByLogin(string $login): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Возвращает количество всех пользователей зарегистрированных на сайте. Нестатический метод.
     *
     * @return integer
     */
    public static function GetCount(): int
    {
        return 0;
    }

    /**
     * Возвращает E-Mail текущего авторизованного пользователя (как правило вызывается с объекта $USER). Данные берутся из сессии.
     *
     * @return string
     */
    public function GetEmail(): string
    {
        return '';
    }

    /**
     * Возвращает список всех источников внешней авторизации. Чтобы зарегистрировать свой внешний источник авторизации, необходимо установить обработчик события OnExternalAuthList. Нестатический метод.
     *
     * @return CDBResult
     */
    public static function GetExternalAuthList(): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Возвращает имя и фамилию авторизованного пользователя разделенные пробелом (как правило вызывается с объекта $USER).
     *
     * @return string
     */
    public function GetFullName(): string
    {
        return '';
    }

    /**
     * Возвращает имя авторизованного пользователя (как правило вызывается с объекта $USER).
     *
     * @return string
     */
    public function GetFirstName(): string
    {
        return '';
    }


    /**
     * Возвращает ID текущего авторизованного пользователя (как правило вызывается с объекта $USER).
     *
     * @return integer
     */
    public function GetID(): int
    {
        return 0;
    }

    /**
     * Возвращает фамилию авторизованного пользователя (как правило вызывается с объекта $USER).
     *
     * @return string
     */
    public function GetLastName(): string
    {
        return '';
    }

    /**
     * Возвращает логин текущего авторизованного пользователя (как правило вызывается с объекта $USER).
     *
     * @return string
     */
    public function GetLogin(): string
    {
        return '';
    }

    /**
     * Возвращает один из параметров пользователя хранимых в сессии авторизации (как правило вызывается с объекта $USER).
     *
     * @param string $name Название параметра. Возможны следующие значения:
     * AUTHORIZED - если пользователь авторизован, то "Y"
     * USER_ID - ID пользователя
     * LOGIN - логин 
     * EMAIL - E-mail
     * NAME - полное имя (не только имя пользователя, но и фамилию) 
     * GROUPS - массив групп, которым принадлежит пользователь
     * ADMIN - true, если пользователь принадлежит группе администраторов
     * PASSWORD_HASH - соль и хеш пароля с солью
     * FIRST_NAME - имя пользователя
     * LAST_NAME - фамилия пользователя
     * SECOND_NAME - отчество пользователя
     * @return mixed
     */
    public function GetParam(string $name)
    { }

    /**
     * Возвращает специальный хеш от пароля пользователя который может быть использован в методах LoginByHash и SavePasswordHash.
     *
     * @param string $PASSWORD_HASH Хеш (MD5) от реального пароля пользователя. Для текущего авторизованного пользователя MD5 от реального пароля можно получить с помощью метода $USER->GetParam("PASSWORD_HASH"). Для произвольного пользователя MD5 от пароля можно получить с помощью метода CUser::GetByID (поле "PASSWORD").
     * @return string
     */
    public function GetPasswordHash(string $PASSWORD_HASH): string
    {
        return '';
    }

    /**
     * Возвращает массив ID групп, которым принадлежит пользователь с кодом id. GetUserGroup получает данные из записи о пользователях в базе данных.
     *
     * @param integer $id ID пользователя.
     * @return array
     */
    public static function GetUserGroup(int $id): array
    {
        return [];
    }

    /**
     * Метод возвращает ID групп которым принадлежит текущий авторизованный пользователь (как правило вызывается с объекта $USER).
     *
     * @return array
     */
    public function GetUserGroupArray(): array
    {
        return [];
    }

    /**
     * Метод возвращает объект класса CDBResult. (Не учитывает даты вхождения в группы).
     *
     * @param integer $ID ID пользователя
     * @return CDBResult
     */
    public static function GetUserGroupList(int $ID): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Метод возвращает строку c перечисленными через запятую ID всех групп которым принадлежит текущий авторизованный пользователь (как правило вызывается с объекта $USER). Данные получаются из сессионной переменной, значение которой соответствует привязке пользователя на момент авторизации. Если пользователь не авторизован, то будет возвращён идентификатор группы "все пользователи".
     *
     * @return string
     */
    public function GetUserGroupString(): string
    {
        return '';
    }

    /**
     * Проверяет принадлежность текущего авторизованного пользователя группе администраторов (как правило вызывается с объекта $USER). Возращает "true" - если пользователь принадлежит группе администраторов, в противном случае вернет "false".
     *
     * @return boolean
     */
    public function IsAdmin(): bool
    {
        return false;
    }

    /**
     * Проверяет авторизован ли посетитель сайта (как правило вызывается с объекта $USER). Возвращает "true" если посетитель авторизован, иначе "false".
     *
     * @return boolean
     */
    public function IsAuthorized(): bool
    {
        return false;
    }

    /**
     * Метод предназначен для определения статуса "Сейчас на сайте" по ID пользователя.
     *
     * @param integer $id ID пользователя
     * @param integer $interval Время в секундах
     * @return bool
     */
    public static function IsOnLine(int $id, int $interval = 120): bool
    {
        return false;
    }

    /**
     * Метод проверяет логин и пароль и если они корректные, то авторизует пользователя. Если авторизация успешная, то возвращает "true", иначе если логин и пароль некорректные, то возвращает массив с ошибкой для функции ShowMessage. Если было превышено количество попыток подключения метод просто не будет авторизовывать пользователя с ошибкой "Неправильный логин или пароль".
     * 
     * @param string $login
     * @param string $password
     * @param string $remember
     * @param string $password_original
     * @return array|bool
     */
    public function Login(string $login, string $password, string $remember = "N", string $password_original = "Y")
    { }

    /**
     * Метод проверяет логин и специальный хеш от пароля, и если они корректные, то авторизует пользователя. Если авторизация успешная, то возвращает true, иначе возвращает массив с ошибкой для метода ShowMessage. Хэш хранится не для пользователя, а для его сессии и не может быть получен средствами API.
     *
     * @param string $login Логин пользователя.
     * @param string $hash Специальный хеш от пароля пользователя.
     * @return array|bool
     */
    public function LoginByHash(string $login, string $hash)
    { }

    /**
     * Заканчивает сеанс авторизации пользователя, при этом удаляются те куки пользователя, которые используются при автоматической авторизации.
     *
     * @return void
     */
    public function Logout(): void
    { }

    /**
     * Регистрирует нового пользователя, авторизует его и отсылает письмо по шаблону типа NEW_USER. Возвращает массив с сообщением о результате выполнения (массив может быть обработан функцией ShowMessage).
     * Важно! Метод может использоваться только в публичной части сайта!
     * 
     * @param string $USER_LOGIN Логин нового пользователя (не менее 3-х символов).
     * @param string $USER_NAME Имя нового пользователя (может быть пустым).
     * @param string $USER_LAST_NAME Фамилия нового пользователя (может быть пустым).
     * @param string $USER_PASSWORD Пароль (не менее 3-х символов).
     * @param string $USER_CONFIRM_PASSWORD Подтверждение пароля (для успешной регистрации должен совпадать с password).
     * @param string $USER_EMAIL E-Mail нового пользователя (не менее 3-х символов). E-Mail будет проверен функцией check_email.
     * @param string|boolean $SITE_ID ID сайта почтового шаблона для отсылки уведомлений (NEW_USER, USER_INFO и др.).
     * Необязательный. По умолчанию - "false", что означает текущий сайт.
     * @param string $captcha_word Слово для CAPTCHA. Добавляется если в настройках главного модуля выставлен флаг "Использовать CAPTCHA при регистрации". Если не заполнено вернет: "Слово для защиты от автоматической регистрации введено неверно".
     * @param mixed $captcha_sid ID CAPTCHA. Добавляется если в настройках главного модуля выставлен флаг "Использовать CAPTCHA при регистрации". Если не заполнено вернет: "Слово для защиты от автоматической регистрации введено неверно".
     * @param boolean $bSkipConfirm
     * @return void
     */
    public function Register(
        string $USER_LOGIN,
        string $USER_NAME,
        string $USER_LAST_NAME,
        string $USER_PASSWORD,
        string $USER_CONFIRM_PASSWORD,
        string $USER_EMAIL,
        $SITE_ID = false,
        string $captcha_word = "",
        $captcha_sid = 0,
        bool $bSkipConfirm = false
    ): array {
        return [];
    }

    /**
     * Сохраняет специальный хеш в куках пользователя в целях дальнейшей автоматической авторизации. Для разных сайтов на базе "Битрикс: Управление сайтом", метод всегда сохраняет свой уникальный хеш от одного и того же пароля. Таким образом достигается невозможность использовать одно и тоже значение для авторизации на различных сайтах.
     * 
     * @deprecated
     * @return void
     */
    public function SavePasswordHash(): void
    { }


    /**
     * Отсылает пользователю почтовое сообщение с контрольной строкой для смены пароля. Сообщение отсылается по шаблону типа USER_PASS_REQUEST. Пользователь определяется по логину login или E-Mail адресу - параметр email. Возвращает массив с сообщением о результате выполнения (массив может быть обработан функцией ShowMessage).
     *
     * @param string $login Логин пользователя.
     * @param string $email E-Mail адрес пользователя.
     * @param mixed $site_id ID сайта почтового шаблона типа USER_PASS_REQUEST. По умолчанию - текущий сайт.
     * @param string $captcha_word Слово для CAPTCHA. Передаётся, если в настройках главного модуля включена опция "Использовать CAPTCHA при восстановлении пароля".
     * @param mixed $captcha_sid ID CAPTCHA. Передаётся, если в настройках главного модуля включена опция "Использовать CAPTCHA при восстановлении пароля".
     * @return array
     */
    public static function SendPassword(string $login, string $email, $site_id = false, string $captcha_word = "", $captcha_sid = 0): array
    {
        return [];
    }

    /**
     * Отсылает почтовое сообщение с параметрами пользователя по шаблону типа USER_INFO. Нестатический метод.
     *
     * @param integer $id ID пользователя.
     * @param string $site_id ID сайта почтового шаблона.
     * @param string $MSG Произвольный текст сообщения (#MESSAGE#). 
     * @param boolean $Immediate По умолчанию false. Если передать true, письмо будет отправлено сразу, без записи в БД.
     * @param string $eventName Параметр, в котором передаётся строкой тип отправки событий.
     * @return void
     */
    public static function SendUserInfo(
        int $id,
        string $site_id,
        string $MSG,
        bool $Immediate = false,
        string $eventName = "USER_INFO"
    ): void { }

    /**
     * Метод обновляет LAST_ACTIVITY_DATE. Нестатический метод.
     *
     * @param integer|null $userId Идентификатор пользователя, у которого обновляется LAST_ACTIVITY_DATE.
     * @param boolean $cache
     * @return void
     */
    public static function SetLastActivityDate(?integer $userId = null, bool $cache = false): bool
    {
        return false;
    }

    /**
     * Метод устанавливает произвольный параметр пользователя param_name для хранения в сессии авторизации (как правило вызывается для объекта $USER). Получить значение установленного параметра можно методом CUser::GetParam.
     *
     * @param string $name Произвольный параметр.
     * @param mixes $value Значение параметра.
     * @return void
     */
    public function SetParam(string $name, $value): void
    { }

    /**
     * Метод устанавливает привязку пользователя user_id к группам groups. Привязка к группам сохраняется в базе данных, но не влияет на уже авторизованного посетителя user_id.
     *
     * @param integer $user_id
     * @param array $groups
     * @param boolean $newUser
     * @return void
     */
    public static function SetUserGroup(int $user_id, array $groups, bool $newUser = false)
    { }

    /**
     * Метод устанавливает привязку текущего пользователя к группам groups (как правило вызывается для объекта $USER). Данные получаются из сессионной переменной, значение которой соответствует привязке пользователя на момент авторизации. Привязка к группам не сохраняется в базе данных и при следующей авторизации теряется. Для сохранения привязки в базе данных воспользуйтесь методом CUser::SetUserGroup.
     *
     * @param array $groups Массив со значениями идентификаторов групп пользователей.
     * @return void
     */
    public function SetUserGroupArray(array $groups): void
    { }

    /**
     * Создает нового пользователя предварительно сгенерировав случайный логин и пароль. Возвращает массив с сообщением о результате выполнения (массив может быть обработан функцией ShowMessage).
     *
     * @param string $USER_EMAIL Mail нового пользователя (не менее 3-х символов). E-Mail будет проверен функцией check_email.
     * @param mixed $site_id ID сайта почтового шаблона для отсылки уведомлений (NEW_USER, USER_INFO и др.).
     * Необязательный. По умолчанию - текущий сайт.
     * @return array
     */
    public function SimpleRegister(string $USER_EMAIL, $site_id = false): array
    {
        return [];
    }


    /**
     * Метод изменяет параметры пользователя с идентификатором id. Возвращает "true", если изменение прошло успешно, при возникновении ошибки метод вернет "false", а в свойстве LAST_ERROR объекта будет содержаться текст ошибки.
     * 
     * @param int $id ID пользователя.
     * @param array $fields Массив значений полей вида array("поле"=>"значение" [, ...]). В качестве полей могут быть использованы все поля CUser, а также GROUP_ID - массив с ID групп пользователей, в которые входит этот пользователь.
     * @param bool $authActions Авторизовать ли пользователя после обновления данных. По умолчанию - true - не авторизовывать.
     * @return mixed 
     */
    public function Update(int $id, array $fields, bool $authActions = true): bool
    {
        return false;
    }
}
