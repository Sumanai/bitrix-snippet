<?php

namespace Bitrix\Main\Text;

class EmptyConverter extends Converter
{
    /**
     * @inheritdoc
     */
    public function encode(string $text, string $textType = '')
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function decode(string $text, string $textType = '')
    {
        return '';
    }
}
