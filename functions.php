<?php

/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
the_content();
add_theme_support('menus');
// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

}
/* SHORTCODES */ 
add_shortcode('image_presentation', 'image_presentation_func');
// Je génère le html retourné par mon shortcode
function image_presentation_func($atts)
{
    //Je récupère les attributs mis sur le shortcode
    $atts = shortcode_atts(array(
        'src' => '',
        'titre' => 'Titre',
        'desc' => 'Description'
    ), $atts, 'image-presentation');

    //Je commence à récupéré le flux d'information
    ob_start();

    if ($atts['src'] != "") {
        ?>

        <div class="container-presentation">
            <img class="image-presentation" src="<?= $atts['src'] ?>" alt="<?= $atts['titre'] ?>">
            <div class="container-texte">
                <h2 class="titre"><?= $atts['titre'] ?></h2>
                <p class="description"><?= $atts['desc'] ?></p>
            </div>
        </div>

        <?php
    }

    //J'arrête de récupérer le flux d'information et le stock dans la fonction $output
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}

/* MENU  */
function theme_support() {
    
    register_nav_menus(
        array(
            'Pincipal-logged-in','Menu Header'=>_('Pincipal-logged-in'),
            'Mobile Menu','Menu Mobile'=>_('Pincipal-logged-in'),
            'Pincipal-logged-out','Menu Header2'=>_('Pincipal-logged-out'),
            'Mobile Menu','Menu Mobile 2'=>_('Pincipal-logged-out')

        ));
  }
  add_action( 'init', 'theme_support' );

/* HOOK */

function my_wp_nav_menu_args( $args = '' ) {
    if( is_user_logged_in() ) {
    // Logged in menu to display
    $args['menu'] = 'logged-in';
     
    } else {
    // Non-logged-in menu to display
    $args['menu'] = 'logged-out';
    }
    return $args;
    }
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );