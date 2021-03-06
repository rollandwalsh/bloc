<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package BLOC
 * @since BLOC 1.0.0
 */
?>

<div class="footer-container">
	<footer class="footer">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</footer>
</div>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
