<?
/** @global CMain $APPLICATION */

class CAllMain
{

    /**
     * Подключает java скрипты в шаблоне сайта и в шаблоне компонентов. Порядок их включения в страницу и порядок при объединении - соответствует порядку вызовов API. Исключение: в случае объединения вначале сгруппируются скрипты от ядра, а потом выведутся скрипты шаблона и страницы.
     *
     * @param string $src путь к скрипту от корня сайта
     * @param boolean $additional
     * @return void
     * @deprecated use Asset::getInstance()->addJs($src, $additional)
     */
    public function AddHeadScript(string $src, $additional = false): void
    { }

    /**
     * Метод добавляет строку в секцию <head>…</head> сайта.
     *
     * @param string $str
     * @param boolean $bUnique
     * @param string $location
     * @return void
     * @deprecated $Asset::getInstance->addString($str, $bUnique, $location);
     */
    public function AddHeadString(string $str, bool $bUnique = false, string $location = AssetLocation::AFTER_JS_KERNEL): void
    { }

    /**
     * Отображает свойство страницы в виде мета-тега. Метод допускает использование специальных символов (html entities) в значениях свойств. Если на самой странице свойство не задано, то будет взято значение  Метод использует технологию отложенных функций, позволяющую, помимо всего прочего, задавать значения мета-тегов через свойства страницы или раздела (с помощью методов CMain::SetPageProperty, CMain::SetDirProperty) уже после того как был выведен пролог сайта.
     * @param string $property_id Идентификатор свойства страницы или раздела, значение которого (value) будет выведено в аттрибуте "content" мета-тега
     * @param string $meta_name Аттрибут "name" мета-тега. Необязательный. По умолчанию равен идентификатору свойства property_id.
     * @param boolean $bXhtmlStyle Параметр, устанавливающий, по какому стандарту оформляются HTML-теги. Если значение true, то теги выводятся по стандарту XHTML (<meta />), иначе по стандарту HTML 4 (<meta>).
     * @return void
     */
    public function ShowMeta(string $property_id, string $meta_name = null, bool $bXhtmlStyle = null): void
    { }

    /**
     * Возвращает свойство страницы обрамленное тегом <meta>. Если на самой страницы свойство не задано, то будет взято значение свойства вышестоящего раздела (рекурсивно до корня сайта). Если свойство не задано, то метод вернет пустую строку.
     *
     * @param string $id Идентификатор свойства страницы или раздела, значение которого (value) будет выведено в аттрибуте "content" мета-тега:
     * <meta content="value" ...>
     * @param boolean|string $meta_name Атрибут "name" мета-тега:
     * <meta name="meta_name" ...>
     * @param boolean $bXhtmlStyle Параметр, устанавливающий, по какому стандарту оформляются HTML-теги. Если значение true, то теги выводятся по стандарту XHTML (<meta />), иначе по стандарту HTML 4 (<meta>).
     * @return string
     */
    public function GetMeta(string $id, $meta_name = false, bool $bXhtmlStyle = true): string
    {
        return '';
    }

    /**
     * Сохраняет страницу на диске. Возвращает "true" - если сохранение произведено успешно и "false" - в случае ошибки. Метод инициализирует событие "OnChangeFile".
     *
     * @param string $abs_path Полный путь к файлу на диске.
     * @param string $strContent Содержимое файла.
     * @return boolean
     */
    public function SaveFileContent(string $abs_path, string $strContent): bool
    {
        return false;
    }

    /**
     * Возвращает содержимое файла. Если файл не существует - вернет "false".
     *
     * @param string $path Абсолютный путь к файлу на диске.
     * @return string|bool
     */
    public function GetFileContent(string $path)
    { }

    /**
     * Ищет файл с заданным именем последовательно вверх по иерархии папок. Если файл найден - возвращает путь к найденному файлу относительно корня, в противном случае возвращает "false".
     *
     * @param string $strFileName Имя файла.
     * @param string|boolean $strDir Путь к разделу с которого нужно начинать поиск файла. Если "false", то поиск будет начинаться с текущего раздела.
     * @return string|boolean
     */
    public function GetFileRecursive(string $strFileName, $strDir = false)
    { }

