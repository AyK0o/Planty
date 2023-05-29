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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         've)BY9|ZEGtJNjM<RwHv+9XO8#kGz)<?e84:O~Rb(QdYG yG^Y:^+5dd42]tr)*Y' );
define( 'SECURE_AUTH_KEY',  '!YWyZvi715$B3pWP-<k}J;cNJ5co/;0[1<hu-p0ocNqW#=-[W?yq.zQ7taOU36d?' );
define( 'LOGGED_IN_KEY',    'A^[W$-t|nx29M6>+45Q/P6Zr E~z7E;Ki!#T^6v_xX053oqamx9#B8tXubll?%v)' );
define( 'NONCE_KEY',        '/.v-)J]=gwbsG.b2_sDmN4__z5cn*qyW!$W`)LJ^Yxo)Y3!Q=sO?x/X=-JPjMaHQ' );
define( 'AUTH_SALT',        'i#6-a%08c<7Li33SjD!#,`k_,Ibs0-|B>M[b#|@%q$h5X7h*20c)V$N Q=V:BB@`' );
define( 'SECURE_AUTH_SALT', '6$J uP>ny>w#RThe;Ug PsS,j8N !Vxq<#o{~U,k`tI&F23w,pY5GzVfto69+OF?' );
define( 'LOGGED_IN_SALT',   'L}44:|~a,hRO*k>BceSRMIsQt g|w^P#%`vX4WTE($)uxEQ|xw9X]h5ly~CsLb_<' );
define( 'NONCE_SALT',       'EP<x[YGYjN|b?|<x)Ypos+JC&)9d&nFB+ C9Fr|U@cOFtDjj-,y{=OXArY[4E7A2' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
