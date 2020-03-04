<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'woocommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(3?~F#+7WR=7ejkNyMh89F~CDZjB}vQdNG!zQ6U({pU5c#p6R9B ~1EfH}A{0M&&' );
define( 'SECURE_AUTH_KEY',  'a};2Zw6^2B&{A3;dq4g[*|TXv|deWDlBMzh[i[r^?^ Kia@O1!2Zjsb:Cs:eM^k]' );
define( 'LOGGED_IN_KEY',    'R}M3{rtj[;3DwpkHPx ;Vs_aH;>f%%#/fCD$%!YNZ2G#EFv#It)8Y+3+rs3D)orD' );
define( 'NONCE_KEY',        'c:(DrewtK8@;d56No(!@J@40f/Wd$wYW7Fjv.FYz <Z3+.wE,h[Av{=I/BUpnuSf' );
define( 'AUTH_SALT',        'a^F|qD70AhLm?Dh-bhAjM>S<V:iBoiwE;r{+Ol9fxaO)d_.UOx3G8l)f7Jj^u:]9' );
define( 'SECURE_AUTH_SALT', 'QxKW`~ne_SIWKLMYu #NOT&jVg@*0eEsk$sj{d&R7AF8F<4a {]vo>1{l(2>f{?+' );
define( 'LOGGED_IN_SALT',   '_cJnE$X+UF+$[vC;XDW%Paz:{.{z&][%Tfmy8>@)`YcGuc7[^&<J1bC_>q?Cec`i' );
define( 'NONCE_SALT',       '*V(/>+}4bfE}zAq{E53@(]/5U/o6`O]Pp!*u`Z3]5xO#LbX*z~5mA#{!q+ZB9R9C' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
