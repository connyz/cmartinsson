<?php
/**
 * Template Name: Custom-portfolio
 */
?>
		<div class="content_area_custom clearfix">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php
					// Get content for the archive page
					the_content();
				?>
		</div><!-- .archivepost -->