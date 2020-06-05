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
define( 'DB_NAME', 'anipat_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin_anipat' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'GNNeSVjEYlRC9Bb9' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

define('WPCF7_AUTOP', false);

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cEN|AMH9w#c=E$SMlW]E~ a9RpKeB9frTO9=Ir.<;PqZK<XubaSU|w].JNl(9B7t' );
define( 'SECURE_AUTH_KEY',  '<D0F9uFlRb>uy,WMK4(W*[/;}T$A,BX9D08~?O2NB/q((7JzN7v[B,2%MEi~f*s`' );
define( 'LOGGED_IN_KEY',    'f+%s3e|+@X-=(;gZn]l>`@D6.qb1a%8B}Kwe?vP`Gx!vD0oCphvrK( ygMI`ZBEy' );
define( 'NONCE_KEY',        'GO{qm+eSuLBN~mA >|^uH^?o?9HWEDkl13vcJ|;w6#<BAtP~:e5N;%+ FE&ia563' );
define( 'AUTH_SALT',        ')Z>4=,E;a?JL>RF^pXJ8k_Z;HdZnL^vBgoZSpyF)h@|g]FyzCaw$%7?TGYcuE&g^' );
define( 'SECURE_AUTH_SALT', '[WHl+.W<4^7rk{7(rV+(7-oQoLg;W8RH8FES$^x;Fi_+]4<yD7trIcZ4TTUf^xk7' );
define( 'LOGGED_IN_SALT',   'F*b!u3MRjy-/w_m/oz6)H1)_Yk,q)stoc7>n_xS6G&],,W5a=Bx1X=p]^E|2%R|s' );
define( 'NONCE_SALT',       'i1(q#+(bxjr$IQ=)CrR%7kSj~3 .^f[~(p$TTSftkvRX6Oy_QSdymj6Hjwkyxl91' );

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
