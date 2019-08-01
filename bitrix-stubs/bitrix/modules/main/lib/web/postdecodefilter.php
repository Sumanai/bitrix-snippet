<?php

namespace Bitrix\Main\Web;

use Bitrix\Main\Type;

/**
 * Класс декодирует данные в коллекции. Актуально при работе с коллекциями _POST.
 * 
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/web/postdecodefilter/index.php
 */
class PostDecodeFilter implements Type\IRequestFilter
{
    /**
     * Метод возвращает массив декодированных данных через getPost().
     * Выполняет функции метода CUtil::jSPostUnescape в старом ядре.
     * 
     * @param array $values Данные, которые подвергаются обработке.
     * @return array
     */
    public function filter(array $values): ?array
    { }
}
