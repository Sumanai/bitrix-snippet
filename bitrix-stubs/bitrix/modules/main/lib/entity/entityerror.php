<?php

namespace Bitrix\Main\Entity;

class EntityError extends \Bitrix\Main\Error
{
    /**
     * {@inheritDoc}
     */
    public function __construct(string $message, $code = 'BX_ERROR'): void
    { }
}