    /**
     * Определяет права доступа к файлу или каталогу. Возвращает символ обозначающий то или иное право:
     * D - доступ запрещён
     * R - чтение (право просмотра содержимого файла)
     * U - документооборот (право на редактирование файла в режиме документооборота)
     * W - запись (право на прямое редактирование)
     * X - полный доступ (право на прямое редактирование файла и право на изменение прав доступа на данных файл)
     *
     * @param string|boolean $path Путь к файлу или папке относительно корня. В случае многосайтовой версии, если корневой каталог у сайтов разный, то в данном параметре необходимо передавать массив
     * @param array|boolean $groups Массив ID групп пользователей, для которых необходимо определить права доступа. Если false, то определять группу прав для текущего пользователя.
     * @param boolean $task_mode Необходим для работы с пользовательскими уровнями доступа.
     * @return void
     */
    public function GetFileAccessPermission($path, $groups = false, bool $task_mode = false): string
    {
        return '';
    }

    /**
     * Устанавливает права доступа к файлу или каталогу. Возвращает "true" - если установка прав произведена успешно и "false" - в случае ошибки.
     *
     * @param string|array $path Путь к файлу или папке относительно корня. В случае многосайтовой версии, если корневой каталог у сайтов разный, то в данном параметре необходимо передавать массив
     * @param array $permissions Массив с правами доступа вида Array("ID группы пользователей"=>"право доступа" [, ...]). В качестве "право доступа" возможны следующие значения:
     * D - доступ запрещён
     * R - чтение (право просмотра содержимого файла)
     * U - документооборот (право на редактирование файла в режиме документооборота)
     * W - запись (право на прямое редактирование)
     * X - полный доступ (право на прямое редактирование файла и право на изменение прав доступа на данных файл)
     * В качестве "ID группы пользователей" также может быть задан символ "*", что означает - "для всех групп пользователей". 
     * @param boolean $overwrite Если значение - "true", то существующие права будут перезаписаны.
     * @return boolean
     */
    public function SetFileAccessPermission($path, array $permissions, bool $overwrite = true): bool
    {
        return false;
    }

    /**
     * Копирует права доступа одного файла (каталогу) другому файлу (каталогу). Возвращает "true" - если права скопированы успешно и "false" - в случае ошибки.
     *
     * @param string|array $path_from Путь откуда копировать.
     * @param string|array $path_to Путь куда копировать.
     * @param boolean $bOverWrite Если значение - "true", то существующие права будут перезаписаны.
     * @return boolean
     */
    public function CopyFileAccessPermission($path_from, $path_to, bool $bOverWrite = false): bool
    {
        return false;
    }

    /**
     * Удаляет права доступа для файла или каталога. Возвращает "true" - если удаление произведено успешно и "false" - в случае ошибки.
     *
     * @param string|array $path Путь к файлу или папке относительно корня. В случае многосайтовой версии, если корневой каталог у сайтов разный, то в данном параметре необходимо передавать массив
     * @param array|boolean $arGroups Массив групп для которых удалить права доступа. Если значение - "false", то права доступа будут удалены для всех групп.
     * @return boolean
     */
    public function RemoveFileAccessPermission($path, $arGroups = false): bool
    {
        return false;
    }

    /**
     * Возвращает право в рамках логики модуля установленное для определённого набора групп (по умолчанию - это группы текущего пользователя). 
     *
     * @param string $module_id ID модуля.
     * @param array|boolean $arGroups Массив групп для которых необходимо определить максимальное право. Если значение - false, то будет взят массив групп текущего пользователя.
     * @param string $use_default_level Если значение - Y, то для определения максимального уровня прав будет учитываться уровень прав установленный по умолчанию.
     * @param string $max_right_for_super_admin Если значение - Y и groups = false, то пользователю входящему в группу администраторов (группа #1) всегда будет возвращаться максимальное право - W, независимо от того какие права установлены в настройках модуля.
     * @param string|boolean $site_id ID сайта.
     * @return string
     */
    public static function GetUserRight(
        string $module_id,
        $arGroups = false,
        string $use_default_level = "Y",
        string $max_right_for_super_admin = "Y",
        $site_id = false
    ): string {
        return '';
    }

