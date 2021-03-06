<?php

/**
 * Template Name: Custom-front
 */

get_header();

?>

<div class="content_area_custom clearfix">
	<div class="custom_front">
		<?php while ( have_posts() ) : the_post(); ?>
		<!-- Image custom field -->
		<div class="custom_image">
			<?php $img = get_field( "frontpage_image" );
			if( !empty($img) ){ ?>
				<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
			<?php }else{
				echo ("<h2>No image available.</h2>");
			} ?>
		</div>
		<!-- Mid text custom fields -->
		<div class="custom_mid_texts">
			<h1 class="custom_field_h1"><?php _e("Hello!", "cmcv")?></h1>
			<h3 class="custom_field_h3"><?php _e("Welcome to my Online Portfolio", "cmcv")?></h3>
			<?php $frontpage_text = get_field( "frontpage_text" );
			if( $frontpage_text ){ ?>
				<p><?php the_field( "frontpage_text" ); ?></p>
			<?php }else{
				echo ("<h3>No text available.</h3>");
			} ?>
			<a class="custom_cv_link box-shadow-cvlink" href=<?php echo ("cv") ?>>Check out my CV</a>
		</div>
		<!-- Info custom fields -->
		<div class="custom_info">
			<div class="custom_info_section">
				<p class="custom_field_p"><?php _e("Available for:", "cmcv")?></p>
				<?php $frontpage_text = get_field( "availability" );
				if( $frontpage_text ){ ?>
					<p><?php the_field( "availability" ); ?></p>
				<?php }else{
					echo ("<p>No text available.</p>");
				} ?>
			</div>
			<div class="custom_info_section">
				<p class="custom_field_p"><?php _e("Cellphone:", "cmcv")?></p>
				<?php $frontpage_text = get_field( "cellphone" );
				if( $frontpage_text ){ ?>
					<p><?php the_field( "cellphone" ); ?></p>
				<?php }else{
					echo ("<p>No text available.</p>");
				} ?>
			</div>
			<div class="custom_info_section">
				<p class="custom_field_p"><?php _e("E-mail:", "cmcv")?></p>
				<?php $frontpage_text = get_field( "email" );
				if( $frontpage_text ){ ?>
					<p><?php the_field( "email" ); ?></p>
				<?php }else{
					echo ("<p>No text available.</p>");
				} ?>
			</div>
			<!-- Social links -->
			<div class="custom_info_section">
				<p class="custom_field_p"><?php _e("Social links:", "cmcv")?></p>
				<?php $front_fb_link = get_field( "facebook_link" );
				if( $front_fb_link ){ ?>
					<a class="facebook_link" href=<?php echo (the_field( "facebook_link" )) ?>></a>
				<?php } ?>
				<?php $front_tw_link = get_field( "twitter_link" );
				if( $front_tw_link ){ ?>
					<a class="twitter_link" href=<?php echo (the_field( "twitter_link" )) ?>></a>
				<?php } ?>
				<?php $front_li_link = get_field( "linkedin_link" );
				if( $front_li_link ){ ?>
					<a class="linkedin_link" href=<?php echo (the_field( "linkedin_link" )) ?>></a>
				<?php } ?>
				<?php $front_gp_link = get_field( "google+_link" );
				if( $front_gp_link ){ ?>
					<a class="googleplus_link" href=<?php echo (the_field( "google+_link" )) ?>></a>
				<?php } ?>
			</div>
		</div>

		<?php endwhile; // end of the loop. ?>

	</div><!-- .custom_front -->
</div><!-- .content_area -->

<div class="front_lower_container">
	<div class="lower_info_section">
		<h3 class="front_cont_h3"><?php _e("Favorite quote:", "cmcv")?></h3>
		<?php $front_lower_text = get_field( "favorite_quote" );
			if( $front_lower_text ){ ?>
				<?php the_field( "favorite_quote" ); ?>
			<?php }else{
				echo ("<p>No text available.</p>");
			} ?>
	</div>
	<div class="lower_info_section lower_mid_section">
		<h3 class="front_cont_h3"><?php _e("Testimonial:", "cmcv")?></h3>
		<?php $front_lower_text = get_field( "testimonial" );
			if( $front_lower_text ){ ?>
				<?php the_field( "testimonial" ); ?>
			<?php }else{
				echo ("<p>No text available.</p>");
			} ?>
	</div>
	<div class="lower_info_section">
		<h3 class="front_cont_h3"><?php _e("Recent project:", "cmcv")?></h3>
		<?php $front_lower_text = get_field( "recent_project_text" );
			if( $front_lower_text ){ ?>
					<p><?php the_field( "recent_project_text" ); ?></p>
				<?php }else{
					echo ("<p>No text available.</p>");
			} ?>
		<?php $front_lower_text = get_field( "recent_project_link" );
			if( $front_lower_text ){ ?>
				<p><?php _e("Follow this ", "cmcv")?><a class="recent_proj_link" href=<?php echo (the_field( "recent_project_link" )) ?>><?php _e("link", "cmcv")?></a><?php _e(" to read more.", "cmcv")?>
			<?php }else{
				echo ("<p>No link found.</p>");
			} ?>
	</div>
</div>

<?php get_footer(); ?>