<?php

namespace Bitrix\Iblock\Component;

/**
 * Base - базовый класс поддержки компонентов.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/index.php
 */
abstract class Base extends \CBitrixComponent
{
    /**
     * Конструктор класса Base.
     *
     * @param \CBitrixComponent|null $component Объект компонента (если имеется).
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/__construct.php
     */
    public function __construct(?\CBitrixComponent $component = null): void
    { }

    /**
     * Возвращает название текущего действия.
     *
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/getaction.php
     */
    public function getAction(): string
    {
        return '';
    }

    /**
     * Action setter.
     *
     * @param string $action Action code.
     * @return void
     */
    protected function setAction(string $action): void
    { }

    /**
     * Return true if errors exist.
     *
     * @return boolean
     */
    protected function hasErrors(): bool
    {
        return false;
    }

    /**
     * Errors processing depending on error codes.
     *
     * @return boolean
     */
    protected function processErrors(): bool
    {
        return false;
    }

    /**
     * Cache usage setter. Enable it to ignore cache.
     *
     * @param boolean $state Cache usage mode.
     * @return $this
     */
    protected function setCacheUsage(bool $state): self
    {
        return self;
    }

    /**
     * Проверяет, отключен ли кеш.
     *
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/iscachedisabled.php
     */
    public function isCacheDisabled(): bool
    {
        return false;
    }

    /**
     * Extended mode setter.
     * Enabled - adds result_modifier.php template logic in component class.
     * In both cases(true or false) result_modifier.php will be included.
     *
     * @param boolean $state New extended mode.
     * @return $this
     */
    protected function setExtendedMode($state): self
    {
        return self;
    }

    /**
     * Проверяет включен ли расширенный режим.
     *
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/isextendedmode.php
     */
    public function isExtendedMode(): bool
    {
        return false;
    }

    /**
     * Enable/disable fill old keys in result data and use of outdated settings. Strict use only for catalog.element, .section, .top, etc.
     *
     * @param boolean $state Enable/disable state.
     * @return void
     */
    protected function setCompatibleMode(bool $state): void
    { }

    /**
     * Проверяет включен ли режим совместимости, т.е. возвращает статус заполнения результирующего массива устаревшими ключами.
     * Для новых компонентов смысла не имеет.
     *
     * @return boolean
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/isenablecompatible.php
     */
    public function isEnableCompatible(): bool
    {
        return false;
    }

    /**
     * Возвращает путь к скрипту настроек с измененным постфиксным временем.
     *
     * @param string $componentPath Путь до компонента.
     * @param string $settingsName Название настройки.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/getsettingsscript.php
     */
    public static function getSettingsScript($componentPath, $settingsName): string
    {
        return '';
    }

    /**
     * Обрабатывает параметры компонента.
     *
     * @param array $params Массив со значениями необработанных параметров компонента.
     * @return mixed
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/onpreparecomponentparams.php
     */
    public function onPrepareComponentParams(array $params)
    { }

    /**
     * Check necessary modules for component.
     *
     * @return boolean
     */
    protected function checkModules(): bool
    {
        return false;
    }

    /**
     * Fill discount cache before price calculation.
     *
     * @return void
     */
    protected function initCatalogDiscountCache(): void
    { }

    /**
     * Clear discount cache.
     *
     * @return void
     */
    protected function clearCatalogDiscountCache(): void
    { }

    /**
     * Check the settings for the output price currency.
     *
     * @return void
     */
    protected function initCurrencyConvert(): void
    { }

    /**
     * Check offers iblock.
     *
     * @param integer $iblockId Iblock Id.
     * @return boolean
     */
    protected function offerIblockExist(int $iblockId): bool
    {
        return false;
    }


    /**
     * Load used iblocks info to component storage.
     *
     * @return void
     */
    protected function initCatalogInfo(): void
    { }