    /**
     * Возвращает массив ролей для определённого набора групп (по умолчанию - это группы текущего пользователя). 
     *
     * @param string $module_id
     * @param array|boolean $arGroups
     * @param string $use_default_role
     * @param string $max_role_for_super_admin
     * @param string|boolean $site_id
     * @return string
     */
    public static function GetUserRoles(
        string $module_id,
        $arGroups = false,
        string $use_default_role = "Y",
        string $max_role_for_super_admin = "Y",
        $site_id = false
    ): string {
        return '';
    }

    /**
     * Отображает заголовок страницы. Метод использует технологию отложенных функций, позволяющую, помимо всего прочего, задавать заголовок страницы (например, внутри компонента) уже после того как был выведен пролог сайта.
     * @param string $property_name Идентификатор свойства страницы, значение которого будет выведено в качестве заголовка (если это значение задано например, с помощью метода CMain::SetPageProperty).
     * @param boolean $strip_tags Если значение - "true", то из заголовка страницы будут удалены все HTML теги.
     * @return void
     */
    public function ShowTitle(string $property_name = 'title', bool $strip_tags = true): void
    { }

    /**
     * Метод предназначен для вывода в шаблоне сайта основных полей тега <head>: мета-теги Content-Type, robots, keywords, description; стили CSS; скрипты, заданные через CMain::AddHeadScript.
     * @param boolean $bXhtmlStyle Параметр, устанавливающий, по какому стандарту оформляются HTML-теги. Если значение true, то теги выводятся по стандарту XHTML (<meta />), иначе по стандарту HTML 4 (<meta>).
     * @return void
     */
    public function ShowHead(bool $bXhtmlStyle = true): void
    { }


    /**
     * Отображает специальные стили, JavaScript либо произвольный html-код.
     * @param boolean $additional
     * @return void
     */
    public function ShowHeadStrings(bool $additional = false): void
    { }

    /**
     * Отображает панель управления в публичной части сайта.
     * @return void
     */
    public function ShowPanel(): void
    { }

    /**
     * Выводит HTML представляющий из себя панель управления публичной частью.
     *
     * @return string
     */
    public function GetPanel(): string
    {
        return '';
    }

    /**
     * Добавляет в панель управления кнопку.
     *
     * @param array $arButton Массив описывающий добавляемую кнопку.
     * @param boolean $bReplace
     * @return void
     */
    public function AddPanelButton(array $arButton, $bReplace = false)
    { }

    /**
     * Метод возвращает текущий режим отображения административной панели.
     *
     * @return string Одно из следующих зачений:
     * view - просмотр (по умолчанию)
     * edit - редактирование
     * configure - редактирование
     */
    public function GetPublicShowMode(): string
    {
        return '';
    }

    /**
     * Отображает HTML для подключения CSS на странице.
     * @return void
     */
    public function ShowCSS(): void
    { }

    /**
     * Отображает HTML с навигационной цепочкой.
     * @return void
     */
    public function ShowNavChain(): void
    { }

    /**
     * Отображает свойство страницы, учитывая свойства раздела.
     * @param string $property_id Идентификатор свойства.
     * @param mixed $default_value Значение свойства по умолчанию.
     * @return void
     */
    public function ShowProperty(string $property_id, $default_value = false): void
    { }

    /**
     * Возвращает заголовок страницы.
     * @param string $property_name Если указано значение "false", то будет возвращен заголовок страницы, устанавливаемый с помощью метода SetTitle. В противном случае в параметре передается идентификатор свойства страницы, значение которого будет выведено в качестве заголовка (если это значение задано, например, с помощью метода CMain::SetPageProperty).
     * @param boolean $strip_tags Если значение - "true", то из заголовка страницы будут удалены все HTML теги.
     * @return void
     */
    public function GetTitle(string $property_name, bool $strip_tags = false): string
    {
        return '';
    }

    /**
     * Устанавливает заголовок страницы. Если заголовок страницы у вас выводится с помощью метода CMain::ShowTitle, то устанавливать его вы можете уже после того как у вас будет выведен пролог сайта.
     *
     * @param string $title Заголовок страницы.
     * @param arrray|null $arOptions Необязательный. По умолчанию - "null".
     * @return void
     */
    public function SetTitle(string $title, ? arrray $arOptions = null): void
    { }

