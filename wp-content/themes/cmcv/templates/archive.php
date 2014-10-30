<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
		<div class="archive_post">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php
					// Get content for the archive page
					the_content();
				?>
		</div><!-- .archivepost -->