    /**
     * Undocumented function
     *
     * @param integer $productId
     * @return array|null
     */
    protected function getProductInfo(int $productId): ?array
    {
        return [];
    }

    /**
     * Load catalog prices in component storage.
     *
     * @return void
     */
    protected function initPrices(): void
    { }

    /**
     * Load catalog vats in component storage.
     *
     * @return void
     */
    protected function initVats(): void
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function initIblockPropertyFeatures(): void
    { }

    /**
     * Initialize and data process of iblock elements.
     *
     * @return void
     */
    protected function initElementList(): void
    { }

    /**
     * Return elements.
     *
     * @param \CIBlockResult $elementIterator Iterator.
     * @return mixed
     */
    abstract protected function getIblockElements(\CIBlockResult $elementIterator);

    /**
     * Sort elements by original position (in case when product ids used in GetList).
     *
     * @return void
     */
    protected function sortElementList(): void
    { }

    /**
     * Create link to elements for fast access.
     *
     * @return void
     */
    protected function makeElementLinks(): void
    { }

    /**
     * Return array of iblock element ids to show for "initialLoad" action.
     *
     * @return boolean|array
     */
    protected function getProductIds()
    {
        return false;
    }

    /**
     * Return array of iblock element ids to show for "bigDataLoad" action.
     *
     * @return array
     */
    protected function getBigDataProductIds(): array
    {
        return [];
    }

    /**
     * Return recommended best seller products ids.
     *
     * @param array $ids Products id.
     * @return array
     */
    protected function getBestSellersRecommendation(array $ids): array
    {
        return [];
    }

    /**
     * Return recommended most viewed products ids.
     *
     * @param array $ids Products id.
     * @return array
     */
    protected function getMostViewedRecommendation(array $ids): array
    {
        return [];
    }

    /**
     * Return random products ids.
     *
     * @param array $ids Products id.
     * @return array
     */
    protected function getRandomRecommendation(array $ids): array
    {
        return [];
    }

    /**
     * Filter correct product ids.
     *
     * @param array $ids Items ids.
     * @param array $filterIds Filtered ids.
     * @param boolean $useSectionFilter Check filter by section.
     * @return array
     */
    protected function filterByParams(array $ids, array $filterIds = [], bool $useSectionFilter = true): array
    {
        return [];
    }

    /**
     * Return section ID by CODE.
     *
     * @param string $sectionCode Iblock section code.
     * @return integer
     */
    protected function getSectionIdByCode($sectionCode = ''): int
    {
        return 0;
    }

    /**
     * Return section ID by element ID.
     *
     * @param integer $elementId Iblock element id.
     * @param string $elementCode Iblock element code.
     * @return integer
     */
    protected function getSectionIdByElement(int $elementId, string $elementCode = ''): int
    {
        return 0;
    }

    protected function filterIdBySection(
        array $elementIds,
        int $iblockId,
        int $sectionId,
        int $limit,
        int $depth = 0
    ): array {
        return [];
    }

    /**
     * Return random element ids to fill partially empty space in row when lack of big data elements.
     * Does not fill rows with no big data elements at all.
     *
     * @param array $ids
     * @return int
     */
    protected function getRecommendationLimit(array $ids): int
    {
        return 0;
    }

    /**
     * Undocumented function
     *
     * @param string $type
     * @return array
     */
    protected function getBigDataServiceRequestParams(string $type = ''): array
    {
        return [];
    }