    /**
     * Возвращает заголовок страницы.
     * @param boolean $external Если значение - "true", то выводится HTML представляющий из себя ссылку на внешний CSS, если значение "false", то выводится HTML представляющий из себя внутренний CSS.
     * @param boolean $bXhtmlStyle Параметр, устанавливающий, по какому стандарту оформляются HTML-теги. Если значение true, то теги выводятся по стандарту XHTML (<meta />), иначе по стандарту HTML 4 (<meta>).
     * @return void
     */
    public function GetCSS(bool $external = true, bool $bXhtmlStyle = true): string
    {
        return '';
    }

    /**
     * Устанавливает CSS стиль для компонента.
     *
     * @param string $rel_path Относительный путь к CSS стилю компонента.
     * @return void
     */
    public function SetTemplateCSS(string $rel_path): void
    { }

    /**
     * Устанавливает CSS стиль для страницы.
     *
     * @param string $Path2css Путь относительно корня к файлу с CSS стилями.
     * @param boolean $additional Необязательный. По умолчанию "false".
     * @return void
     */
    public function SetAdditionalCSS(string $Path2css, bool $additional = false): void
    { }

    /**
     * Возвращает HTML представляющий из себя навигационную цепочку.
     * @param mixed $path Путь для которого будет построена навигационная цепочка. В случае многосайтовой версии, если DOCUMENT_ROOT у сайтов разный (задается в поле "Путь к корневой папке веб-сервера" в настройках сайта), то в данном параметре необходимо передавать массив.
     * @param integer $NumFrom Начиная от какого пункта будет построена навигационная цепочка.
     * @param mixed $NavChainPath Путь к шаблону навигационной цепочки.
     * @param boolean $IncludeOnce Необязателен. По умолчанию - "false". В режиме правки с параметром ShowIcons=true цепочка не строится.
     * @param boolean $ShowIcons Флаг отображения иконки.
     * @return void
     */
    public function GetNavChain($path = false, int $NumFrom = 0, $NavChainPath = false, bool $IncludeOnce = false, bool $ShowIcons = true): string
    {
        return '';
    }

    /**
     * Добавляет пункт в конец навигационной цепочки.
     *
     * @param string $title Заголовок добавляемого пункта навигационной цепочки.
     * @param string $link URL на который будет указывать добавляемый пункт навигационной цепочки.
     * @param boolean $bUnQuote Если значение - "true", то в title будут произведены следующие замены
     * @return void
     */
    public function AddChainItem(string $title, string $link = "", bool $bUnQuote = true): void
    { }

    /**
     * Возвращает объект класса CMenu, инициализированный методом CMenu::Init. Если произошла ошибка, то текст ошибки будет содержаться в свойстве LAST_ERROR данного объекта.
     *
     * @param string $type Тип меню.
     * @param boolean $bMenuExt Если значение - "true", то для формирования массива меню, помимо файлов .тип меню.menu.php будут также подключаться файлы с именами вида .тип меню.menu_ext.php. В которых вы можете манипулировать массивом меню $aMenuLinks произвольно, по вашему усмотрению (например, дополнять пункты меню значениями из инфо-блоков).
     * @param boolean|string $template Путь относительно корня к шаблону меню.
     * @param boolean|string $sInitDir Каталог для которого будет строится меню.
     * @return CMenu
     */
    public function GetMenu(string $type = "left", bool $bMenuExt = false, $template = false, $sInitDir = false): CMenu
    {
        return new CMenu;
    }


    /**
     * Возвращает HTML-код для отображения меню заданного типа. В отличии от метода CMain::GetMenuHtmlEx шаблон меню будет подключаться на каждый пункт меню.
     *
     * @param string $type Тип меню.
     * @param boolean $bMenuExt Если значение - "true", то для формирования массива меню, помимо файлов .тип меню.menu.php будут также подключаться файлы с именами вида .тип меню.menu_ext.php. В которых вы можете манипулировать массивом меню $aMenuLinks произвольно, по вашему усмотрению (например, дополнять пункты меню значениями из инфо-блоков).
     * @param boolean|string $template Путь относительно корня к шаблону меню.
     * @param boolean|string $sInitDir Каталог для которого будет строится меню.
     * @return string
     */
    public function GetMenuHtml(string $type = "left", $bMenuExt = false, $template = false, $sInitDir = false): string
    {
        return '';
    }

