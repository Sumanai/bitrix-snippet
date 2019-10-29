<?php

namespace Bitrix\Iblock\Component;

/**
 * Class Filters
 * Provides various useful methods for sorted offers.
 *
 * @package Bitrix\Iblock\Component
 */
class Filters
{
    /**
     * Return offers id by filter.
     *
     * @param array $filter CIBlockElement::getList filter.
     * @return array
     */
    public static function getFilteredOffersId(array $filter): array
    {
        return [];
    }

    /**
     * Return offer id by filter group by product id.
     *
     * @param integer $iblockId Offers iblock id.
     * @param integer $propertyId Sku property id.
     * @param array $filter CIBlockElement::getList filter.
     * @return array
     */
    public static function getFilteredOffersByProduct(int $iblockId, int $propertyId, array $filter): array
    {
        return [];
    }
}
