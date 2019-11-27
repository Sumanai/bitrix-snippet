<?php

namespace Bitrix\Main\Text;

class HtmlConverter extends Converter
{
    /**
     * @inheritdoc
     */
    public function encode(string $text, string $textType = ''): string
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function decode(string $text, string $textType = ''): string
    {
        return '';
    }
}
