<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'studeat' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '].*](6n&C2Ggoub>TlBscwj@);d[CSOw,}=`}][hnnILnkb +wMTn0$z;m7C~J(o' );
define( 'SECURE_AUTH_KEY',  '|I|i}8D94c)LBQn*GOtE^Z;^,t0zx4fna8jgyXPp}o^@,75kvC+xga0Q$}2YofSV' );
define( 'LOGGED_IN_KEY',    'L$p+&BOa!-Yx|& +nc)P,MIVA+!j3V.1KWtDvQ&^-j.~Tgz+#j(wF*w/hh9LGcrp' );
define( 'NONCE_KEY',        'a-+hLCaXGhh`wNFaXq6&@<Q5Bfiof/-{Dv<(w~xCEcSp]dJSP{lW1OD7&WMB3O!2' );
define( 'AUTH_SALT',        'n2]7QzSF(h|6X]_{ZtuK<%./8dJzs0eC)CH|x*o{(9X+@.O6b&MF-rXeju}Y[R$]' );
define( 'SECURE_AUTH_SALT', 'f:Kkg~ctw8,I!7-GHX @4S,`%&^ojxa:dSR]FkQ7#3=]KiEo>4-/FE0cc| <OD#_' );
define( 'LOGGED_IN_SALT',   '1J%=dFXJ89T|W7~e Tq-Vme[8-uW,}1I>}^)L=6!qNR1+]74=4i/F+uV_d!6tQ^f' );
define( 'NONCE_SALT',       '0|OAHh~J1FEh)$AR,{7405km}U( @q6&u.[[hO0Eex1dd]OU|G!7!`?:h7tMDlFE' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

