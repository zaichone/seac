<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SEAC
 */
global $redux_option;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seac' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-2">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$seac_description = get_bloginfo( 'description', 'display' );
						if ( $seac_description || is_customize_preview() ) :
							?>
							
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-sm-10">
					<nav id="site-navigation" class="main-navigation pull-right navbar-expand-sm navbar-expand-lg">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-2x fa-bars"></i></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => 'nav navbar-nav navbar-right',
							'walker' => new wp_bootstrap_navwalker(),'fallback_cb' => ''
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
		<div id="site-tagline" class="text-center">
			<h1><?php echo $redux_option['opt-hero-title']; ?></h1>
			<p class="tagline"><?php echo $redux_option['opt-hero-text']; ?></p>
	
		</div>
		<ul id="sharing-bar">
										
						
						<li><a href="<?php echo $redux_option['opt-facebook-url']; ?>"><i class="fab fa-2x fa-facebook"></i></a></li>
						<li><a href="<?php echo $redux_option['opt-linkedin-url']; ?>"><i class="fab fa-2x fa-linkedin-in"></i></a></li>
						<li><a href="<?php echo $redux_option['opt-youtube-url']; ?>"><i class="fab fa-2x fa-youtube"></i></a></li>
					
		</ul>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
