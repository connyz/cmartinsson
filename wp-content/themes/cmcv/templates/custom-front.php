<?php

/**
 * Template Name: Custom-front
 */

get_header();

?>

	<div class="content_area clearfix">
		<div class="custom_front">

		<?php while ( have_posts() ) : the_post(); ?>
		<!-- Image custom field -->
		<div class="custom_image">
			<?php $img = get_field( "frontpage_image" );
			if( !empty($img) ){ ?>
				<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
			<?php }else{
				echo ("<h2>No image available.</h2>");
			} ?>
		</div>
		<!-- Mid text custom fields -->
		<div class="custom_mid_texts">
			<h1 class="custom_field_h1"><?php _e("Hello!", "cmcv")?></h1>
			<h2 class="custom_field_h2"><?php _e("Welcome to my Online Portfolio", "cmcv")?></h2>
			<?php $frontpage_text = get_field( "frontpage_text" );
			if( $frontpage_text ){ ?>
				<p><?php the_field( "frontpage_text" ); ?></p>
			<?php }else{
				echo ("<h3>No text available.</h3>");
			} ?>
		</div>
		<!-- Info custom fields -->
		<div class="custom_info">
			<p class="custom_field_p"><?php _e("Available for:", "cmcv")?></p>
			<?php $frontpage_text = get_field( "availability" );
			if( $frontpage_text ){ ?>
				<p><?php the_field( "availability" ); ?></p>
			<?php }else{
				echo ("<p>No text available.</p>");
			} ?>
			<p class="custom_field_p"><?php _e("Cellphone:", "cmcv")?></p>
			<?php $frontpage_text = get_field( "cellphone" );
			if( $frontpage_text ){ ?>
				<p><?php the_field( "cellphone" ); ?></p>
			<?php }else{
				echo ("<p>No text available.</p>");
			} ?>
			<p class="custom_field_p"><?php _e("Email:", "cmcv")?></p>
			<?php $frontpage_text = get_field( "email" );
			if( $frontpage_text ){ ?>
				<p><?php the_field( "email" ); ?></p>
			<?php }else{
				echo ("<p>No text available.</p>");
			} ?>
		</div>

		<?php endwhile; // end of the loop. ?>

	</div><!-- .main -->
</div><!-- .content_area -->

<?php get_footer(); ?>