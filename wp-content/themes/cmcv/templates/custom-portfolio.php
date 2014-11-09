<?php
/**
 * Template Name: Custom-portfolio
 */
?>

<?php get_header(); ?>

<div class="content_area_custom_portfolio clearfix">

		<?php
			global $post;
			$args=array(
				'post_type' =>  'custom_project',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);

			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) { ?>
      <div class="projects_container">
			<?php	while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <div class="project_portfolio_thumb">
            <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?></a>
  					<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
          </div>
				<?php
				endwhile;
			} ?>
      </div>
			<?php wp_reset_postdata();  // Restore global post data stomped by the_post(). ?>

</div><!-- .content_area_custom -->

<?php get_footer(); ?>