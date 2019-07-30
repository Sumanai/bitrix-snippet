<?php

namespace Bitrix\Main;

use Bitrix\Main\Type\ParameterDictionary;

/**
 * Environment - класс работы с окружением. Расширение класса \Main\Type\ParameterDictionary.
 */
class Environment extends ParameterDictionary
{
    /**
     * Нестатический метод вызывается при создании экземпляра класса и позволяет в нем произвести при создании объекта какие-то действия.
     *
     * @param array $arEnv
     */
    public function __construct(array $arEnv)
    { }
}
