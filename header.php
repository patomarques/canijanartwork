<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package patomarques
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Halant:300,400" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/components-font-awesome/css/fontawesome.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/css/bundle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/css/style.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/sass/canijanartwork.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Preloader-->
<div id="loader">
    <div class="centrize">
        <div class="v-center">
            <div id="mask">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader-->