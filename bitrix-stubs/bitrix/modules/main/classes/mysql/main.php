<?php

/**
 * CMain - главный класс страницы.
 * При создании каждой страницы создаётся глобальный объект этого класса с именем $APPLICATION.
 * @link https://dev.1c-bitrix.ru/api_help/main/reference/cmain
 */
class CMain extends CAllMain
{ }

/**
 * CSite - класс для работы с сайтами.
 * Аналог класса в новом ядре D7: Bitrix\Main\SiteTable.
 * @link https://dev.1c-bitrix.ru/api_help/main/reference/csite
 */
class CSite extends CAllSite
{ }

class CFilterQuery extends CAllFilterQuery
{ }

class CLang extends CSite
{ }