    /**
     * Возвращает HTML-код для отображения меню заданного типа. В отличие от метода CMain::GetMenuHtml шаблон меню будет подключаться только один раз.
     * Примечание. В шаблоне меню, используемом данным методом, в обязательном порядке необходимо инициализировать переменную $sMenu, в которой должен храниться HTML представляющий из себя все меню целиком.
     *
     * @param string $type Тип меню.
     * @param boolean $bMenuExt Если значение - "true", то для формирования массива меню, помимо файлов .тип меню.menu.php будут также подключаться файлы с именами вида .тип меню.menu_ext.php. В которых вы можете манипулировать массивом меню $aMenuLinks произвольно, по вашему усмотрению (например, дополнять пункты меню значениями из инфо-блоков).
     * @param boolean|string $template Путь относительно корня к шаблону меню.
     * @param boolean|string $sInitDir Каталог для которого будет строится меню.
     * @return string
     */
    public function GetMenuHtmlEx(string $type = "left", $bMenuExt = false, $template = false, $sInitDir = false): string
    {
        return '';
    }

    /**
     * Возвращает путь к текущей странице относительно корня вместе с параметрами.
     * @param string $add_params Строка параметров добавляемая к возвращаемому значению.
     * @param string $get_index_page Параметр указывает, нужно ли для индексной страницы раздела возвращать путь, заканчивающийся на "index.php". Если значение параметра равно true, то возвращается путь с "index.php", иначе - путь, заканчивающийся на "/".
     * @return void
     */
    public function GetCurUri(string $add_params = "", ? string $get_index_page = null): string
    {
        return '';
    }

    /**
     * Возвращает путь к текущей странице относительно корня.
     * @param boolean $get_index_page Параметр указывает, нужно ли для индексной страницы раздела возвращать путь, заканчивающийся на "index.php". Если значение параметра равно true, то возвращается путь с "index.php", иначе - путь, заканчивающийся на "/".
     * @return string Путь к текущей странице относительно корня.
     */
    public function GetCurPage(? bool $get_index_page = null): string
    {
        return '';
    }

    /**
     * Возвращает путь к текущей странице относительно корня c добавленными новыми и(или) удаленными текущими параметрами.
     * @param string $add_params Строка с параметрами которые нужно добавить к возвращаемому значению.
     * @param array $remove_params Массив параметров, которые необходимо удалить из URL-а страницы.
     * @param boolean $get_index_page Параметр указывает, нужно ли для индексной страницы раздела возвращать путь, заканчивающийся на "index.php". Если значение параметра равно true, то возвращается путь с "index.php", иначе - путь, заканчивающийся на "/".
     * @return string Путь к текущей странице относительно корня.
     */
    public function GetCurPageParam(string $add_params = "", array $remove_params = array(), ? bool $get_index_page = null): string
    {
        return '';
    }


    /**
     * Возвращает каталог текущей страницы относительно корня.
     * @return string Каталог текущей странице относительно корня.
     */
    public function GetCurDir(): string
    {
        return '';
    }

    /**
     * Устанавливает в объекте класса CMain текущую страницу и ее параметры.
     *
     * @param string $page Адрес страницы. Например, "/ru/index.php".
     * @param string|boolean $param Строка параметров. Например, "id=2&s=3&t=4". Параметр необязательный. Если его не задавать, то параметры страницы в объекте класса CMain остаются без изменений.
     * @return void
     */
    public function SetCurPage(string $page, $param = false): void
    { }

    /**
     * Возвращает свойство текущей страницы или раздела. Если на самой странице свойство не задано, то будет возвращено значение свойства вышестоящего раздела (рекурсивно до корня сайта).
     * @param string $property_id Идентификатор свойства.
     * @param mixed $default_value Значение свойства по умолчанию.
     * @return string Свойство текущей страницы или раздела.
     */
    public function GetProperty(string $property_id, $default_value = false): string
    {
        return '';
    }

    /**
     * Возвращает свойство текущей страницы.
     * @param string $property_id Идентификатор свойства.
     * @param mixed $default_value Значение свойства по умолчанию.
     * @return string Свойство текущей страницы или раздела.
     */
    public function GetPageProperty(string $property_id, $default_value = false): string
    {
        return '';
    }

