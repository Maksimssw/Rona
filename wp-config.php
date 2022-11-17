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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'rona' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '5pCY7*#RpT^7nn-<0u|lC`.`HPN#1Nu0<*BY^p.N_^Y4cu&KVV:5:5KAjJ(qC[KM' );
define( 'SECURE_AUTH_KEY',  '6,1LJoZk]#.eV^#eC#ZD6)L,b<*I_Dz~wa]1x4p47K=$k58x)(;~a> V5o1^r)nO' );
define( 'LOGGED_IN_KEY',    'CXZNaG$YR/A)HE]{o;S]&=Yai:=,?i!fwb&>Y{=qM}^N;9p.D.~KQ**YVo{Eukp;' );
define( 'NONCE_KEY',        '`LNP:}p`#g0}2UA@XFXjh>L`Q$9Ax4!+4gM|TuO<:P^F,]~Y2&<;m?Es:7< I>J]' );
define( 'AUTH_SALT',        'mQ`PFhvmnb.SlH_FD&ZB62n`w[phy*UNo3Nmd>4<oQSF|PK0]pRuGGYX,c%8uztd' );
define( 'SECURE_AUTH_SALT', 'mu2DiQM82ME}^#/u)4hL)K@XSjHx8nVhH&upe$/)4Lw~cFM*wFOH/sz.>kcJd1J[' );
define( 'LOGGED_IN_SALT',   '&Q?R>)E%0$l4>fj;?.j<,}W<:,Z+MZ4P@>QUj*t {+C#/0b;UqzwWOixUSH,3r$t' );
define( 'NONCE_SALT',       '?#T,_YVVVaq DK:A={<Y%RE)UmkNK|%Nn_{NTq*o8h4cCBlyhNy/}g2$T}Dk&?a/' );

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
