<?php

namespace Bitrix\Iblock\Component;


abstract class ElementList extends Base
{

    protected $navigation = false;
    protected $pagerParameters = array();

    /**
     * Multi iblock mode setter.
     * Enable it if you use data from different iblocks.
     *
     * @param boolean $state
     * @return $this
     */
    protected function setMultiIblockMode(bool $state): self
    {
        return $this;
    }

    /**
     * Return if multi iblock mode enabled.
     *
     * @return boolean
     */
    public function isMultiIblockMode(): bool
    {
        return false;
    }

    /**
     * Return if pagination mode enabled.
     *
     * @return boolean
     */
    public function isPaginationMode(): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @param array $params
     * @param array $orderRow
     * @param array $default
     * @return array
     */
    protected function prepareElementSortRow(array $params, array $orderRow, array $default): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param array $variants
     * @param boolean $isBigData
     * @return integer
     */
    protected static function predictElementCountByVariants(array $variants, bool $isBigData = false): int
    {
        return 0;
    }

    /**
     * Undocumented function
     *
     * @param array $params
     * @return void
     */
    protected function getPaginationParams(array &$params): void
    { }

    /**
     * Undocumented function
     *
     * @param array $params
     * @return void
     */
    protected function getSpecificIblockParams(array &$params): void
    { }

    /**
     * Process iblock component parameters for single iblock with disabled multi-iblock-mode.
     *
     * @param array $params
     * @return array
     */
    protected function getMultiIblockParams(array &$params): array
    {
        return [];
    }

    /**
     * Process iblock component parameters for single iblock with disabled multi-iblock-mode.
     *
     * @param $params
     * @return array
     */
    protected function getSingleIblockParams(array &$params): array
    {
        return [];
    }

    /**
     * some logic of \CComponentAjax to execute in component_epilog
     *
     * @param string $data
     * @return void
     */
    public function prepareLinks(string &$data): void
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function initSubQuery(): void
    { }

    /**
     * Undocumented function
     *
     * @param \CIBlockResult $elementIterator
     * @return void
     */
    protected function initNavString(\CIBlockResult $elementIterator): void
    { }

    /**
     * Undocumented function
     *
     * @param integer $iblockId
     * @return array
     */
    protected function getFilteredOffersByProperty(int $iblockId): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param array $level
     * @return array
     */
    protected function getOffersPropFilter(array $level): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function prepareDeferredParams(): void
    { }

    /**
     * Initialization of page navigation parameters.
     *
     * @return void
     */
    protected function initNavParams(): void
    { }

    /**
     * Undocumented function
     *
     * @param string $jsonString
     * @return array
     */
    protected static function parseJsonParameter(string $jsonString): array
    {
        return [];
    }

    /**
     * Process iblock template parameters for multi iblock mode.
     *
     * @param array $params
     */
    protected function getTemplateMultiIblockParams(array &$params): void
    { }

    /**
     * Process iblock template parameters for single iblock with disabled multi-iblock-mode.
     *
     * @param array $params
     */
    protected function getTemplateSingleIblockParams(array &$params): void
    { }

    public static function getDefaultVariantId(): int
    {
        return 0;
    }

    /**
     * Undocumented function
     *
     * @param integer $lineElementCount
     * @param integer $pageElementCount
     * @return array
     */
    public static function predictRowVariants(int $lineElementCount, int $pageElementCount): array
    {
        return [];
    }

    /**
     * Creating sequence of variants to show
     *
     * @return void
     */
    protected function sortItemsByTemplateVariants(): void
    { }

    /**
     * Return array of big data settings.
     *
     * @return array
     */
    protected function getBigDataInfo(): array
    {
        return [];
    }

    /**
     * getting positions of enlarged elements
     *
     * @return array
     */
    protected function getEnlargedIndexMap(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public static function getTemplateVariantsMap(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getTemplateSkuPropList(): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param array $items
     * @return void
     */
    protected function editTemplateItems(array &$items): void
    { }

    /**
     * Undocumented function
     *
     * @param array $item
     * @return void
     */
    protected function editTemplateProductPictures(array &$item): void
    { }

    /**
     * Undocumented function
     *
     * @param array $item
     * @return void
     */
    protected function editTemplateJsOffers(array &$item): void
    { }

    /**
     * Undocumented function
     *
     * @param array $item
     * @return void
     */
    protected function editTemplateOfferProps(array &$item): void
    { }
}
