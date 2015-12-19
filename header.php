<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'solus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
				
				<?php if ( get_theme_mod( 'solus' ) ) : ?>
			    
			    <div class='site-logo'>
			        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'solus' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
			    </div>
				<?php else : ?>
				<!-- lod default logo -->
				   <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
				<?php endif; ?>
			</div><!-- .site-branding -->
			

 		<a href="#sidr-main" class="navigation-button">
            <span class="icon"><span class="menu-text"><?php _e( 'Menu', 'solus' ); ?></span><span>
        </a>

 		
		<!-- #site-navigation -->
        <nav id="site-navigation" class="main-navigation" role="navigation">
        	<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
        </nav><!-- #site-navigation -->
		
        <?php get_search_form(); ?>


	</header><!-- #masthead -->
<div class="social-links">
			<ul>
				<li>
					<a href="<?php echo get_theme_mod( 'fb_textbox', 'facebook.com' ); ?>"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'tw_textbox', 'twitter.com' ); ?>"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'dribbble_textbox', 'dribbble.com' ); ?>"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'plusgoogle_textbox', 'plus.google.com' ); ?>"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'pinterest_textbox', 'pinterest.com' ); ?>"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'github_textbox', 'github.com' ); ?>"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'tumblr_textbox', 'tumblr.com' ); ?>"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'youtube_textbox', 'youtube.com' ); ?>"></a>
				</li>
				<li>
					<a href="<?php echo get_theme_mod( 'linkedin_textbox', 'linkedin.com' ); ?>"></a>
				</li>
			</ul>
		</div><!-- .social-links -->
	<div id="content" class="site-content">
