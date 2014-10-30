<?php

/**
 * Template Name: Custom-cv
 */

get_header(); ?>

	<div class="content_area_cv clearfix">
		<div class="custom_cv">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .custom_cv -->
		<?php cmcv_display_page_sidebar() ?>
	</div><!-- #content_area -->

<?php get_footer(); ?>
