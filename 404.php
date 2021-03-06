<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package travelblog
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- BEGIN SITE HTML AND CSS  -- template-parts contact-page.php -->
		
		<div id="bannergraphic" class="bannergraphic">
            <div id="sectionheader" class="sectionheader">
				<h1 class="h1sectionheader"><a href="https://gregrasmussen.com/projects"><?php bloginfo( ‘name’ ); ?></a></h1>
				
            </div>
        </div>
    
        <section id="sectiondata">
			
		<!-- END SITE HTML AND CSS (CONTINUES BELOW) -->

		<section class="error-404 not-found">
			<header class="page-header">
				<br>
				<h1 class="page-title" style="color: black;"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'travelblog' ); ?></h1>
			</header><!-- .page-header -->

			<div class="sectiondata-maindiv sectiondata"><div class="sectiondata-datadiv">

				<div class="page-content">
					<p><?php esc_html_e( 'Darned broken links! Maybe try one of the other links below, or a search?', 'travelblog' ); ?></p>

						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'travelblog' ); ?></h2>
							<ul>
								<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
								?>
							</ul>
						</div><!-- .widget -->

						<?php
						/* translators: %1$s: smiley */
						$travelblog_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'travelblog' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$travelblog_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
						?>

				</div><!-- .page-content -->
			</section>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
