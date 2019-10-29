<?php

namespace Bitrix\Iblock\Component;

/**
 * Class Tools
 * Provides various useful methods.
 *
 * @package Bitrix\Iblock\Component
 */
class Tools
{
    const IPROPERTY_ENTITY_ELEMENT = 'ELEMENT';
    const IPROPERTY_ENTITY_SECTION = 'SECTION';
    /**
     * Performs actions enabled by its parameters.
     *
     * @param string $message Message to show with bitrix:system.show_message component.
     * @param boolean $defineConstant If true then ERROR_404 constant defined.
     * @param boolean $setStatus If true sets http response status.
     * @param boolean $showPage If true then work area will be cleaned and /404.php will be included.
     * @param string $pageFile Alternative file to /404.php.
     * @return void
     */
    public static function process404(
        string $message = '',
        bool $defineConstant = true,
        bool $setStatus = true,
        bool $showPage = false,
        string $pageFile = ''
    ): void { }

    /**
     * Get image data for element fields.
     *
     * @param array &$item Result CIBlockResult::GetNext/Fetch or _CIBElement::GetFields.
     * @param array $keys Field keys.
     * @param string $entity Entity id.
     * @param string $ipropertyKey Key with seo data.
     * @return void
     */
    public static function getFieldImageData(array &$item, array $keys, string $entity, string $ipropertyKey = 'IPROPERTY_VALUES'): void
    { }

    /**
     * Get absolute path to image.
     *
     * @param array $image Image array from CFile::GetFileArray or Tools::getImageData.
     * @param boolean $safe Get encode path or unsafe.
     * @return string
     */
    public static function getImageSrc(array $image, bool $safe = true): string
    {
        return '';
    }
}
