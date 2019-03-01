<?
/** @global CMain $APPLICATION */

class CMain {
    /**
     * Отображает свойство страницы в виде мета-тега. Метод допускает использование специальных символов (html entities) в значениях свойств. Если на самой странице свойство не задано, то будет взято значение  Метод использует технологию отложенных функций, позволяющую, помимо всего прочего, задавать значения мета-тегов через свойства страницы или раздела (с помощью методов CMain::SetPageProperty, CMain::SetDirProperty) уже после того как был выведен пролог сайта.
     * @param string $property_id Идентификатор свойства страницы или раздела, значение которого (value) будет выведено в аттрибуте "content" мета-тега
     * @param string $meta_name Аттрибут "name" мета-тега. Необязательный. По умолчанию равен идентификатору свойства property_id.
     * @param boolean $bXhtmlStyle Параметр, устанавливающий, по какому стандарту оформляются HTML-теги. Если значение true, то теги выводятся по стандарту XHTML (<meta />), иначе по стандарту HTML 4 (<meta>).
     * @return void
     */
    public function ShowMeta(string $property_id, string $meta_name = null, bool $bXhtmlStyle = null): void {
    }

    /**
     * Отображает заголовок страницы. Метод использует технологию отложенных функций, позволяющую, помимо всего прочего, задавать заголовок страницы (например, внутри компонента) уже после того как был выведен пролог сайта.
     * @param string $property_name Идентификатор свойства страницы, значение которого будет выведено в качестве заголовка (если это значение задано например, с помощью метода CMain::SetPageProperty).
     * @param boolean $strip_tags Если значение - "true", то из заголовка страницы будут удалены все HTML теги.
     * @return void
     */
    public function ShowTitle(string $property_name = 'title', bool $strip_tags = true): void {
    }

    /**
     * Метод предназначен для вывода в шаблоне сайта основных полей тега <head>: мета-теги Content-Type, robots, keywords, description; стили CSS; скрипты, заданные через CMain::AddHeadScript.
     * @param boolean $bXhtmlStyle Параметр, устанавливающий, по какому стандарту оформляются HTML-теги. Если значение true, то теги выводятся по стандарту XHTML (<meta />), иначе по стандарту HTML 4 (<meta>).
     * @return void
     */
    public function ShowHead(bool $bXhtmlStyle = true): void {}


    /**
     * Отображает специальные стили, JavaScript либо произвольный html-код.
     * @param boolean $additional
     * @return void
     */
    public function ShowHeadStrings(bool $additional = false): void {}

    /**
     * Отображает панель управления в публичной части сайта.
     * @return void
     */
    public function ShowPanel(): void {}

    /**
     * Отображает HTML для подключения CSS на странице.
     * @return void
     */
    public function ShowCSS(): void {}

    /**
     * Отображает HTML с навигационной цепочкой.
     * @return void
     */
    public function ShowNavChain(): void {}

    /**
     * Отображает свойство страницы, учитывая свойства раздела.
     * @param string $property_id Идентификатор свойства.
     * @param mixed $default_value Значение свойства по умолчанию.
     * @return void
     */
    public function ShowProperty(string $property_id, $default_value = false): void {}

    /**
     * Возвращает заголовок страницы.
     * @param string $property_name Если указано значение "false", то будет возвращен заголовок страницы, устанавливаемый с помощью метода SetTitle. В противном случае в параметре передается идентификатор свойства страницы, значение которого будет выведено в качестве заголовка (если это значение задано, например, с помощью метода CMain::SetPageProperty).
     * @param boolean $strip_tags Если значение - "true", то из заголовка страницы будут удалены все HTML теги.
     * @return void
     */
    public function GetTitle(string $property_name, bool $strip_tags = false): void {}

    /**
     * Возвращает заголовок страницы.
     * @param boolean $external Если значение - "true", то выводится HTML представляющий из себя ссылку на внешний CSS, если значение "false", то выводится HTML представляющий из себя внутренний CSS.
     * @param boolean $bXhtmlStyle Параметр, устанавливающий, по какому стандарту оформляются HTML-теги. Если значение true, то теги выводятся по стандарту XHTML (<meta />), иначе по стандарту HTML 4 (<meta>).
     * @return void
     */
    public function GetCSS(bool $external = true, bool $bXhtmlStyle = true): void {}

    /**
     * Возвращает HTML представляющий из себя навигационную цепочку.
     * @param mixed $path Путь для которого будет построена навигационная цепочка. В случае многосайтовой версии, если DOCUMENT_ROOT у сайтов разный (задается в поле "Путь к корневой папке веб-сервера" в настройках сайта), то в данном параметре необходимо передавать массив.
     * @param integer $NumFrom Начиная от какого пункта будет построена навигационная цепочка.
     * @param mixed $NavChainPath Путь к шаблону навигационной цепочки.
     * @param boolean $IncludeOnce Необязателен. По умолчанию - "false". В режиме правки с параметром ShowIcons=true цепочка не строится.
     * @param boolean $ShowIcons Флаг отображения иконки.
     * @return void
     */
    public function GetNavChain($path = false, int $NumFrom = 0, $NavChainPath = false, bool $IncludeOnce = false, bool $ShowIcons = true): void {}


