<?php

/**
 * Класс CBitrixComponent является оболочкой компонента. Для каждого подключаемого компонента создаётся свой экземпляр класса CBitrixComponent, который живет до конца подключения компонента. Внутри компонента методы этого класса доступны через переменную-псевдоним $this.
 * 
 * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/index.php
 */
class CBitrixComponent
{
    /** @var CBitrixComponentTemplate */
    public $__template = null;

    /** @var CBitrixComponent */
    public $__parent = null;

    /**
     * Event called from includeComponent before component execution.
     *
     * <p>Takes component parameters as argument and should return it formatted as needed.</p>
     * @param array[string]mixed $arParams
     * @return array[string]mixed
     *
     */
    public function onPrepareComponentParams($arParams)
    { }

    /**
     * Event called from includeComponent before component execution.
     *
     * <p>Includes component.php from within lang directory of the component.</p>
     * @return void
     *
     */
    public function onIncludeComponentLang(): void
    { }

    /**
     * Function calls __includeComponent in order to execute the component.
     *
     * @return mixed
     *
     */
    public function executeComponent()
    { }

    /**
     * Метод возвращает имя компонента.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/getname.php
     */
    final public function getName(): ?string
    {
        return '';
    }

    /**
     * Метод возвращает путь к папке компонента относительно папки /bitrix/components.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/getrelativepath.php
     */
    final public function getRelativePath(): ?string
    {
        return '';
    }

    /**
     * Метод возвращает путь к папке компонента относительно корня сайта
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/getpath.php
     */
    final public function getPath(): ?string
    {
        return '';
    }

    /**
     * Метод возвращает имя шаблона компонента в том виде, в котором оно было передано при подключении компонента.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/gettemplatename.php
     */
    final public function getTemplateName(): ?string
    {
        return '';
    }

    /**
     * Function sets the name of the template. Returns true on success.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $templateName
     * @return bool
     *
     */
    final public function setTemplateName(string $templateName): ?bool
    {
        return false;
    }

    /**
     * @param string $siteTemplateId
     */
    public function setSiteTemplateId($siteTemplateId): void
    { }

    /**
     * @return mixed
     */
    public function getSiteTemplateId()
    { }

    /**
     * @param string $siteId
     */
    public function setSiteId(string $siteId): void
    { }

    /**
     * @return mixed
     */
    public function getSiteId()
    { }

    /**
     * @param string $languageId
     */
    public function setLanguageId($languageId): void
    { }

    /**
     * @return mixed
     */
    public function getLanguageId()
    { }

	/**
	 * Returns signed parameters.
	 * The list contains parameters which are presented in  \CBitrixComponent::listKeysSignedParameters().
	 *
	 * @see \CBitrixComponent::listKeysSignedParameters()
	 *
	 * @return string|null
	 */
    final public function getSignedParameters(): ?string
    {
        return '';
    }

    /**
     * Метод возвращает имя страницы шаблона компонента.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return string
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/gettemplatepage.php
     */
    final public function getTemplatePage(): ?string
    {
        return '';
    }

    /**
     * Метод возвращает ссылку на объект шаблона компонента. Шаблон компонента становится известен только после вызова методов IncludeComponentTemplate или InitComponentTemplate. До вызова указанных методов возвращается ссылка на значение null.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return CBitrixComponentTemplate
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/gettemplate.php
     */
    final public function getTemplate(): ?CBitrixComponentTemplate
    {
        return new CBitrixComponentTemplate;
    }

    /**
     * Метод возвращает ссылку на объект родительского комплексного компонента.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return CBitrixComponent
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/getparent.php
     */
    final public function getParent(): ?CBitrixComponentTemplate
    {
        return new CBitrixComponentTemplate;
    }

    /**
     * Метод GetTemplateCachedData вызывают, если не используется встроенное в компонент кэширование и при этом вызов IncludeComponentTemplate кэшируется. Этот метод возвращает данные, которые необходимо сохранить в кэше, а потом восстановить из кэша и вернуть шаблону методом SetTemplateCachedData.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return array[string][int]string
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/gettemplatecacheddata.php
     */
    final public function getTemplateCachedData()
    { }

