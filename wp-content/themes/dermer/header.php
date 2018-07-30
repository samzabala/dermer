<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700,800|Playfair+Display:400,700,700i|Prata');
</style>

</head>

<body <?php body_class(); ?>>
	
	<header>
		
		<div class="header_left">
			
			
			<a href="<?php bloginfo('url');?>">
				
				<?php echo file_get_contents("wp-content/themes/dermer/images/logo-dar.svg"); ?>
				
			</a>
			
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<span class="call_us">Call Us Today</span><!-- call_us -->
			
			<a class="tel" href="tel:(404) 892-8884">(404) 892-8884</a>
			
		</div><!-- header_right -->
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
			<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
		
		<section id="sticky_header">
		
		<div class="mobile_left">
			
			<a href="tel:(404) 892-8884">
			
				<span class="phone_svg"><?php echo file_get_contents("wp-content/themes/dermer/images/new_phone.svg"); ?></span>
				
				<span class="call_us">Call Us</span><!-- call_us -->
			
			</a>
			
		</div><!-- mobile_left -->
		
		<div class="mobile_right">
			
			<span class="mobile_menu_title">Menu</span><!-- mobile_menu_title -->
			
			<div class="mobile_menu_bars_wrapper">
				
				<span class="mobile_menu_bar"></span><!-- mobile_menu_bar -->
				
				<span class="mobile_menu_bar"></span><!-- mobile_menu_bar -->
				
				<span class="mobile_menu_bar"></span><!-- mobile_menu_bar -->
				
			</div><!-- mobile_menu_bars_wrapper -->
			
		</div><!-- mobile_right -->
		
	</section><!-- sticky_header -->
	
	<nav>
		
		<div class="nav_left">
			
			<span class="free_case">Free Case Evaluation</span><!-- free_case -->
			
			<span class="free_case_excerpt">We view each case as an opportunity to be your colleague, not just your attorney.</span><!-- free_case_excerpt -->
			<span class="required">Fields Required</span><!-- required -->
			
			<div class="form">
				
				<?php gravity_form(2, false, false, false, '', true, 1299); ?>
				
			</div><!-- form -->
			
			
		</div><!-- nav_left -->
		
		<div class="nav_right">
			
			
		</div><!-- nav_right -->
		
		
	</nav>
		
		
	</header>
	
	
				

<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			