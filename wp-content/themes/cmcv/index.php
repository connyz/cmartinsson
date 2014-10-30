<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

	<div class="content_area clearfix">
		<div class="main">
		<?php if ( have_posts() ) { ?>
			<?php while ( have_posts() ) { the_post(); ?>
				<?php if (is_singular()) { ?>
							<?php	// Get content for singular page
								the_content();
							// Else get template for archive page ?>
							<?php } else { ?>
								<?php get_template_part( 'templates/archive'); ?>
				<?php } ?>
			<?php } // While ends here ?>
		<?php }else{ ?>
			<?php // If there are no posts show 404 template
					 get_template_part( '404' ); ?>
		<?php } ?>
		</div><!-- #main -->
		<?php cmcv_display_page_sidebar() ?>
	</div><!-- #content_area -->

<?php get_footer(); ?>

