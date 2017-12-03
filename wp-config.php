<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'digitalcook_encuentrame');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'x{#M1F)De>H;BSTG~`j4fH ^ ],:QQK:8K4a2=_jjl:IL}5YHCR~e3[ s$RRZPx<');
define('SECURE_AUTH_KEY', '5M4[}(X-UruU1re/N#Xg({p2s@}^9V=.)U,0Kr3WNY0nZ0&Q}4*=HFVNiA*A|aaJ');
define('LOGGED_IN_KEY', ' pKlqqFmgDPiRzd^/+ca!s-bdF*[_wDah_E?h[LfE_vo~nUCSjRY4we4gp]+jzhq');
define('NONCE_KEY', 'Ahk@5TDm*zf.WP9`qZ#{n@urA~G%]P3 c^ZI,hG=HKX$5=a9#Bg0d0sA~~=E=D)8');
define('AUTH_SALT', 'volsB-#`f?Ey@#mZ~%GX:1/ljtA}hE*5t#zzZ;zIj*ZdoT7.[09CO2|/p0$b$66m');
define('SECURE_AUTH_SALT', '{?fMLkd[%7nMY$himWX5f(&fDJ{Q~@9EoJw#90rcRVy8zP(p(/vvtA|tf99u0] p');
define('LOGGED_IN_SALT', '/F%yVde]c>mrW+:T!wM!KfZ:-n6km!<5B]xy&+jrJ9Z=H5O*4$ih|X,1rx`E!$qI');
define('NONCE_SALT', 'qOk$h$f?za|FP`$%)np3]z>9S%vZg@S@{!>9XCj!da{v_OI]qLAO80zLE$sIq~Ir');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