    /**
     * Метод SetTemplateCachedData вызывают, если не используется встроенное в компонент кэширование, и при этом вызов CBitrixComponent::IncludeComponentTemplate кэшируется. Этот метод возвращает шаблону данные, которые необходимо было сохранить в кэше.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @param array[string][int]string $templateCachedData
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/settemplatecacheddata.php
     */
    final public function setTemplateCachedData($templateCachedData): void
    { }

    /**
     * Function includes class of the component by component name bitrix:component.base
     *
     * @param string $componentName
     * @return string
     *
     */
    final public static function includeComponentClass(string $componentName): string
    {
        return '';
    }

    /**
     * Function initializes the component. Returns true on success.
     *
     * <p>It is absolutly necessery to call this function before any component usage.</p>
     * @param string $componentName
     * @param string|bool $componentTemplate
     * @return bool
     *
     */
    final public function initComponent(string $componentName, $componentTemplate = false): bool
    {
        return false;
    }

    /**
     * Helper function for component parameters safe html escaping.
     *
     * @param array[string]mixed &$arParams
     * @return void
     *
     */
    final public function __prepareComponentParams(&$arParams): void
    { }

    /**
     * Function includes language files from within the component directory.
     *
     * <p>For example: $this->includeComponentLang("ajax.php") will include "lang/en/ajax.php" file. </p>
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $relativePath
     * @param string|bool $lang
     * @return void
     *
     */
    final public function includeComponentLang(string $relativePath = "", $lang = false): void
    { }

    /**
     * Function executes the component. Returns the result of it's execution.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $componentTemplate
     * @param array[string]mixed $arParams
     * @param CBitrixComponent $parentComponent
     * @return mixed
     *
     */
    final public function includeComponent(string $componentTemplate, $arParams, CBitrixComponent $parentComponent)
    { }

    /**
     * Метод инициализирует и подключает шаблон компонента. Если инициализация шаблона прошла неудачно, он выводит ошибку на экран.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $templatePage Имя страницы шаблона компонента. Устанавливается для комплексных компонентов. Для обычных компонентов должно быть равно пустой строке или не установлено.
     * @param string $customTemplatePath
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/includecomponenttemplate.php
     */
    final public function includeComponentTemplate(string $templatePage = "", string $customTemplatePath = ""): void
    { }

    /**
     * Метод инициализирует шаблон компонента. После вызова этого метода можно получить объект шаблона с помощью метода CBitrixComponent::GetTemplate. Шаблон компонента в этом случае подключается методом CBitrixComponent::ShowComponentTemplate.
     * Если объект шаблона коду компонента не нужен, воспользуйтесь одним методом CBitrixComponent::IncludeComponentTemplate, который сразу и инициализирует и подключает шаблон.
     *
     * <p>Instansiates the template object and calls it's init function.</p>
     * <p>Note: component must be inited by initComponent method.</p>
     * @param string $templatePage Имя страницы шаблона компонента. Устанавливается для комплексных компонентов. Для обычных компонентов должно быть равно пустой строке или не установлено.
     * @param string|bool $siteTemplate
     * @param string $customTemplatePath
     * @return bool Возвращает True в случае успешной инициализации, иначе - False.
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/initcomponenttemplate.php
     */
    final public function initComponentTemplate(string $templatePage = "", $siteTemplate = false, string $customTemplatePath = ""): bool
    {
        return false;
    }

    /**
     * Метод подключает шаблон компонента. Перед вызовом этого метода шаблон должен быть инициализирован методом CBitrixComponent::InitComponentTemplate.
     * Если объект шаблона коду компонента не нужен, используйте CBitrixComponent::IncludeComponentTemplate, который сразу и инициализирует и подключает шаблон.
     *
     * <p>Note: component must be inited by initComponent method.</p>
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/showcomponenttemplate.php
     */
    final public function showComponentTemplate(): void
    { }

