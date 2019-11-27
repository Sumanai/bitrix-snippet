<?php

namespace Bitrix\Main\Text;

/**
 * Diff - класс для визуального отображения изменений.
 * This Class implements the Difference Algorithm published in
 * "An O(ND) Difference Algorithm and its Variations" by Eugene Myers
 * Algorithmica Vol. 1 No. 2, 1986, p 251.
 *
 * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/diff/index.php
 */
class Diff
{
    /**
     * Получает две версии текста и возвращает текст, в котором разница между версиями визуально выделена.
     *
     * @param string $a Первая версия текста для сравнения.
     * @param string $b Вторая версия текста для сравнения.
     * @return string
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/diff/getdiffhtml.php
     */
    public function getDiffHtml(string $a, string $b): string
    {
        return '';
    }

    /**
     * Получает две версии массива и возвращает скрипт, который необходим для преобразования первого массива во второй.
     *
     * @param array $a Первый массив.
     * @param array $b Второй массив.
     * @return array Array of edit steps to transform array $a to array $b. Each step is an array with keys:
     * - startA - position in array $a
     * - startB - position in array $b
     * - deletedA - count of elements deleted from array $a
     * - insertedB - count of elements inserted from array $b.
     * @link https://dev.1c-bitrix.ru/api_d7/bitrix/main/text/diff/getdiffscript.php
     */
    public function getDiffScript(array $a, array $b): array
    {
        return [];
    }
}
