<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package travelblog
 */

?>

<!--<div class="bannergraphic">
			<img src="../images/bg202-edit.jpg">
		</div>-->
		
		<!-- BEGIN SITE HTML AND CSS  -- template-parts contact-page.php -->
		
		<div id="bannergraphic" class="bannergraphic">
            <div id="sectionheader" class="sectionheader">
                <h1 id="h1sectionheader"><?php bloginfo( ‘name’ ); ?></h1>
            </div>
        </div>
    
        <section id="sectiondescription">
			<p id="sectiondescriptionparagraph">Here is a list of my Web Dev projects, starting with the ones most recently completed. Powered by <a href="https://wordpress.org/">WordPress</a></p>
        </section>
    
        <section id="sectiondata">
			
		<!-- END SITE HTML AND CSS (CONTINUES BELOW) -->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php travelblog_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travelblog' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'travelblog' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
			
			
			<!-- BEGIN SITE HTML AND CSS  -->
			</section>
			<!-- END SITE HTML AND CSS  -->
