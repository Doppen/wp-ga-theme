<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	ob_start();
	wp_head();
	$classList = ob_get_contents();
	ob_end_clean();

	echo str_replace("body.custom-background",".customBackground",$classList);

	?>
	<link rel="stylesheet" href="https://huc-css-util.netlify.com/css/huc-util-ga.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-custom.css">



</head>

<body <?php body_class(); ?>>

	<div class="hcContentContainer bgColorBrand1 hcMarginBottom5">
	  <header class=" hcPageHeaderSimple hcBasicSideMargin">
	    <a href='/dpp-home' class='hcBrand'>
	      <div class="hcBrandLogo"><?php the_custom_logo(); ?></div>
	    </a>

			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav>
	  </header>
	</div>



	<div class="customBackground">

	</div>







<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gutenbergtheme' ); ?></a>
