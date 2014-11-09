<?php /* Template name: Single custom project page */ ?>

<div class="single_project_div">

	<a href="<?php the_field( "project_link" ); ?>" target="_blank"><?php the_post_thumbnail("medium");	?></a>
	<?php $project_text = get_field( "project_headline" );
			if( $project_text ){ ?>
				<a href="<?php the_field( "project_link" ); ?>" class="single_proj_h3_link" target="_blank"><h3><?php the_field( "project_headline" ); ?></h3></a>
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
				<a href="<?php the_field( "project_link" ); ?>" target="_blank"><?php _e("Project link", "cmcv"); ?></a>
	<?php }else{
				echo _e("<p>No link available.</p>");
			}
	?>

</div>