    /**
     * Добавляет новую кнопку к тем кнопкам компонента, которые отображаются в области компонента в режиме редактирования сайта.
     *
     * @param array[string]mixed $arIcon Массив, описывающий кнопку, в формате:
     * array(
     *     'URL'   => "javascript:alert('Это новая кнопка');",
     *     'SRC'   => $this->GetPath().'/images/znak.gif',
     *     'TITLE' => "Это новая кнопка"
     * )
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/addincludeareaicon.php
     */
    final public function addIncludeAreaIcon($arIcon): void
    { }

    /**
     * Добавляет массив новых кнопок к тем кнопкам компонента, которые отображаются в области компонента в режиме редактирования сайта. При этом, вызов метода AddIncludeAreaIcons отменяет все предыдущие вызовы методов AddIncludeAreaIcons и AddIncludeAreaIcon.
     *
     * @param array[int][string]mixed $arIcon
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/addincludeareaicons.php
     */
    final public function addIncludeAreaIcons($arIcons): void
    { }

    /**
     * Function returns the collection of the Icons displayed for the component.
     *
     * @return array[int][string]mixed
     *
     */
    final public function getIncludeAreaIcons()
    { }

    /**
     * Function returns an cache identifier based on component parameters and environment.
     *
     * @param mixed $additionalCacheID
     * @return string
     */
    public function getCacheID($additionalCacheID = false): string
    {
        return '';
    }

    /**
     * Метод поддержки внутреннего кеширования компонента.
     * Если кеш действителен, метод отправляет на экран его содержимое, заполняет $arResult и возвращает False. Если кеш недействителен, метод возвращает True, кеширование завершается и кеш сохраняется при вызове методов CBitrixComponent::IncludeComponentTemplate или CBitrixComponent::ShowComponentTemplate сразу после подключения шаблона компонента.
     *
     * @param int|bool $cacheTime
     * @param mixed $additionalCacheID
     * @param string|bool $cachePath
     * @return string
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/startresultcache.php
     */
    final public function startResultCache($cacheTime = false, $additionalCacheID = false, $cachePath = false): string
    {
        return '';
    }

    /**
     * Метод позволяет кешировать только $arResult без кеширования html-кода. Вызывается в конце блока получения данных, сохраняемых в кеше (перед закрывающей скобкой), и тогда IncludeComponentTemplate можно вынести из этого блока.
     *
     * <p>Note: automaticly called by includeComponentTemplate.</p>
     * @return void
     *
     */
    final public function endResultCache(): void
    { }

    /**
     * Метод поддержки внутреннего кеширования компонента.
     * Применяется, если в результате выборки данных (в случае отсутствия валидного кеша) выяснилось, что кешировать данные не требуется. Например, если новости с требуемым ID нет, следует прервать кеширование и выдать сообщение, что такой новости нет. Если кеширование не прервать, то злоумышленники смогут увеличить кеш до всего отведенного сайту дискового пространства, вызывая страницу с произвольными (в том числе и не существующими) ID. 
     *
     * <p>Note: must be called if component returns before endResultCache or includeComponentTemplate called.</p>
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/abortresultcache.php
     */
    final public function abortResultCache(): void
    { }

    /**
     * Метод поддержки внутреннего кеширования компонента.
     * Применяется, если при выполнении некоторых условий требуется очистить кеш компонента (например, при изменении данных).
     *
     * <p>Note: parameters must exactly match to startResultCache call.</p>
     * @param mixed $additionalCacheID
     * @param string|bool $cachePath
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/clearresultcache.php
     */
    final public function clearResultCache($additionalCacheID = false, $cachePath = false): void
    { }

    /**
     * Function clears entire component cache.
     *
     * <p>Note: parameters must exactly match to startResultCache call.</p>
     * @param string $componentName
     * @param string $siteId
     * @return void
     *
     */
    final public static function clearComponentCache(string $componentName, string $siteId = ""): void
    { }

    /**
     * Function returns component cache path.
     *
     * @return string
     *
     */
    final public function getCachePath(): string
    {
        return '';
    }

