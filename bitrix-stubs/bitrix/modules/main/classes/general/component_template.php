<?php

class CBitrixComponentTemplate
{
    /** @var CBitrixComponent */
    public $__component = null;

    /**
     * Метод возвращает имя шаблона компонента.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetName(): ?string
    {
        return '';
    }

    /**
     * Returns template page.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetPageName(): ?string
    {
        return '';
    }

    /**
     * Метод возвращает путь к файлу шаблона относительно корня сайта
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetFile(): ?string
    {
        return '';
    }

    /**
     * Метод возвращает путь к папке шаблона относительно корня сайта, если шаблон лежит в папке. Если шаблон представляет собой самостоятельный файл, то метод возвращает пустую строку.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetFolder(): ?string
    {
        return '';
    }

    /**
     * Метод возвращает шаблон сайта, в котором лежит шаблон компонента. Если это системный шаблон компонента (т.е. лежит в папке компонента), то возвращается пустая строка.
     *
     * Requires Init call before usage.
     *
     * @return null|string
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function GetSiteTemplate(): ?string
    {
        return '';
    }

    /**
     * Returns true if template belongs to another template of an complex component.
     *
     * Requires Init call before usage.
     *
     * @return null|boolean
     *
     * @see CBitrixComponentTemplate::Init
     */
    public function IsInTheme(): ?boolean
    {
        return false;
    }

    /**
     * Sets template language identifier.
     *
     * @param string $languageId
     *
     * @return void
     */
    public function setLanguageId($languageId): void
    { }

    /**
     * Returns template language.
     *
     * @return string
     *
     * @see CBitrixcomponentTemplate::setLanguageId
     */
    public function getLanguageId()
    {
        return '';
    }

    /**
     * Returns data to be stored in the component cache.
     *
     * Requires Init call before usage.
     *
     * @return null|array
     *
     * @see CBitrixComponentTemplate::Init
     * @see CBitrixComponentTemplate::ApplyCachedData
     */
    public function GetCachedData(): ?array
    {
        return [];
    }

    /**
     * Performs actions on cached hit.
     *
     * @param array $arData
     *
     * @return void
     * @see CBitrixComponentTemplate::GetCachedData
     */
    public function ApplyCachedData(array $arData): void
    { }

    /**
     * Called automatically on first usage of related functions.
     *
     * @param array $arTemplateEngines Array of engines to add.
     *
     * @return void
     */
    public function InitTemplateEngines(array $arTemplateEngines = []): void
    { }

    /**
     * Have to be called before any template usage.
     * Returns true on success.
     *
     * @param CBitrixComponent $component Parent component.
     * @param boolean|string $siteTemplate Site template name.
     * @param string $customTemplatePath Additional path to look for template in.
     *
     * @return boolean
     */
    public function Init(CBitrixComponent &$component, $siteTemplate = false, string $customTemplatePath = ""): bool
    {
        return false;
    }

    /**
     * Checks the template name for correctness.
     * Letters, digits, minus, underscore and dots are allowed.
     *
     * @param string $name Name of the template.
     *
     * @return boolean
     */
    public static function CheckName(string $name): bool
    {
        return false;
    }

    /**
     * Search file by its path and name without extention.
     *
     * @param string $path Directory.
     * @param string $fileName File name (without extention).
     *
     * @return false|string
     */
    public function __SearchTemplateFile(string $path, string $fileName)
    { }

    /**
     * Search template by its name in various locations.
     * <ol>
     * <li>/local/templates/&lt;site template&gt;/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/local/templates/.default/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/local/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/local/templates/&lt;site template&gt;/components/&lt;component path&gt;/
     * <li>/local/templates/.default/components/&lt;component path&gt;/
     * <li>/local/components/&lt;component path&gt;/
     * <li>/&lt;BX_PERSONAL_ROOT&gt;/templates/&lt;site template&gt;/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/&lt;BX_PERSONAL_ROOT&gt;/templates/.default/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/bitrix/components/&lt;parent template&gt;/&lt;component path&gt;/
     * <li>/&lt;BX_PERSONAL_ROOT&gt;/templates/&lt;site template&gt;/components/&lt;component path&gt;/
     * <li>/&lt;BX_PERSONAL_ROOT&gt;/templates/.default/components/&lt;component path&gt;/
     * <li>/bitrix/components/&lt;component path&gt;/
     * </ol>
     *
     * @param string $customTemplatePath
     *
     * @return false|string
     */
    public function __SearchTemplate(string $customTemplatePath = "")
    { }

    /**
     * Executes template.php via include function.
     *
     * Requires Init call before usage.
     *
     * @param array &$arResult Result of the component calculations.
     * @param array &$arParams Parameters of the component call.
     * @param string $parentTemplateFolder Parent template.
     *
     * @return false|void
     * @throws \Bitrix\Main\NotSupportedException
     * @see CBitrixComponentTemplate::Init
     */
    public function __IncludePHPTemplate(array &$arResult, array &$arParams, string $parentTemplateFolder = "")
    { }

    /**
     * Executes template using appropriate template engine.
     *
     * Requires Init call before usage.
     * @param array &$arResult
     *
     * @return false|void
     * @see CBitrixComponentTemplate::Init
     */
    public function IncludeTemplate(array &$arResult)
    { }


