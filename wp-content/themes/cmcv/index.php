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
				<?php echo 'The post type is: ' . get_post_type( get_the_ID() ); ?>
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
		<?php
		/** * The sidebar containing the main widget area. */
		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			return;
		}
		?>

		<div class="right_widget_area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #right_widget_area -->

	</div><!-- #content_area -->

<?php get_footer(); ?>

