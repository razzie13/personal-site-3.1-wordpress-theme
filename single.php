
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package travelblog
 */

get_header();
?>
	<!-- single.php -->
	<main id="primary" class="site-main">
		
		<!--<div class="bannergraphic">
			<img src="../images/bg202-edit.jpg">
		</div>-->
		
		<!-- BEGIN SITE HTML AND CSS (single.php) -->
		
		<div id="bannergraphic" class="bannergraphic">
            <div id="sectionheader" class="sectionheader">
				<h1 class="h1sectionheader"><a href="https://gregrasmussen.com/projects"><?php bloginfo( "name" ); ?></a></h1>
            </div>
        </div>
    
        <section id="sectiondescription">
			<p id="sectiondescriptionparagraph">Take a look at this project!</p>
        </section>
    
        <section id="sectiondata">
			
		<!-- END SITE HTML AND CSS (single.php CONTINUES BELOW) -->


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'travelblog' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'travelblog' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

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
	<!-- /single.php -->

<?php
get_footer();
