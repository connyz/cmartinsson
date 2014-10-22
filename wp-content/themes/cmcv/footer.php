<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the id=main div and all content after
*
*/
?>

</div><!-- #main .site-main -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php do_action( 'cmcv_credits' ); ?>
        <a href="http://www.cmartinsson.se/" title="<?php esc_attr_e( 'Tema byggt av Conny Martinsson', 'cmcv' ); ?>" rel="generator"></a>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'cmcv' ), 'CMCV', '<a href="http://www.cmartinsson.se/" rel="designer">Conny Martinsson</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>