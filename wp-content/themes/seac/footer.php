<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SEAC
 */

?>

	</div><!-- #content -->
	<div id="subscription">
		<h2 class="text-black">SIGN UP TO OUR NEWSLETTER</div>
		<?php echo do_shortcode('[email-subscribers-form id="1"]'); ?>
	</div>

	<footer id="colophon" class="site-footer">
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
