<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'S;q2l(r2/0[Gb$qAh:-vATa AUiSBh_|s0I-)#aHn%h%D>LDeAj{WfBv7K`#xVxn');
define('SECURE_AUTH_KEY',  'zBS|u5`Gj&##JnscmR3XFjwnp/[/ u[W.yz_R}NqEPaF0<!+aC#hA&}iht&Yg276');
define('LOGGED_IN_KEY',    'Kak5@Ecb4*cvROils a-+,jkO(HFz~Q/FD9lKF}rtWQ*88yXnPn_@+>(;<k!x6Or');
define('NONCE_KEY',        '(U~|vNCNRo7bN-<Lmvnt4MlCQqdQ|XBR[Fra)U!x`6--^m{?3(-0ccMX.MJ*2sPE');
define('AUTH_SALT',        '3A*h6#u8}GGx=AJ5Zs[,A|`wqYg6)y5l.3x-eiDl3Q@cN8W_f70S[$}oHxHj6x46');
define('SECURE_AUTH_SALT', 'vMC5cKv#%YSbG-WX5(_r:(J&@%qKn7Yzt>(1*n/KQK>,n0-c7~S%-i#L:e$0o>Y&');
define('LOGGED_IN_SALT',   '2<2|*B|n9EysI{`r!E3C+bU{| |2/-u%HRKWbSrpcLZ|J<@~UNUvc(7?v@jzGz?u');
define('NONCE_SALT',       '@>M2+K%th>`0iZ$`.@}D]0-[vUz9+B`]r&-tXhjS;V_LSEZ*~8dJ}I%5$~CD9Q_V');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
