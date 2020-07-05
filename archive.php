<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package travelblog
 */

get_header();
?>

<!--BEGIN CUSTOM SITE CODE -->

		<!--<div class="bannergraphic">
			<img src="../images/bg202-edit.jpg">
		</div>-->
		
		<!-- BEGIN SITE HTML AND CSS  -- archive.php -->
		
		<div id="bannergraphic" class="bannergraphic">
            <div id="sectionheader" class="sectionheader">
				<h1 class="h1sectionheader"><a href="https://gregrasmussen.com/projects"><?php bloginfo( ‘name’ ); ?></a></h1>
            </div>
        </div>
    

    
        <!--<section id="sectiondata">-->
			
		<!-- END SITE HTML AND CSS (CONTINUES BELOW) -->
			
			
	<main id="primary" class="site-main">
		
		<section id="sectiondata">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
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
			
		</section>
		
		<?php get_sidebar(); ?>

	</main><!-- #main -->

<?php

get_footer();
