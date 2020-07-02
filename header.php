<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travelblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../includes/style.php';?>
    <?php include '../includes/scripts.php';?>
    <?php include '../includes/title.php';?>
	<link rel="stylesheet" media="screen and (min-width: 801px)" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
	<link rel="stylesheet" media="screen and (max-width: 800px)" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style-mobile.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style-wp.css' ?>">

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'travelblog' ); ?></a>
	
	<!-- wordpress header -->

	<header>

		<?php include '../includes/menu.php';?>

	</header>