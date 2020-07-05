<!-- sidebar.php -->
<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travelblog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<section id="secondary-widget-area">
	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
</section>

<script>document.getElementById('h1sectionheader').innerText = <?php bloginfo( ‘name’ ); ?></script>

<!-- /sidebar.php -->