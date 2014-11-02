<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CMCV
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( __( 'Conny Martinsson © 2014 | All rights reserved | ', 'cmcv' )); ?>
			<a class="footer_link" href=<?php echo ("contact") ?>>Contact Info</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #wrapper-->

<?php wp_footer(); ?>

</body>
</html>
