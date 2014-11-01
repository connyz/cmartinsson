<?php
/**
 * Template Name: Custom-portfolio
 */
?>

<?php get_header(); ?>

<div class="content_area_custom clearfix">

		<?php
			global $post;
			$args=array(
				'post_type' =>  'custom_project',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);

			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {

				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>
					<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
				<?php
				endwhile;
			}
			wp_reset_postdata();  // Restore global post data stomped by the_post().

/*
		function ucs_display_projects_loop() {
    global $post;
    $args = array(
      'post_type' => 'project',
      'post_status' => 'publish',
      'posts_per_page' => -1
    );

    $projects = new WP_Query($args);

    if ($projects->have_posts()) {
      echo ('<div class="wysiwyg projects_sidebar_div">');
      echo ('<h2>'.__('Projekt', 'ullacarinstiftelse').'</h2>');
      echo ('<ul>');
      while($projects->have_posts()) : $projects->the_post();
        echo ('<li>');
          echo ('<a href="' . get_permalink() . '">' . get_the_title() . '</a>');
          the_excerpt();
        echo ('</li>');
      endwhile; wp_reset_postdata();
      echo ('</ul>');
      echo ('</div>');
    }
  }*/
			?>

</div><!-- .content_area_custom -->

<?php get_footer(); ?>