<?php

namespace Bitrix\Iblock\Component;

abstract class Element extends Base
{
    /**
     * Undocumented function
     *
     * @param mixed $params
     * @return void
     */
    protected function getIblockParams(&$params)
    { }

    /**
     * Check by ID if element is correct.
     *
     * @return boolean
     */
    protected function checkElementId(): bool
    {
        return false;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    protected function showWorkflowHistory(): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    protected function getSection()
    { }

    /**
     * Fill additional keys for component cache.
     *
     * @param array &$resultCacheKeys Cached result keys.
     * @return void
     */
    protected function initAdditionalCacheKeys(array &$resultCacheKeys)
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function initAdminIconsPanel(): void
    { }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function sendCounters(): void
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    protected function saveViewedProduct()
    { }

    /**
     * Undocumented function
     *
     * @return mixed
     */
    protected function initMetaData()
    { }

    /**
     * Undocumented function
     *
     * @param array $params
     * @return void
     */
    protected function getTemplateIblockParams(array &$params): void
    { }

    /**
     * Undocumented function
     *
     * @param array $params
     * @return void
     */
    protected function editTemplateOfferProps(array &$item): void
    { }

    /**
     * Undocumented function
     *
     * @param array $item
     * @return array
     */
    protected function editTemplateProductSets(array &$item): array
    {
        return [];
    }

    /**
     * Undocumented function
     *
     * @param array $item
     * @param array $offerSet
     * @return void
     */
    protected function editTemplateJsOffers(array &$item, array $offerSet): void
    { }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getTemplateSkuPropList(): array
    {
        return [];
    }

    protected function editTemplateItems(array &$item): void
    { }
}
