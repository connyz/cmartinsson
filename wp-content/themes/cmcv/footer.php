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

			<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
				<?php dynamic_sidebar('footer-widget-area'); ?>
			<?php endif; ?>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #wrapper-->

<?php wp_footer(); ?>

</body>
</html>
