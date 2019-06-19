<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package imageworks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php $typekit = get_theme_mod('typekit-id');
		$googlefont = get_theme_mod('google-font');
		$cleanedgoogle = str_replace(' ', '+', $googlefont);?>
	<?php echo $typekit ? '<link rel="stylesheet" href="https://use.typekit.net/'.$typekit.'.css">' : '' ?>
	<?php echo $cleanedgoogle ? '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='.$cleanedgoogle.'">' : '' ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Comment the below line out to remove the slideout menu -->
<nav id="slideout-menu">	
<?php wp_nav_menu( array('theme_location' => 'panel', 'menu_id' => 'panel-menu', )); ?>
</nav>

<div id="page" class="site">
<header id="masthead" class="site-header">
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
			$imageworks_description = get_bloginfo( 'description', 'display' );
			if ( $imageworks_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $imageworks_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		<div class="nav-icon">
			<div></div>
		</div>
</header>

	<div id="content" class="site-content test">
