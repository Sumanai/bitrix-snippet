<?php

namespace Bitrix\Main\Text;

/**
 * Undocumented class
 */
abstract class Converter
{
    const TEXT = 'text';
    const HTML = 'html';

    /**
     * Undocumented function
     *
     * @return HtmlConverter
     */
    public static function getHtmlConverter(): HtmlConverter
    {
        return new HtmlConverter();
    }

    /**
     * Undocumented function
     *
     * @return XmlConverter
     */
    public static function getXmlConverter(): XmlConverter
    {
        return new XmlConverter();
    }

    /**
     * Undocumented function
     *
     * @return EmptyConverter
     */
    public static function getEmptyConverter(): EmptyConverter
    {
        return new EmptyConverter();
    }

    /**
     * Undocumented function
     *
     * @param string $textType
     * @return string
     */
    public static function initTextType(string $textType): string
    {
        return '';
    }

    /**
     * Undocumented function
     *
     * @param string $text
     * @param string $textType
     * @return void
     */
    abstract public function encode($text, $textType = '');
    
    /**
     * Undocumented function
     *
     * @param string $text
     * @param string $textType
     * @return void
     */
    abstract public function decode($text, $textType = '');
}
