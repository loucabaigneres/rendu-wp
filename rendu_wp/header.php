<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rendu_wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script defer src="js/sidebar.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'rendu_wp'); ?>
		</a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<a href="">
					<img class="logo" src="<?php the_field('logo', 'option'); ?>" alt="">
				</a>
				<a id="cross" href="#"><span id="burger"></span></a>
			</div><!-- .site-branding -->

			<div class="menu-bottom">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-menu',
							'menu_id' => 'header-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="user">
					<p>Connexion</p>
					<p>Panier</p>
					<!-- <img src="assets/cart.svg" alt=""> -->
				</div>
			</div>
		</header><!-- #masthead -->

		<!-- <?php
		$rendu_wp_description = get_bloginfo('description', 'display');
		if ($rendu_wp_description || is_customize_preview()):
			?>
			<p class="site-description">
				<?php echo $rendu_wp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</p>
		<?php endif; ?> -->

		<!-- <?php
		if (is_front_page() && is_home()):
			?>
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php bloginfo('name'); ?>
				</a></h1>
			<?php
		else:
			?>
			<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php bloginfo('name'); ?>
				</a></p>
			<?php
		endif; ?> -->