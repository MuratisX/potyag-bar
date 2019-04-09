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
define('DB_NAME', 'wp-potyag');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '<}FE5)r#/9fR58iG+F7@Q_i!oZX=()fv+Z.)Kb3%:A2>l%xp57Y#>hqzW0Lk.;t_');
define('SECURE_AUTH_KEY',  'h<8`yZyhCM4~AJ^+V.,[hhyDgNu;l<4^~~Eit#[/SLL9Ds?ETH1,WP_IGEDOD@&&');
define('LOGGED_IN_KEY',    '/n-JeTR<fL*@G2s00tGS/,:Oh[x;TPw1q).>.uARkIDjM+R_#6%u7*S4GG>z)koB');
define('NONCE_KEY',        'XW=rW8VB0ZjvuiNzWkz^AwCx1/sqY%p*TKG6sLdR[.yW%F$>;x^/>{+k2O2dJi7y');
define('AUTH_SALT',        'xUuqIKx5uO:Y[QwL}+*`s*z2~HepXY{E-p*evyZd8`1$l&X6[vw.YV[t5TB,RO)<');
define('SECURE_AUTH_SALT', '<[-Dv15FFp2.J@0axoMxpmDkocL65a1=`dL`M9%^7fjy}|Ub&57R6;n Tal_U8E:');
define('LOGGED_IN_SALT',   'e*hoJOaeUcS!dR?QWoQT7LZ#nBF{eSBh&-]_2ATyEOfouXlQgx6*z9P0|n$e.C>1');
define('NONCE_SALT',       'C%i<cn>q1WlKRD,!@-B;yz{no)wtD~z,+EyZmt5x9iaO{A~ZQ]7uxPJ3rUS-Z?~L');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_xptg';

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
