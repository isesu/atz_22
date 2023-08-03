<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'atz11.ru');
define('WPLANG', 'ru_RU');

/** Имя пользователя MySQL */
define('DB_USER', 'atz11');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '7bUwYvK2gd');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xng hegN^TS}XsW!jOg#mn~ctvk~Rl9t+j@4VC3R!QJ;C3GzXTp<VD^A+uLW8ArZ');
define('SECURE_AUTH_KEY',  ')2$A%{3=;<PZ1`h?bOrgk|ZxTj)cqwvu:az,-E@1MZlQ^[O4M?/irJz?/Qx7&zQ,');
define('LOGGED_IN_KEY',    '-RhNPk>|WO[:QS)>qK?tXw>mh!Ag}Q3-C^PwKNG-QKek|Q62?H>@!X^]h)O(=A5P');
define('NONCE_KEY',        ';az`67NA6txnkt|f!kp~(c1Hm@[C+C%6AIP>A4zchD/MRVVEkYaY ;N*6D8QnoHO');
define('AUTH_SALT',        'i-+>=:hrsma-A5_sYp._8.OO|rhmff$S> JPhhq,tRkY|(U6w>2dd1/9YU?(i.dZ');
define('SECURE_AUTH_SALT', 'ETD/H2$s8_wB*|]0hp6JaX,e*)D5UrKYGZ90QT[]|xq[+Bm%X0uuS>r((|7`j fd');
define('LOGGED_IN_SALT',   'X>:TuV:QU{w.PYCTXLzM_eu}9Ly9]+1GQ=yJ}g}I;<k?Dy~KVlCP(3o?22-/A_mP');
define('NONCE_SALT',       'm8t@Fh&@J&/oZo/|Z5OYpr*R!kByr5W$|j9O})7q@*4 Lv0N9D*FF,~Yt0o2+RDY');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