    /**
     * $arResultCacheKeys - это список ключей массива $arResult, которые должны кэшироваться при использовании встроенного кэширования компонентов. 
     *
     * <p>Note: it's call adds key, not replacing.</p>
     * @param array[int]string $arResultCacheKeys
     * @return void
     * @link https://dev.1c-bitrix.ru/api_help/main/reference/cbitrixcomponent/setresultcachekeys.php
     */
    final public function setResultCacheKeys($arResultCacheKeys): void
    { }

    /**
     * Function returns component area id for editing mode.
     *
     * @param string $entryId
     * @return string
     *
     */
    final public function getEditAreaId(string $entryId): string
    {
        return '';
    }

    /**
     * Function adds an edit action to some area inside the component.
     *
     * @param string $entryId
     * @param string $editLink
     * @param string|bool $editTitle
     * @param array[string]mixed $arParams
     * @return void
     *
     */
    final public function addEditAction(string $entryId, string $editLink, $editTitle = false, $arParams = []): void
    { }

    /**
     * Function adds an delete action to some area inside the component.
     *
     * <ul>
     * <li>$arParams['CONFIRM'] = false - disable confirm;
     * <li>$arParams['CONFIRM'] = 'Text' - confirm with custom text;
     * <li>no $arParams['CONFIRM'] at all - confirm with default text
     * </ul>
     * @param string $entryId
     * @param string $deleteLink
     * @param string|bool $deleteTitle
     * @param array[string]mixed $arParams
     * @return void
     *
     */
    final public function addDeleteAction(string $entryId, string $deleteLink, $deleteTitle = false, $arParams = []): void
    { }

    /**
     * Function saves component epilog environment
     *
     * @param array[string]mixed $arEpilogInfo
     * @return void
     *
     */
    final public function setTemplateEpilog($arEpilogInfo): void
    { }

    /**
     * Function restores component epilog environment and executes it.
     *
     * @param array[string]mixed $arEpilogInfo
     * @return void
     *
     */
    final public function includeComponentEpilog($arEpilogInfo): void
    { }

    /**
     * Function shows an internal error message.
     *
     * @param string $errorMessage
     * @param string $errorCode
     * @return void
     *
     */
    public function __showError(string $errorMessage, string $errorCode = ""): void
    { }

    /**
     * Function registers children css file for cache.
     *
     * @param string $cssPath
     * @return void
     *
     */
    final public function addChildCSS(string $cssPath): void
    { }

    /**
     * Function registers children js file for cache.
     *
     * @param string $jsPath
     * @return void
     *
     */
    final public function addChildJS(string $jsPath): void
    { }

    /**
     * Function registers children epilog file for cache.
     *
     * @param string $epilogFile
     * @return void
     *
     */
    final public function addChildEpilog(string $epilogFile): void
    { }

    /**
     * Registers child frame for cache.
     *
     * @param \Bitrix\Main\Composite\StaticArea $frame
     * @return void
     *
     */
    final public function addChildFrame($frame): void
    { }

    /**
     * Function adds a button to be displayed.
     *
     * @param array[int]string $arButton
     * @return void
     *
     */
    final public function addEditButton($arButton): void
    { }

    /**
     * Function registers new view target for the cache.
     *
     * @param string $target
     * @param string $content
     * @param int $pos
     * @return void
     *
     */
    final public function addViewTarget(string $target, string $content, int $pos): void
    { }

    /**
     * Function returns next pseudo random value.
     *
     * @param int $length
     * @return string
     *
     * @see \Bitrix\Main\Type\RandomSequence::randString
     */
    public function randString(int $length = 6): string
    {
        return '';
    }

    /**
     * Marks a component as capable of composite mode.
     * You should use is to mark a whole component as
     * composite incompatible.
     *
     * @param bool $mode
     * @return void
     *
     */
    public function setFrameMode(bool $mode): void
    { }

    public function getFrameMode()
    { }

    public function getRealFrameMode()
    { }

    public function getDefaultFrameMode()
    { }
}
