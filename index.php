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
 * @package travelblog
 */

get_header();
?>

	<main id="primary" class="site-main">

		<main id="primary" class="site-main">

		<!-- BEGIN SITE HTML AND CSS  -- template-parts contact-page.php -->
		
		<div id="bannergraphic" class="bannergraphic">
            <div id="sectionheader" class="sectionheader">
				<h1 class="h1sectionheader"><a href="https://gregrasmussen.com/projects"><?php bloginfo( "name" ); ?></a></h1>
				
            </div>
        </div>

		<section id="sectiondescription">
			<p id="sectiondescriptionparagraph">Here is a list of my Web Dev projects, starting with the ones most recently completed. Powered by <a href="https://wordpress.org/">WordPress</a></p>
        </section>
    
        <section id="sectiondata">
			
		<!-- END SITE HTML AND CSS (CONTINUES BELOW) -->

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			
			<!-- BEGIN SITE HTML AND CSS  -->
			</section>
			<!-- END SITE HTML AND CSS  -->
		
	<?php get_sidebar(); ?>

	</main><!-- #main -->

		<?php

get_footer();