    /**
     * Возвращает свойство текущего раздела.
     * @param string $property_id Идентификатор свойства.
     * @param mixed $path Путь к каталогу. В случае многосайтовой версии, если DOCUMENT_ROOT у сайтов разный (задается в поле "Путь к корневой папке веб-сервера" в настройках сайта), то в данном параметре необходимо передавать массив.
     * @param mixed $default_value Значение свойства по умолчанию.
     * @return string Свойство текущей страницы или раздела.
     */
    public function GetDirProperty(string $property_id, $path = false, $default_value = false): string
    {
        return '';
    }

    /**
     * Возвращает массив всех свойств страницы.
     * @return array Mассив всех свойств страницы.
     */
    public function GetPagePropertyList(): array
    {
        return [];
    }

    /**
     * Возвращает массив свойств раздела, собранных рекурсивно до корня сайта.
     * @param mixed $path Путь к каталогу. В случае многосайтовой версии, если DOCUMENT_ROOT у сайтов разный (задается в поле "Путь к корневой папке веб-сервера" в настройках сайта), то в данном параметре необходимо передавать массив.
     * @return array Свойство текущей страницы или раздела.
     */
    public function GetDirPropertyList($path = false): array
    {
        return [];
    }

    /**
     * Устанавливает свойство для текущей страницы.
     * @param string $property_id Идентификатор свойства.
     * @param string $property_value Значение свойства.
     * @param array $Options Необязательный. По умолчанию "null".
     */
    public function SetPageProperty(string $property_id, string $property_value, ? array $Options = null): void
    { }

    /**
     * Устанавливает свойство для текущей страницы.
     * @param string $property_id Идентификатор свойства.
     * @param string $property_value Значение свойства.
     * @param array $path Путь до страницы. По умолчанию - "false", то есть текущий.
     */
    public function SetDirProperty(string $property_id, string $property_value, ? bool $path = false): void
    { }

    /**
     * Устанавливает свойство для текущей страницы.
     * @param string $componentName Имя компонента. Например: "bitrix:news.detail".
     * @param string $componentTemplate Имя шаблона компонента. Если имя пустое, то подразумевается имя ".default".
     * @param array $arParams Массив входных параметров компонента.
     * @param object $parentComponent Объект родительского комплексного компонента, если компонент подключается из шаблона комплексного компонента. В шаблоне комплексного компонента определена переменная $component, которая содержит объект этого комплексного компонента.
     * @param array $arFunctionParams Массив, содержащий дополнительные параметры отображения компонента:
     * "HIDE_ICONS"=>"Y" - не показывать панель настройки компонента в режиме редактировани/разработки;
     * "ACTIVE_COMPONENT"=>"N" - отключить компонент (код компонента не подключается).
     * @return mixed Возвращает код компонента.
     */
    public function IncludeComponent(string $componentName, string $componentTemplate, array $arParams = [], object $parentComponent = null, array $arFunctionParams = [])
    { }

    /**
     * Устанавливает свойство для текущей страницы.
     * @param string $path Путь к подключаемому файлу.
     * @param array $params Массив параметров для подключаемого файла.
     * @param array $function_params Массив настроек данного метода.
     */
    public function IncludeFile(string $path, array $params = [], array $function_params = [])
    { }

    /**
     * Возвращает путь от корня сайта к файлу по пути задаваемому для компонента.
     *
     * @param string $rel_path Путь к компоненту.
     * @return string
     */
    public function GetTemplatePath(string $rel_path): string
    {
        return '';
    }

    /**
     * Устанавливает cookie и при необходимости запоминает параметры установленного cookie для дальнейшего распространения по сайтам с разными доменными именами.
     *
     * @deprecated Use \Bitrix\Main\HttpResponse::addCookie().
     *
     * @param string $name Имя cookie переменной.
     * @param string $value Значение cookie переменной.
     * @param boolean|int $time Дата в Unix-формате после которой cookie будет считаться истекшим и его значение не будет передаваться от посетителя на сайт. По умолчанию - cookie устанавливается сроком на 1 год.
     * @param string $folder Каталог веб-сайта для которого cookie будет действителен. По умолчанию - весь сайт.
     * @param boolean|string $domain cookie domain Домен для которого cookie будет действительным. По умолчанию - текущий сайт.
     * @param boolean $secure Флаг secure для устанавливаемого cookie. Если значение "true", то будет установлен как "защищенный", т.е. его значение будет возвращаться на сайт только если посетитель зашел на сайт по протоколу HTTPS.
     * @param boolean|int $spread Если значение "true", то параметры установленного cookie будут запоминаться для дальнейшего его распространения по доменам (административное меню "Сайты", в настройках сайта - поле "Доменное имя").
     * @param boolean $name_prefix Префикс имени переменной cookie. По умолчанию - значение параметра "Имя префикса для названия cookies" в настройках главного модуля.
     * @param boolean $httpOnly Необязательный. По умолчанию - "false".
     * 
     * @return void
     */
    public function set_cookie(
        string $name,
        string $value,
        $time = false,
        string $folder = "/",
        $domain = false,
        bool $secure = false,
        $spread = true,
        bool $name_prefix = false,
        bool $httpOnly = false
    ): void { }

    /**
     * Возвращает значение cookie.
     *
     * @deprecated Use \Bitrix\Main\HttpRequest::getCookie().
     *
     * @param string $name Имя cookie переменной.
     * @param boolean $name_prefix Префикс имени переменной cookie. По умолчанию - значение параметра "Имя префикса для названия cookies" в настройках главного модуля
     * @return string
     */
    public function get_cookie(string $name, $name_prefix = false): string
    {
        return '';
    }

    /**
     * Отображает HTML представляющий из себя набор IFRAME'ов предназначенный для распространения cookie по доменам. Метод используется в Технологии переноса посетителей между разными сайтами. Она стандартно включена в визуальную часть эпилога.
     *
     * @return void
     */
    public function ShowSpreadCookieHTML(): void
    { }

    public function GetException(): CApplicationException
    {
        return new CApplicationException('');
    }

    /**
     * Метод фиксирует исключение msg c кодом id. Получить последнее исключение можно методом $APPLICATION->GetException().
     * Аналог в новом ядре D7: SystemException.
     *
     * @param mixed $msg
     * @param mixed $id
     * @return void
     */
    public function ThrowException($msg, $id = false): void
    { }

    /**
     * Метод очищает последнее исключение.
     * Аналог в новом ядре D7: SystemException.
     *
     * @return void
     */
    public function ResetException(): void
    { }

    /**
     * Подключает скрипт с административным прологом и эпилогом.
     *
     * @param string $strTitle Заголовок страницы.
     * @param string $filepath Абсолютный путь к подключаемому файлу.
     * @return void
     */
    public function IncludeAdminFile(string $strTitle, string $filepath): void
    { }

    /**
     * Выводит произвольную строку (HTML код) обрамленную рамкой, в правом верхнем углу которой выводятся заданные иконки.
     *
     * @param string $string Произвольный текст (HTML код).
     * @param array|boolean $arIcons Массив иконок, каждый элемент которого представляет из себя массив описывающий одну иконку
     * @return string
     */
    public function IncludeString(string $string, $arIcons = false): string
    {
        return '';
    }

    /**
     * Возвращает "true", если кнопка "Показать включаемые области" на панели управления нажата, в противном случае - "false".
     *
     * @return boolean
     */
    public function GetShowIncludeAreas(): bool
    {
        return false;
    }

    /**
     * Позволяет создавать Отложенные функции.
     *
     * @param string:array $callback
     * @param mixed parameter_n Неограниченное количество параметров которые будут впоследствии переданы функции function.
     * @return void
     */
    public function AddBufferContent(callable $callback): void
    { }

    /**
     * Подключает модуль рекламы и отображает баннер заданного типа.
     *
     * @param string $type Тип баннера (административный пункт меню "Реклама" > "Типы баннеров").
     * @param string $html_before HTML код выводимый перед баннером.
     * @param string $html_after HTML код выводимый после баннера.
     * @return void
     */
    public static function ShowBanner(string $type, string $html_before = '', string $html_after = ''): void
    { }

    /**
     * Возвращает массив описывающий сайт, определяемый по указанному пути и домену. Описание ключей данного массива вы можете найти на странице Поля CSite.
     *
     * @param string|boolean $cur_dir Путь относительно корня. По умолчанию - путь к текущей странице.
     * @param string|boolean $cur_host Имя домена. По умолчанию - текущий домен.
     * @return array
     */
    public function GetSiteByDir($cur_dir=false, $cur_host=false): array
    {
        return [];
    }

