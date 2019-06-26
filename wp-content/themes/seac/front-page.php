<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SEAC
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			    the_content();
			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div id="whyus">
		<div class="text">
			<h2><?php echo $redux_option['opt-whyus-title']; ?></h2>
			<div class="content"><?php echo $redux_option['opt-whyus-text']; ?></div>
		</div>
		<div class="image" style="background:url(<?php echo $redux_option['opt-whyus-image']['url']; ?>)  no-repeat scroll center center  transparent; ">

		</div>
	</div>
    <?php get_template_part( 'inc/custom', 'service' ); ?>
<?php get_footer(); ?>
