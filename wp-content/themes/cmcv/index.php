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
 * @package CMCV
 */

get_header(); ?>

	<div class="wrapper">
		<div class="main">

		<?php if ( have_posts() ) { ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) { the_post(); ?>

				<?php
					// Get content for the page
					the_content();
				?>

			<?php } ?>

		<?php }else{ ?>

			<?php get_template_part( '404' ); ?>

		<?php } ?>

		</div><!-- #main -->
	</div><!-- #wrapper -->

<?php get_sidebar(); //Kolla på denna rad sen ?>
<?php get_footer(); ?>
