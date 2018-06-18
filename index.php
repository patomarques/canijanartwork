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

    <div class="home-begin element-flutuant">
        <div class="element-image">
            <img src="<?php echo get_template_directory_uri(); ?>/custom/img/canijan-bg.png" alt="" class="">

            <div class="logo-home">
                <img src="<?php echo get_template_directory_uri(); ?>/custom/img/logo-pantone-red.png" alt="">
            </div>
            <ul class="menu-list">
                <li>
                    <a href="<?php echo get_site_url(); ?>">Canijan Oliveira</a>
                </li>
                <li>
                    <a href="">Trabalhos</a>
                    <a href="">Works</a>
                </li>
                <li>
                    <a href="">Contato</a>
                    <a href="">Contact</a>
                </li>
                <li>
                    <a href="">Orçamentos</a>
                    <a href="">Requests</a>
                </li>
            </ul>

            <div class="footer-text">
                <p>
                    <?= date("Y") ?> &reg <a href="<?php echo get_site_url(); ?>" class="link-white">Canijan
                        Oliveira</a>, tattoo artist.
                </p>
            </div>

        </div>
    </div>
<?php
get_footer();