    /**
     * Includes template language file.
     *
     * @param string $relativePath
     * @param false|string $lang
     * @param boolean $return
     *
     * @return array
     */
    public function IncludeLangFile(string $relativePath = "", $lang = false, bool $return = false): array
    {
        return [];
    }

    /**
     * Begins special output which will be showed by $APPLICATION->ShowViewContent.
     *
     * @param string $target Code name of the area.
     * @param integer $pos Sort index.
     *
     * @return void
     * @see CMain::ShowViewContent
     * @see CBitrixcomponentTemplate::EndViewTarget
     */
    public function SetViewTarget(string $target, int $pos = 500): void
    { }

    /**
     * Ends special output which will be showed by $APPLICATION->ShowViewContent.
     *
     * @return void
     * @see CMain::ShowViewContent
     * @see CBitrixcomponentTemplate::SetViewTarget
     */
    public function EndViewTarget(): void
    { }

    /**
     * Shows menu with edit action in edit mode.
     * <code>
     * $this->AddEditAction(
     * 	'USER'.$arUser['ID'],
     * 	$arUser['EDIT_LINK'],
     * 	GetMessage('INTR_ISP_EDIT_USER'),
     * 	array(
     * 		'WINDOW' => array("width"=>780, "height"=>500), // popup params
     * 		'ICON' => 'bx-context-toolbar-edit-icon' // icon css
     * 		'SRC' => '/bitrix/images/myicon.gif' // icon image
     * 	)
     * );
     * </code>
     *
     * @param string $entryId Entry identifier. prefix like 'USER' needed only in case when template has two or more lists of different editable entities.
     * @param string $editLink Edit form link, Should be set in a component. Will be opened in js popup.
     * @param false|string $editTitle Button caption.
     * @param array $arParams Additional parameters.
     *
     * @return void
     * @see CBitrixcomponentTemplate::GetEditAreaId
     */
    public function AddEditAction(string $entryId, string $editLink, $editTitle = false, array $arParams = []): void
    { }

    /**
     * Shows menu with delete action in edit mode.
     * <ul>
     * $arParams['CONFIRM'] = false - disable confirm;
     * $arParams['CONFIRM'] = 'Text' - confirm with custom text;
     * no $arParams['CONFIRM'] at all - confirm with default text
     * </ul>
     *
     * @param string $entryId Entry identifier. prefix like 'USER' needed only in case when template has two or more lists of different editable entities.
     * @param string $deleteLink Delete action link, Should be set in a component.
     * @param false|string $deleteTitle Button caption.
     * @param array $arParams Additional parameters.
     *
     * @return void
     * @see CBitrixcomponentTemplate::GetEditAreaId
     */
    public function AddDeleteAction(string $entryId, string $deleteLink, $deleteTitle = false, array $arParams = []): void
    { }

    /**
     * Returns identifier to mark an html element as a container for highlight.
     *
     * <code>
     * &lt;tr id="&lt;?=$this-&gt;GetEditAreaId('USER'.$arUser['ID']);?&gt;"&gt;
     * </code>
     *
     * @param $entryId
     *
     * @return string
     * @see CBitrixcomponentTemplate::AddEditAction
     */
    public function GetEditAreaId($entryId): string
    {
        return '';
    }

    /**
     * Function returns next pseudo random value.
     *
     * @param int $length
     *
     * @return string
     * @see \Bitrix\Main\Type\RandomSequence::randString
     */
    public function randString(int $length = 6): string
    {
        return '';
    }

    /**
     * Marks a template as capable of composite mode.
     *
     * @param bool $mode
     *
     * @return void
     */
    public function setFrameMode(bool $mode): void
    { }

    /**
     * Returns frame mode
     * @return bool
     */
    public function getFrameMode(): bool
    {
        return false;
    }

	/**
	 * Returns new frame helper object to work with composite frame.
	 *
	 * <code>
	 * $frame = $this->createFrame()->begin("");
	 * echo "10@".(time()+15);
	 * $frame->end();
	 * </code>
	 *
	 * @param string $id
	 * @param bool $autoContainer
	 *
	 * @return Bitrix\Main\Composite\BufferArea
	 * @see Bitrix\Main\Composite\BufferArea
	 */
    public function createFrame(?string $id = null, bool $autoContainer = true): Bitrix\Main\Composite\BufferArea
    {
        return new Bitrix\Main\Composite\BufferArea($id, $autoContainer);
    }

    /**
     * Метод для подключения стороннего css.
     * Supports caching.
     *
     * @param string $cssPath Path to css file.
     *
     * @return void
     * @see CMain::SetAdditionalCSS
     */
    public function addExternalCss(string $cssPath): void
    { }

    /**
     * Метод для подключения стороннего JS.
     * Supports caching.
     *
     * @param string $jsPath Path to js file.
     *
     * @return void
     * @see CMain::AddHeadScript
     */
    public function addExternalJs(string $jsPath): void
    { }

    /**
     * Метод возвращает ссылку на экземпляр класса CBitrixComponent.
     * @return CBitrixComponent
     */
    public function getComponent(): CBitrixComponent
    {
        return new CBitrixComponent;
    }
}
