<?php

/**
 * @var float START_EXEC_TIME Содержит время начала работы страницы в формате возвращаемом функцией getmicrotime.
 */
define('START_EXEC_TIME', 0.0);

/**
 * @var boolean B_PROLOG_INCLUDED Если подключена служебная часть пролога, то данная константа будет инициализирована значением "true". Как правило эту константу используют во включаемых файлах в целях безопасности, когда необходимо убедиться, что пролог подключен и все необходимые права проверены.
 */
define('B_PROLOG_INCLUDED', true);

/**
 * @var integer TAGGED_user_card_size Константа для регулирования тегированного кеша пользователей.
 */
define('TAGGED_user_card_size', 0);

/**
 * @var string LICENSE_KEY
 */
define('LICENSE_KEY', '');
