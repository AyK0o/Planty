<?php
/**
 * Template Name: template Page Accueil
 */

get_header();
?>

<main>
<?php
            get_template_part("template-parts/banniere-main");
    ?>
</main><!-- #site-content -->



<?php
the_content(); 
get_footer();