    /**
     * Возвращает путь к текущей странице относительно корня вместе с параметрами.
     * @param string $add_params Строка параметров добавляемая к возвращаемому значению.
     * @param string $get_index_page Параметр указывает, нужно ли для индексной страницы раздела возвращать путь, заканчивающийся на "index.php". Если значение параметра равно true, то возвращается путь с "index.php", иначе - путь, заканчивающийся на "/".
     * @return void
     */
    public function GetCurUri(string $add_params = "", ?string $get_index_page=null): void {}

    /**
     * Возвращает путь к текущей странице относительно корня.
     * @param boolean $get_index_page Параметр указывает, нужно ли для индексной страницы раздела возвращать путь, заканчивающийся на "index.php". Если значение параметра равно true, то возвращается путь с "index.php", иначе - путь, заканчивающийся на "/".
     * @return string Путь к текущей странице относительно корня.
     */
    public function GetCurPage(?bool $get_index_page=null): string { return '';}

    /**
     * Возвращает путь к текущей странице относительно корня c добавленными новыми и(или) удаленными текущими параметрами.
     * @param string $add_params Строка с параметрами которые нужно добавить к возвращаемому значению.
     * @param array $remove_params Массив параметров, которые необходимо удалить из URL-а страницы.
     * @param boolean $get_index_page Параметр указывает, нужно ли для индексной страницы раздела возвращать путь, заканчивающийся на "index.php". Если значение параметра равно true, то возвращается путь с "index.php", иначе - путь, заканчивающийся на "/".
     * @return string Путь к текущей странице относительно корня.
     */
    public function GetCurPageParam(string $add_params = "", array $remove_params = array(), ?bool $get_index_page = null): string { return '';}


    /**
     * Возвращает каталог текущей страницы относительно корня.
     * @return string Каталог текущей странице относительно корня.
     */
    public function GetCurDir(): string { return '';}

    /**
     * Возвращает свойство текущей страницы или раздела. Если на самой странице свойство не задано, то будет возвращено значение свойства вышестоящего раздела (рекурсивно до корня сайта).
     * @param string $property_id Идентификатор свойства.
     * @param mixed $default_value Значение свойства по умолчанию.
     * @return string Свойство текущей страницы или раздела.
     */
    public function GetProperty(string $property_id, $default_value = false): string { return '';}

    /**
     * Возвращает свойство текущей страницы.
     * @param string $property_id Идентификатор свойства.
     * @param mixed $default_value Значение свойства по умолчанию.
     * @return string Свойство текущей страницы или раздела.
     */
    public function GetPageProperty(string $property_id, $default_value = false): string { return '';}

    /**
     * Возвращает свойство текущего раздела.
     * @param string $property_id Идентификатор свойства.
     * @param mixed $path Путь к каталогу. В случае многосайтовой версии, если DOCUMENT_ROOT у сайтов разный (задается в поле "Путь к корневой папке веб-сервера" в настройках сайта), то в данном параметре необходимо передавать массив.
     * @param mixed $default_value Значение свойства по умолчанию.
     * @return string Свойство текущей страницы или раздела.
     */
    public function GetDirProperty(string $property_id, $path = false, $default_value = false): string { return '';}

    /**
     * Возвращает массив всех свойств страницы.
     * @return array Mассив всех свойств страницы.
     */
    public function GetPagePropertyList(): array { return [];}

    /**
     * Возвращает массив свойств раздела, собранных рекурсивно до корня сайта.
     * @param mixed $path Путь к каталогу. В случае многосайтовой версии, если DOCUMENT_ROOT у сайтов разный (задается в поле "Путь к корневой папке веб-сервера" в настройках сайта), то в данном параметре необходимо передавать массив.
     * @return array Свойство текущей страницы или раздела.
     */
    public function GetDirPropertyList($path = false): array { return [];}

    /**
     * Устанавливает свойство для текущей страницы.
     * @param string $property_id Идентификатор свойства.
     * @param string $property_value Значение свойства.
     * @param array $Options Необязательный. По умолчанию "null".
     */
    public function SetPageProperty(string $property_id, string $property_value, ?array $Options = null) : void {}

    /**
     * Устанавливает свойство для текущей страницы.
     * @param string $property_id Идентификатор свойства.
     * @param string $property_value Значение свойства.
     * @param array $path Путь до страницы. По умолчанию - "false", то есть текущий.
     */
    public function SetDirProperty(string $property_id, string $property_value, ?bool $path = false) : void {}

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
    public function IncludeComponent(string $componentName, string $componentTemplate, array $arParams=[], object $parentComponent=null, array $arFunctionParams=[]) {}

    /**
     * Устанавливает свойство для текущей страницы.
     * @param string $path Путь к подключаемому файлу.
     * @param array $params Массив параметров для подключаемого файла.
     * @param array $function_params Массив настроек данного метода.
     */
    public function IncludeFile(string $path, array $params = [], array $function_params = []) {}



}
