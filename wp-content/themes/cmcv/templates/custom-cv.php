<?php

/**
 * Template Name: Custom-cv
 */

get_header(); ?>

	<div class="custom_cv_headinfo clearfix">
		<div class="custom_cv_contactinfo">
			<?php $cv_contact_text = get_field( "full_name_cv" );
			if( $cv_contact_text ){ ?>
				<h2><?php the_field( "full_name_cv" ); ?></h2>
			<?php }else{
				echo ("<h2>No text available.</h2>");
			} ?>
			<?php $cv_contact_text = get_field( "textfield1_cv" );
			if( $cv_contact_text ){ ?>
				<p><?php the_field( "textfield1_cv" ); ?></p>
			<?php }else{
				echo ("<p>No text available.</p>");
			} ?>
			<?php $cv_contact_text = get_field( "textfield2_cv" );
			if( $cv_contact_text ){ ?>
				<p><?php the_field( "textfield2_cv" ); ?></p>
			<?php }else{
				echo ("<p>No text available.</p>");
			} ?>
			<?php $cv_contact_text = get_field( "textfield3_cv" );
			if( $cv_contact_text ){ ?>
				<p><?php the_field( "textfield3_cv" ); ?></p>
			<?php }else{
				echo ("<p>No text available.</p>");
			} ?>
		</div>
		<div class="custom_cv_image">
			<?php $img = get_field( "image_cv" );
			if( !empty($img) ){ ?>
				<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
			<?php }else{
				echo ("<h2>No image available.</h2>");
			} ?>
		</div>
	</div>
	<div class="content_area_cv clearfix">
		<div class="custom_cv">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .custom_cv -->
		<?php cmcv_display_page_sidebar() ?>
	</div><!-- #content_area -->

<?php get_footer(); ?>
