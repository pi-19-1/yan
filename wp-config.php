<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'pi' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'PI' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JOd/GnT-1Yom%I.j_J=tm?{2E@MDBua?g]7&/}+*}%`c+m}U_D3n7W^X}on|u>+-' );
define( 'SECURE_AUTH_KEY',  '$>.,s(_m(d{~P]}47uz+VD7}WQdgFj{J!dC;+DiA=6sckq!s+CwEgy!K8)J_r2I|' );
define( 'LOGGED_IN_KEY',    'Ex,L:[Sa`)h{9?)zIZqY_%+[Vv3|(nm@z]JQj:E/@fB[AHY*iWE6=(y$8(hfXJh&' );
define( 'NONCE_KEY',        'W~p1QhQ:fi`&f+?hFpA/i/i(zC[^%LT3F;aDZlwJ:MEsV5^Nm)SKFg{n=s] f>b/' );
define( 'AUTH_SALT',        'SmZ=JC+2k}[Wm^,S+y^/;^=Yy-S(FUzvsl/u+pfH6^PH:[LLQ<2t1h8leg&8%UtC' );
define( 'SECURE_AUTH_SALT', '*#1K562_&L{o_8AURb|vo$)2T`yyCg &j6~hmc)gDa9OPNDP eHR*O0Pj23yt%R&' );
define( 'LOGGED_IN_SALT',   'A5dlghX2Pu{xP8M@rv{3ZCkO(!&BOabJz-NB0$%B=A&7 <(Fa>LFNk]Az-E/3Cxx' );
define( 'NONCE_SALT',       '|3jRtQ;`H_j_~mo,%y))wBd8LXeXAq~Os17<D2l?WgKtVU7;jXa&}SWHI`iVjXJI' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
