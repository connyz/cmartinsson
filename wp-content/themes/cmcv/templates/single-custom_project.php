<?php /* Template name: Single custom project page */ ?>

<div class="single_project_div">

	<?php the_post_thumbnail("medium");	?>
	<?php $project_text = get_field( "project_headline" );
			if( $project_text ){ ?>
				<h3><?php the_field( "project_headline" ); ?></h3>
	<?php }else{
				echo _e("<h3>No text available.</h3>");
			}
	?>
	<?php $project_text = get_field( "project_description" );
			if( $project_text ){ ?>
				<p><?php the_field( "project_description" ); ?></p>
	<?php }else{
				echo _e("<p>No text available.</p>");
			}
	?>
	<?php $project_text = get_field( "project_link" );
			if( $project_text ){ ?>
				<a href="<?php the_field( "project_link" ); ?>"><?php _e("Project link", "cmcv"); ?></a>
	<?php }else{
				echo _e("<p>No link available.</p>");
			}
	?>

</div>