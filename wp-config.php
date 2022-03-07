<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'charlescantin' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '8O-T}05*lJM]flm=Zt~nmDJhc8F3 ?nuz%/~lPt>(70Ai?dfjI|Pa[T$a]*o?LJE' );
define( 'SECURE_AUTH_KEY',  'Ta0ljIq&v-Y2ifr<q_c?NrFTi#DcnEcBh;?#0-4=cd0j{!hW2M|.)StE0<{;8tRc' );
define( 'LOGGED_IN_KEY',    'Og:Zz]{ ~QL-#5QHMgGFv]c#8;m3.}PM(@v ~*i^~&n9Pu8^:([8nImz1+yy^B3c' );
define( 'NONCE_KEY',        'n*ttwQKQ1n7;mlcLP0d0m<hfsb[3b]PoZZ~z-aRH/FV_lkg}1A?Hzfu=rSTW]]%8' );
define( 'AUTH_SALT',        '4Sf~r0Ml[$,oJHbVOF>]aC7itRl/AKy+({60}0;DSukpZ=#$a@654a ;Tc>&A(7B' );
define( 'SECURE_AUTH_SALT', '%3=-XB}X(fZn}CB9Y|z5`9TBdS8nu)}}`Cy#Su6([K^uVHeV#YiI6oYSApUN%U)s' );
define( 'LOGGED_IN_SALT',   'Y;zVQ_C1w.SH$vRo3j=NQCs{Ud#$SCV=H3t-a6iO<.7Bp#`|JHN2&}aX6C<wv.>j' );
define( 'NONCE_SALT',       'W5e/EJFWXZcpnHfe[5r@#`OSn9@/I+!|79SJh{@(j_2KbEN7]:Gfbz7q(6uRx0eg' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
