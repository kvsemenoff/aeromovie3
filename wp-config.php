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
define('DB_NAME', 'aeromovie3');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '1o}K|TnKk|F#`CM)+0~6NrT4)I! wp+ 4#=U|waQIs]?%Z<2S>[-<Xrp4/|Xj50B');
define('SECURE_AUTH_KEY',  'Fu,>X>}]F)R6NW%#&ig0*5%aH>Q~S`|P:gq7Vp.Ex=-lQz;L(* >_Z6pO+xKuGO|');
define('LOGGED_IN_KEY',    'Pp[E&1+Mbu@I-m:}gs9P7aUP5yD&`K+H9J <_ctB36)Kq;z0S#l2FWr*`0.Tq/cv');
define('NONCE_KEY',        '2+n(-5FKDrz1PZaxcP[<N{G$P]Ld*Spx-QpvbG#5RB64oa(U-_e[<SFH`>>X$E8A');
define('AUTH_SALT',        ',HBeqmg]:<cB-^,fLoWnl*0o{@LqUYDd~R*9uYv WOQ_)+(3+)M/^wn.RX+D{h$q');
define('SECURE_AUTH_SALT', 'Gh.5;,Ve!8X8rRvp&|w4vG,coYZkY@|2:!./eZSw%zx T/S(*P ej2zK1OvLwXw8');
define('LOGGED_IN_SALT',   'XR<kWq22s7qST%+90sy)*TJP#Ap%qH}2B)|Tb-^bG&>c_U|P^Wox#@oWAg@Er.uB');
define('NONCE_SALT',       'p8+R>xc/$a+j-{T/Iqquc2aI}+*CVs9-]oqxb Vzt#-Sm|&MV6.Yx=^84@t+VLi)');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
