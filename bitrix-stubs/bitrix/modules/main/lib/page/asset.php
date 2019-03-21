<?php
namespace Bitrix\Main\Page;

class AssetMode
{
    const STANDARD = 1;
    const COMPOSITE = 2;
    const SPECIAL = 4;
    const ALL = 7;
}

class AssetLocation
{
    const BEFORE_CSS = 'BEFORE_CSS';
    const AFTER_CSS = 'AFTER_CSS';
    const AFTER_JS_KERNEL = 'AFTER_JS_KERNEL';
    const AFTER_JS = 'AFTER_JS';
}

class AssetShowTargetType
{
    const ALL = 0;
    const KERNEL = 1;
    const TEMPLATE_PAGE = 2;
    const BODY = 3;
}


class Asset
{
    /**
     * Singleton instance.
     *
     * @return Asset
     */
    public static function getInstance(): Asset
    {
        return new Asset();
    }

    /**
     * Set mode for current target.
     * @param int $mode Set current composite mode.
     * @return void
     */
    public function setMode($mode = AssetMode::STANDARD): void
    { }


    /**
     * Returns gzip enabled or not.
     * @return bool|null
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function gzipEnabled()
    { }

    /**
     * Start optimizing css
     * @return void
     */
    public function enableOptimizeCss(): void
    { }

    /**
     * Stop optimizing css
     * @return void
     */
    public function disableOptimizeCss(): void
    { }

    /**
     * Start optimizing js
     * @return void
     */
    public function enableOptimizeJs(): void
    { }

    /**
     * Stop optimizing js
     * @return void
     */
    public function disableOptimizeJs(): void
    { }

    /**
     * @param boolean $value Use xhtml html style.
     * @return void
     */
    public function setXhtml($value): void
    { }

    /**
     * @param integer $value Count of css files showed inline fore ie.
     * @deprecated
     * @return void
     */
    public function setMaxCss($value): void
    { }

    /**
     * Set ShowHeadString in page or not.
     * @param boolean $value Set ShowHeadSting is set on page.
     * @return void
     */
    public function setShowHeadString($value = true): void
    { }

    /**
     * Return true if ShowHeadString exist in page.
     * @return boolean
     */
    public function getShowHeadString(): bool
    {
        return false;
    }

    /**
     *  Set ShowHeadScript in page or not.
     * @param boolean $value Set ShowHeadScript is set on page.
     * @return void
     */
    public function setShowHeadScript($value = true): void
    { }

    /**
     * Return true if ShowHeadBodyScript exist in page.
     * @param boolean $value Set ShowHeadBodyScript is set on page.
     * @return void
     */
    public function setShowBodyScript($value = true): void
    { }

    /**
     * Set Ajax mode and restart instance
     * @return Asset
     */
    public function setAjax(): Asset
    {
        return new Asset();
    }

    /**
     * @return string - Return current set name
     */
    public function getTargetName(): string
    {
        return '';
    }

    /**
     * @return mixed Return current set
     */
    public function getTarget()
    { }

    /**
     * Temporary fix for update system. Need to delete later.
     * @param string $id Target ID.
     * @param integer $mode Composite Mode.
     * @return boolean
     */
    public function startSet(string $id = '', int $mode = AssetMode::ALL): bool
    {
        return false;
    }

    /**
     * Start new target for asset.
     * @param string $id Target ID.
     * @param integer $mode Composite mode.
     * @return boolean
     */
    public function startTarget(string $id = '', int $mode = AssetMode::ALL): bool
    {
        return false;
    }

    /**
     * Stop current target.
     * @param string $id Target ID.
     * @return bool
     */
    public function stopTarget(string $id = '')
    {
        return false;
    }

    /**
     * Return information about target assets.
     * @param string $id Asset ID.
     * @param mixed $mode Composite mode.
     * @return array
     */
    public function getAssetInfo(string $id, $mode): array
    {
        return [];
    }

    /**
     * Set composite mode for set.
     * @param string $id Target ID.
     * @return boolean
     */
    public function compositeTarget(string $id = ''): bool
    {
        return false;
    }


    /**
     * Return list of all targets on the page.
     * @param string $type Target type CSS or JS.
     * @return array Return set list with subsets.
     */
    public function getTargetList(string $type = 'CSS'): array
    {
        return [];
    }



    /**
     * Нестатический метод добавляет строку в секцию <head>…</head> сайта.
     * @param string $str Строка, которая будет добавлена.
     * @param bool $unique Check string for unique.
     * @param string $location Where string wheel be showed.
     * @param null $mode Composite mode.
     * @return boolean
     */
    public function addString(
        string $str,
        bool $unique = false,
        $location = AssetLocation::AFTER_JS_KERNEL,
        $mode = null
    ): bool {
        return false;
    }

    /**
     * Return strings assets.
     * @param string $location Location.
     * @return string
     */
    public function getStrings(string $location = AssetLocation::AFTER_JS_KERNEL): string
    {
        return '';
    }

    /**
     * Нестатический метод добавляет css в секцию <head>…</head> сайта.
     * @param string $path Путь относительно корня к файлу с CSS стилями.
     * @param boolean $additional Is additional file.
     * @return boolean
     */
    public function addCss(string $path, bool $additional = false): bool
    {
        return false;
    }


    /**
     * Нестатический метод добавляет js в секцию <head>…</head> сайта.
     * @param string $path Путь к скрипту от корня сайта.
     * @param boolean $additional Is additional file.
     * @return boolean
     */
    public function addJs(string $path, bool $additional = false): bool
    {
        return false;
    }

    /**
     * Replace path to includes in css.
     * @param string $content Content for replacing path.
     * @param string $path Path to correct.
     * @return mixed
     */
    public static function fixCssIncludes(string $content, string $path)
    { }

    /**
     * Group some js modules.
     * @param string $from Module name for packing.
     * @param string $to Module name for pack.
     * @return void
     */
    public function groupJs(string $from = '', string $to = ''): void
    { }

    /**
     * Group some css modules.
     * @param string $from Module name for packing.
     * @param string $to Module name for pack.
     * @return void
     */
    public function groupCss(string $from = '', string $to = ''): void
    { }

    /**
     * Move js kernel module to BODY.
     * @param string $module Module name.
     * @return void
     */
    public function moveJs(string $module = ''): void
    { }

    /**
     * Enables or disables the moving all of scripts to the body.
     * @param bool $flag True or False.
     * @return void
     */
    public function setJsToBody(bool $flag): void
    { }

    /**
     * Replace path to includes in line.
     * @param string $url Url of css files.
     * @param string $quote Quote.
     * @param string $path Path to css.
     * @return string replaced.
     */
    public static function replaceUrlCss(string $url, string $quote, string $path): string
    {
        return '';
    }

    /**
     * Remove from file path any parametrs.
     * @param string $src Path to asset file.
     * @return string path whithout ?xxx.
     */
    public static function getAssetPath(string $src): string
    {
        return '';
    }

    /**
     * Insert inline css.
     * @param string $css Content or file name.
     * @param mixed $label Additional info.
     * @param boolean $inline Show inline.
     * @return string
     */
    public function insertCss(string $css, $label = false, bool $inline = false): string
    {
        return '';
    }

    /**
     * insert inline js.
     * @param string $js Contet or file path.
     * @param mixed $label Additional info.
     * @param boolean $inline Show inline.
     * @return string
     */
    public function insertJs(string $js, $label = '', bool $inline = false): string
    {
        return '';
    }

    /**
     * Return css or page.
     * @param int $type Target type.
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public function getCss(int $type = AssetShowTargetType::ALL): string
    {
        return '';
    }

    /**
     * Return JS page assets.
     * @param int $type Target type.
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    function getJs(int $type = AssetShowTargetType::ALL): string
    {
        return '';
    }

    /**
     * Convert location for new format.
     * @param string $location AssetLocation.
     * @return AssetLocation
     */
    public static function getLocationByName(string $location)
    {
        return '';
    }

    /**
     * Add information about kernel module css.
     * @param string $module Module name.
     * @param array $css Css files.
     * @param array $settings Settings.
     * @return void
     */
    function addCssKernelInfo(string $module = '', array $css = [], array $settings = []): void
    { }

    /**
     * Add information about kernel js modules.
     * @param string $module Module name.
     * @param array $js Js files.
     * @param array $settings Settings.
     * @return void
     */
    function addJsKernelInfo(string $module = '', array $js = [], array $settings = []): void
    { }

    /**
     * Return information about file and check is it in kernel pack.
     * @param string $css File path.
     * @return array|bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    function isKernelCSS(string $css)
    { }

    /**
     * Return information about file and check is it in kernel pack.
     * @param string $js File path.
     * @return array|bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    function isKernelJS(string $js)
    { }

    /**
     * Sets unique mode for set.
     * @param string $setID Target ID.
     * @param string $uniqueID Unique type.
     * @return bool
     */
    public function setUnique(string $setID = '', string $uniqueID = ''): bool
    {
        return false;
    }

    /**
     * Get time for current asset.
     * @param string $file File path.
     * @return bool|string
     */
    public static function getAssetTime(string $file = '')
    { }

    /**
     * Write optimized css, js files or info file.
     * @param string $filePath Path for optimized css, js or info file.
     * @param string $content File contents.
     * @param bool $gzip For disabled gzip.
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    function write(string $filePath, string $content, bool $gzip = true): bool
    {
        return false;
    }
}
