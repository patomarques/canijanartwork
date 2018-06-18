<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patomarques
 */

get_header();
?>

<section class="home-begin">
    <div class="element-flutuant">
        <img src="<?php echo get_template_directory_uri(); ?>/custom/img/fundo_sem_logo.png" alt="" class="element-img">
        <div class="logo">
        </div>
    </div>
</section>
<?php
//get_sidebar();
get_footer();