    /**
     * Return best seller product ids.
     *
     * @return array
     */
    protected function getBestSellersProductIds(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function getBestSellersFilter(): array
    {
        return [];
    }

    /**
     * Return array of iblock element ids to show for "initialLoad" action.
     *
     * @return array
     */
    protected function getDeferredProductIds(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param array|boolean $productIds
     * @return boolean
     */
    protected function getProductIdMap($productIds): bool
    {
        return false;
    }

    /**
     * Возвращает массив, где ключами служат данные из массива, а значениями - либо id товара (если ключ - id торгового предложения), либо сам ключ (SKU_PRODUCT_ID => PRODUCT_ID).
     *
     * @param array $originalIds Входящий массив ID элементов инфоблоков.
     * @return array
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/getproductsmap.php
     */
    public static function getProductsMap(array $originalIds = []): array
    {
        return [];
    }

    /**
     * Return array map of iblock products.
     * 3 following cases to process $productIdMap:
     * + $productIdMap is array with ids - show elements with presented ids
     * + $productIdMap is empty array - nothing to show
     * + $productIdMap === false - show elements via filter(e.g. $arParams['IBLOCK_ID'],  arParams['ELEMENT_ID'])
     *
     * @return array
     */
    protected function getProductsSeparatedByIblock(): array
    {
        return [];
    }

    /**
     * Return default measure.
     *
     * @return array|null
     */
    protected function getDefaultMeasure(): ?array
    {
        return [];
    }

    /**
     * Return \CIBlockResult iterator for current iblock ID.
     *
     * @param integer $iblockId
     * @param array|integer $products
     * @return \CIBlockResult|integer
     */
    protected function getElementList(int $iblockId, $products)
    { }

    /**
     * Initialization of general query fields.
     *
     * @return void
     */
    protected function initQueryFields()
    { }

    /**
     * Return select fields to execute.
     *
     * @return array
     */
    protected function getSelect(): array
    {
        return [];
    }

    /**
     * Return filter fields to execute.
     *
     * @return array
     */
    protected function getFilter(): array
    {
        return [];
    }

    /**
     * Return sort fields to execute.
     *
     * @return array
     */
    protected function getSort(): array
    {
        return [];
    }

    /**
     * Prepare element getList parameters.
     *
     * @return void
     */
    protected function prepareElementQueryFields()
    { }


    /**
     * Prepare select, filter, order.
     *
     * @param array $select
     * @param array $filter
     * @param array $order
     * @return array
     */
    protected function prepareQueryFields(array $select, array $filter, array $order): array
    {
        return [];
    }

    /**
     * Return select product fields to execute.
     *
     * @param integer $iblockId
     * @param array $selectFields
     * @return array
     */
    protected function getProductSelect(int $iblockId, array $selectFields): array
    {
        return [];
    }

    /**
     * Returns product fields for iblock.
     *
     * @param integer $iblockId
     * @return array
     */
    protected function getProductFields(int $iblockId): array
    {
        return [];
    }

    /**
     * Convert old product selected fields to new.
     *
     * @param array $select
     * @return array
     */
    protected function convertSelect(array $select): array
    {
        return [];
    }

    /**
     * Convert old product filter keys to new.
     *
     * @param array $filter
     * @return array
     */
    protected function convertFilter(array $filter): array
    {
        return [];
    }

    /**
     * Convert old product order keys to new.
     *
     * @param array $order
     * @return array
     */
    protected function convertOrder(array $order): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param integer $iblockId
     * @return array
     */
    protected function getIblockSelectFields(int $iblockId): array
    {
        return [];
    }

    /**
     * Return parsed conditions array.
     *
     * @param array $condition
     * @param mixed $params
     * @return array
     */
    protected function parseCondition(array $condition, $params): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param array $condition
     * @param mixed $params
     * @return array
     */
    protected function parseConditionLevel(array $condition, $params): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param array $condition
     * @return string
     */
    protected function parseConditionName(array $condition): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param array $condition
     * @return string
     */
    protected function parseConditionOperator(array $condition): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param array $condition
     * @param string $name
     * @return string
     */
    protected function parseConditionValue(array $condition, string $name): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param array $result
     * @param array $condition
     * @param array $params
     * @return void
     */
    protected function parsePropertyCondition(array &$result, array $condition, $params): void
    { }

    /**
     * Process element data to set in $arResult.
     *
     * @param array &$element
     * @return void
     */
    protected function processElement(array &$element): void
    { }

    /**
     * Fill various common fields for element.
     *
     * @param array &$element Element data.
     * @return void
     */
    protected function modifyElementCommonData(array &$element)
    { }

    /**
     * Add Hermitage button links for element.
     *
     * @param array &$element Element data.
     * @return void
     */
    protected function setElementPanelButtons(array &$element)
    { }

    /**
     * Process element display properties by iblock parameters.
     *
     * @param integer $iblock Iblock ID.
     * @param array &$iblockElements Items.
     * @return void
     */
    protected function modifyDisplayProperties(int $iblock, array &$iblockElements)
    { }

    /**
     * Undocumented function
     *
     * @param integer $iblock
     * @param array $propertyCodes
     * @return array
     */
    protected function getPropertyList(int $iblock, array $propertyCodes): array
    {
        return [];
    }

    /**
     * Clear products data.
     *
     * @return void
     */
    protected function clearItems(): void
    { }

    /**
     * Load measure ratios for items.
     *
     * @param array $itemIds Items id list.
     *
     * @return void
     */
    protected function loadMeasureRatios(array $itemIds): void
    { }

    /**
     * Return default empty ratio (unexist in database).
     *
     * @return array
     */
    protected function getEmptyRatio(): array
    {
        return [];
    }

    /**
     * Init measure for items.
     *
     * @param array &$items Items list.
     * @return void
     */
    protected function initItemsMeasure(array &$items): void
    { }

    /**
     * Return measure ids for items.
     *
     * @param array $items Items data.
     * @return array
     */
    protected function getMeasureIds(array $items): array
    {
        return [];
    }

    /**
     * Load measures data.
     *
     * @param array $measureIds
     * @return void
     */
    protected function loadMeasures(array $measureIds)
    { }

    /**
     * Load prices for items.
     *
     * @param array $itemIds Item ids.
     * @return void
     */
    protected function loadPrices(array $itemIds)
    { }

    /**
     * Undocumented function
     *
     * @param array $items
     * @return void
     */
    protected function calculateItemPrices(array &$items): void
    { }

    /**
     * Undocumented function
     *
     * @param array $items
     * @return void
     */
    protected function transferItems(array &$items): void
    { }

    /**
     * Calculate price block (simple price, quantity range, etc).
     *
     * @param array $product            Product data.
     * @param array $priceBlock         Prices.
     * @param integer|float $ratio          Measure ratio value.
     * @param boolean $defaultBlock        Save result to old keys (PRICES, PRICE_MATRIX, MIN_PRICE).
     * @return array|null
     */
    protected function calculatePriceBlock(array $product, array $priceBlock, $ratio, bool $defaultBlock = false): ?array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param mixed $id
     * @return mixed
     */
    protected function searchItemSelectedRatioId($id)
    { }

    /**
     * Undocumented function
     *
     * @param mixed $id
     * @return void
     */
    protected function compactItemRatios($id)
    { }

    /**
     * Undocumented function
     *
     * @param array $range
     * @return mixed
     */
    protected function getQuantityRangeHash(array $range)
    { }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function getFullQuantityRange(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param mixed $id
     * @return mixed
     */
    protected function searchItemSelectedQuantityRangeHash($id)
    { }

    /**
     * Load URLs for different actions to storage.
     *
     * @return void
     */
    protected function initUrlTemplates(): void
    { }

    /**
     * Process element prices.
     *
     * @param array &$element Item data.
     * @return void
     */
    protected function modifyElementPrices(&$element): void
    { }

    /**
     * Load, calculate and fill data (prices, measures, discounts, deprecated fields) for simple products.
     *
     * @return void.
     */
    protected function processProducts(): void
    { }

    /**
     * Load, calculate and fill data (prices, measures, discounts, deprecated fields) for offers.
     * Link offers to products.
     *
     * @return void
     */
    protected function processOffers(): void
    { }

    /**
     * Return offers array for current iblock.
     *
     * @param integer $iblockId
     * @return array
     */
    protected function getIblockOffers(int $iblockId): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param integer $iblockId
     * @return array
     */
    protected function getOffersFilter(int $iblockId): array
    {
        return [];
    }

    /**
     * Return offers sort fields to execute.
     *
     * @return array
     */
    protected function getOffersSort(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param array $offers
     * @return void
     */
    protected function modifyOffers(array $offers): void
    { }

    abstract protected function chooseOffer(array $offers, int $iblockId);

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function initResultCache(): void
    { }

    protected function getCacheKeys(): array
    {
        return [];
    }

    /**
     * All iblock/section/element/offer initializations starts here.
     * If have no errors - result showed in $arResult.
     *
     * @return void
     */
    protected function processResultData(): void
    { }

    /**
     * Check for correct iblocks.
     *
     * @return void
     */
    protected function checkIblock(): void
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function prepareData(): void
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function filterPureOffers(): void
    { }

    /**
     * Set component data from storage to $arResult.
     *
     * @return void
     */
    protected function makeOutputResult(): void
    { }

    /**
     * Process of buy/add-to-basket/etc actions.
     *
     * @return void
     */
    protected function processLinkAction(): void
    { }

    /**
     * Undocumented function
     *
     * @param mixed $productId
     * @param integer $sectionId
     * @param string $sectionCode
     * @return array
     */
    protected function checkProductSection($productId, int $sectionId = 0, string $sectionCode = ''): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param mixed $productId
     * @param string $action
     * @return array
     */
    protected function addProductToBasket($productId, string $action): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param string $action
     * @return array
     */
    protected function getRewriteFields(string $action): array
    {
        return [];
    }

    /**
     * This method executes when "deferredLoad" action chosen.
     * Override getDeferredProductIds method to return needed product ids array.
     *
     * @return void
     */
    protected function deferredLoadAction(): void
    { }

    /**
     * This method executes when "bigDataLoad" action is chosen.
     *
     * @return void
     */
    protected function bigDataLoadAction(): void
    { }

    /**
     * Mark last usage of BigData.
     *
     * @return void
     */
    protected function initBigDataLastUsage(): void
    { }

    /**
     * This method executes when "initialLoad" action is chosen.
     *
     * @return void
     */
    protected function initialLoadAction(): void
    { }

    /**
     * Show cached component data or load if outdated.
     * If extended mode enabled - uses result_modifier.php logic in component (be careful not to duplicate it).
     *
     * @return void
     */
    protected function loadData(): void
    { }

    /**
     * Return component cache identifier.
     *
     * @return mixed
     */
    abstract protected function getAdditionalCacheId();

    /**
     * Return component cache path.
     *
     * @return mixed
     */
    abstract protected function getComponentCachePath();

    /**
     * Undocumented function
     *
     * @return array|boolean
     */
    public function getTemplateEmptyPreview()
    { }

    /**
     * Undocumented function
     *
     * @param array $items
     * @return void
     */
    protected function sliceItemsForSlider(array &$items): void
    { }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function getTemplateCurrencies(): array
    {
        return [];
    }

    /**
     * Отправляет ответ на AJAX-запрос.
     *
     * @param array $result Массив результирующих данных.
     * @return void
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/iblock/component/base/sendjsonanswer.php
     */
    public static function sendJsonAnswer(array $result = []): void
    { }

    /**
     * Action preparing to execute in doAction method with postfix "Action".
     * E.g. action "initialLoad" calls "initialLoadAction".
     *
     * @return string
     */
    protected function prepareAction(): string
    {
        return '';
    }

    /**
     * Action executor.
     *
     * @return void
     */
    protected function doAction(): void
    { }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function executeComponent(): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function applyTemplateModifications(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function prepareTemplateParams(): void
    { }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function getTemplateDefaultParams(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function checkTemplateTheme(): void
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function editTemplateData()
    { }

    /**
     * Undocumented function
     *
     * @param array $item
     * @param string $propertyCode
     * @return void
     */
    public static function checkEnlargedData(array &$item, string $propertyCode): void
    { }

    /**
     * Undocumented function
     *
     * @param array $item
     * @param integer $iblock
     * @param integer $limit
     * @param boolean $addDetailToSlider
     * @param array $default
     * @return void
     */
    protected function editTemplateProductSlider(
        array &$item,
        int $iblock,
        int $limit = 0,
        bool $addDetailToSlider = true,
        array $default = []
    ): void { }

    /**
     * Undocumented function
     *
     * @param array $item
     * @param integer $iblock
     * @param integer $limit
     * @param boolean $addDetailToSlider
     * @param array $default
     * @return void
     */
    protected function editTemplateOfferSlider(
        array &$item,
        int $iblock,
        int $limit = 0,
        bool $addDetailToSlider = true,
        array $default = []
    ): void { }

    /**
     * Undocumented function
     *
     * @param array $item
     * @return void
     */
    protected function editTemplateCatalogInfo(array &$item): void
    { }

    /**
     * Undocumented function
     *
     * @param string $code
     * @param array $offer
     * @param array $matrixFields
     * @param array $skuPropList
     * @return array
     */
    protected function getTemplatePropCell(string $code, array $offer, array &$matrixFields, array $skuPropList): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param integer $iblockId
     * @return integer|null
     */
    protected function getOffersIblockId(int $iblockId): ?int
    {
        return 0;
    }

    /**
     * Undocumented function
     *
     * @param integer $iblockId
     * @return void
     */
    protected function loadDisplayPropertyCodes(int $iblockId): void
    { }

    /**
     * Undocumented function
     *
     * @param integer $iblockId
     * @return void
     */
    protected function loadBasketPropertyCodes(int $iblockId): void
    { }

    /**
     * Undocumented function
     *
     * @param integer $iblockId
     * @return void
     */
    protected function loadOfferTreePropertyCodes(int $iblockId): void
    { }

    /**
     * Return true, if enable quantity trace and disable make out-of-stock items available for purchase.
     *
     * @param array $product Product data.
     * @return boolean
     */
    protected function isNeedCheckQuantity(array $product): bool
    {
        return false;
    }

    /**
     * Return user groups. Now worked only with current user.
     *
     * @return array
     */
    protected function getUserGroups(): array
    {
        return [];
    }

    /**
     * Return user groups string for cache id.
     *
     * @return string
     */
    protected function getUserGroupsCacheId(): string
    {
        return '';
    }

    /**
     * Filling deprecated fields of items for compatibility with old templates.
     * Strict use only for catalog.element, .section, .top, etc in compatible mode.
     *
     * @param array $items Product list.
     * @return void
     */
    protected function initCompatibleFields(array $items): void
    { }

    /**
     * Fill deprecated raw price data from database.
     * Strict use only for catalog.element, .section, .top, etc in compatible mode.
     *
     * @param integer $id Item id.
     * @param array $prices Price rows from database.
     * @return void
     */
    protected function fillCompatibleRawPriceFields(int $id, array $prices): void
    { }

    /**
     * Return deprecated field value for item.
     * Strict use only for catalog.element, .section, .top, etc in compatible mode.
     *
     * @param integer $id Item id.
     * @param string $field Field name.
     * @return null|mixed
     */
    protected function getCompatibleFieldValue(int $id, string $field)
    { }

    /**
     * Check quantity range for emulate CATALOG_SHOP_QUANTITY_* filter.
     * Strict use only for catalog.element, .section, .top, etc in compatible mode.
     *
     * @param array $row Price row from database.
     * @return boolean
     */
    protected function checkQuantityRange(array $row): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function getEmptyPriceMatrix(): array
    {
        return [];
    }

    /**
     * Returns old product keys.
     *
     * @return array
     */
    protected function getCompatibleProductFields(): array
    {
        return [];
    }
}
