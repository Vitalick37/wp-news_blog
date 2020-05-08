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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpres_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'q19RZDRPPClhLNxy' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PQ.)<[wpq,)fPOs`-G>lH%_3xn0OaY/W`/6C&+2Y:lM1;C*^O8Y)FiSeKH-NU:}n' );
define( 'SECURE_AUTH_KEY',  'S:{+Tw*:aOs6(f]H|#py_:Lkf;a}Cg6]( ~@rd@7t>+$^X^R3w7SI`zLI[CSN*b/' );
define( 'LOGGED_IN_KEY',    '#`tcBbhv}4A/2sD:z*~XOWLn =KxSG?{.b 9KT&$ E?F=L6[p]m)9upeJL+(8_qN' );
define( 'NONCE_KEY',        '[wRx$3jX8hT+-%t9Sj;w}tetMH/g`mg!Ff/^4zM>mc@c#N#fxX{usol`Jh[6uQ]v' );
define( 'AUTH_SALT',        'dR^(ifgG;uRc`p`g0WqHUsh7{vYsBXqJsk~T~V$~a%6L4L?u!zTXiJF/RV)LS:@=' );
define( 'SECURE_AUTH_SALT', 'w[eAi0HM*mh{+8;k>u$w%2w&(DxW:XJg<TQo(lXO-~WZ_APiP3&&Rn!]YTlr(ZqV' );
define( 'LOGGED_IN_SALT',   'C+4H+~!Lbl(jAtP)5JG$[%GR=w4O.VpTYY`M$<LixE^TM5@0-~Y9|i!w6K;)$jK$' );
define( 'NONCE_SALT',       'KDu90&Itf23xu}tD|LGd#fOG[}F!sv;T(Kv)isr~fw-SF[LCzxr,_v)UBYe_w.SK' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