    /**
     * Метод подключает ряд компонентов в зависимости от параметров пришедших на страницу
     *
     * @param string|array $mess Строка - сообщение об ошибке или массив вида Array("MESSAGE" => сообщение, "TYPE" => "ERROR"|"OK") (обрабатывается функцией ShowMessage)
     * @param boolean $show_prolog Если значение "true" - то будет выведен пролог (верх) сайта, "false" - пролог выводиться не будет.
     * @param boolean $show_epilog Если значение "true" - то будет выведен эпилог (низ) сайта, "false" - эпилог выводиться не будет.
     * @param string $not_show_links Данный параметр передается в компонент "Форма авторизации" (main/auth/authorize.php). Если значение "Y" - то ссылки ведущие на регистрацию и форму запроса и смены забытого пароля выводиться не будут, если "N" - ссылки выводиться будут (значение по умолчанию).
     * @param boolean $do_die Если значение "true" - то страница будет завершена после вывода формы и (опционально) эпилога, "false" - страница прерываться не будет.
     * @return void
     */
    public function AuthForm($mess, bool $show_prolog=true, bool $show_epilog=true, $not_show_links="N", bool $do_die=true)
    { }

    /**
     * Определяет является ли текущий протокол защищенным (HTTPS).
     *
     * @return boolean
     */
    public static function IsHTTPS(): bool
    {
        return false;
    }

    /**
     * Обёртка над методом AddBufferContent. Метод позволяет указать место вывода контента, создаваемого ниже по коду с помощью метода ShowViewContent.
     *
     * @param mixed $view
     * @param mixed $content
     * @param mixed $pos
     * @return void
     */
    public function AddViewContent(string $view, $content, $pos = 500)
    { }

    /**
     * Метод позволяет установить выводимый контент для функции AddViewContent. Применение этих методов позволяет, например, в шаблоне сайта вывести даты отображенных в контентой части новостей. (Для этого достаточно в цикле вывода новостей собрать даты новостей, соединить в одну строку и передать в AddViewContent). Прежде всего позволяет избежать дублирование компонент и лишних циклов.
     *
     * @param string $view идентификатор буферизируемой области
     * @return void
     */
    public function ShowViewContent(string $view)
    { }

    /**
     * Метод используется для конвертирования строк из разных кодировок.
     * Примечание: метод - обертка для iconv, если iconv`а нет, то метод обходится и без неё (с ущербом производительности).
     *
     * @param string $string Строка для конвертации
     * @param string $charset_in Исходная кодировка
     * @param string $charset_out Конечная кодировка
     * @return string Возвращает строку в нужной кодировке.
     */
    public function ConvertCharset(string $string, string $charset_in, string $charset_out): string
    {
        return '';
    }

    /**
     * Метод используется для конвертирования данных из разных кодировок.
     * Примечание: метод - обертка для iconv, если iconv`а нет, то метод обходится и без неё (с ущербом производительности).
     *
     * @param array $Data Массив для конвертации
     * @param string $charset_in Исходная кодировка
     * @param string $charset_out Конечная кодировка
     * @return array Возвращает данные в нужной кодировке.
     */
    public function ConvertCharsetArray(array $Data, string $charset_in, string $charset_out): array
    {
        return [];
    }

    /**
     * Метод позволяет сбросить контент рабочей области публичной страницы сайта.
     *
     * @param boolean $start
     * @return boolean
     */
    public function RestartWorkarea($start = false): bool
    {
        return false;
    }
}


class CApplicationException
{
    /**
     * Создает объект исключения класса CApplicationException с текстом msg c кодом id.
     *
     * @param string $msg Текст ошибки.
     * @param mixed $id Идентификатор ошибки.
     */
    public function __construct(string $msg, $id = false)
    { }

    /**
     * Создает объект исключения класса CApplicationException с текстом msg c кодом id.
     *
     * @deprecated
     *
     * @param string $msg Текст ошибки.
     * @param mixed $id Идентификатор ошибки.
     */
    public function CApplicationException(string $msg, $id = false): void
    { }

    /**
     * Метод возвращает текст исключения.
     *
     * @return string
     */
    public function GetString(): string
    {
        return '';
    }

    /**
     * Метод для переопределения в компонентах сообщений, заданных при регистрации исключения в ядре.
     *
     * @return mixed
     */
    public function GetID()
    { }
}
