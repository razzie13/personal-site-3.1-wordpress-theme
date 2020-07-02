<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package travelblog
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<!--<div class="bannergraphic">
			<img src="../images/bg202-edit.jpg">
		</div>-->
		
		<!-- BEGIN SITE HTML AND CSS  -- page.php -->
		
		<div id="bannergraphic" class="bannergraphic">
            <div id="sectionheader" class="sectionheader">
				<h1 class="h1sectionheader"><?php bloginfo( ‘name’ ); ?></h1>
            </div>
        </div>
    
        <section id="sectiondescription">
			<p id="sectiondescriptionparagraph">Here is a list of my Web Dev projects, starting with the ones most recently completed. Powered by <a href="https://wordpress.org/">WordPress</a></p>
        </section>
    
        <section id="sectiondata">
			
		<!-- END SITE HTML AND CSS (CONTINUES BELOW) -->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			
			<!-- BEGIN SITE HTML AND CSS  -->
			</section>
			<!-- END SITE HTML AND CSS  -->
		
		<?php get_sidebar(); ?>

	</main><!-- #main -->

<?php
get_footer();
