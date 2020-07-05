
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package travelblog
 */

 // ADVANCED CUSTOM FIELDS
 $project_image = get_field('project_image');
 $project_link	= get_field('project_link');
 $tech_icon	= get_field('tech_icon');
 $github_repository_link	= get_field('github_repository_link');
?>

<!-- content.php -->

<div class="sectiondata-maindiv sectiondata"><div class="sectiondata-datadiv">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>'  );

		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				travelblog_posted_on();
				travelblog_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php travelblog_post_thumbnail(); ?>

	<img style="max-width: 100%;" src="<?php echo $project_image; ?>" alt="Project Image">
	
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'travelblog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travelblog' ),
				'after'  => '</div>',
			)
		);
		?>
		<p>Project Link: <a href=“<?php echo $project_link; ?>“><?php echo $project_link; ?></a></p>

		<p>GitHub Repository Link for this Project: <a href=“<?php echo $github_repository_link; ?>“><?php echo $github_repository_link; ?></a></p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
		<?php travelblog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
	
	</div>
	<!-- FA ICON -- inside content.php -->
	
	<div class="sectiondata-circle"><i class="fas fa-code"></i></div></div>
	
	<!-- new 
	<div class="sectiondata-circle"><?php echo $tech_icon; ?></div></div>-->
	<!-- /FA ICON -->
<!-- /content.php -->