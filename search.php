<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package travelblog
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<!-- BEGIN SITE HTML AND CSS  -- search.php -->
		
		<div id="bannergraphic" class="bannergraphic">
            <div id="sectionheader" class="sectionheader">
				<h1 class="h1sectionheader"><a href="https://gregrasmussen.com/projects"><?php bloginfo( "name" ); ?></a></h1>
            </div>
        </div>
    
        <section id="sectiondescription">
			
			<header class="page-header page-header-search-result">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'travelblog' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
        </section>
		

    
        <section id="sectiondata">
			
		<div class="sectiondata-maindiv sectiondata"><div class="sectiondata-datadiv">
			

			
		 <!-- END SITE HTML AND CSS (CONTINUES BELOW) -->

		<?php if ( have_posts() ) : ?>
<!--


			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

		

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	
			
	</div>

	<?php get_sidebar(); ?>
	
	<div class="sectiondata-circle"><i class="fas fa-code"></i></div></div>

	</main><!-- #main -->
			
			

<?php
get_footer();
