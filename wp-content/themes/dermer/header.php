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


<style type="text/css">
	
	@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800|Playfair+Display:400,700,700i|Prata');
	
	<?php the_field( 'review_css','option'); ?>
	
	
</style>

<?php the_field( 'header_script','option'); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>
		
		<div class="header_left">
			
			
			<a href="<?php bloginfo('url');?>">
				
				<?php $header_logo = get_field( 'header_logo','option'); ?>
	
				<img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" />

			</a>
			
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<span class="call_us">Serving Metro Atlanta. Call Us Today</span><!-- call_us -->
			
			<a class="tel" href="tel:<?php the_field( 'phone','option'); ?>"><?php the_field( 'phone','option'); ?></a>
			
		</div><!-- header_right -->
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			
			<span class="menu_title">Menu</span><!-- menu_title -->
			
		</div><!-- menu_wrapper -->
		
		<section id="sticky_header">
		
		<div class="mobile_left">
			
			<a href="tel:<?php the_field( 'phone','option'); ?>">
			
<!-- 				<span class="phone_svg"><?php echo file_get_contents("wp-content/themes/dermer/images/new_phone.svg"); ?></span> -->
				
				<span class="call_us"><?php the_field( 'phone','option'); ?></span><!-- call_us -->
				
				<span class="serving">Serving Metro Atlanta</span><!-- serving -->
			
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
		
		<div class="close"></div><!-- close -->
		
		<div class="back_wrapper">
			
			<span class="back_arrow"><?php echo file_get_contents("wp-content/themes/dermer/images/nav_arrow.svg"); ?></span><!-- back_arrow -->
			
			<span class="back_title">Back</span>
			
		</div><!-- back_wrapper -->
		
		<div class="nav_left">
			
			<span class="free_case"><?php the_field( 'free_consultation_form_verbiage','option'); ?></span><!-- free_case -->
			
			<span class="free_case_excerpt"><?php the_field( 'form_sentence','option'); ?></span><!-- free_case_excerpt -->
			<span class="required">Fields Required</span><!-- required -->
			
			<div class="form">
				
				<?php gravity_form(2, false, false, false, '', true, 1299); ?>
				
			</div><!-- form -->
			
			
		</div><!-- nav_left -->
		
		<div class="nav_right">
			
			<div class="nav_col nav_col_one">
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
				
			</div><!-- nav_col_one -->
			
			<div class="nav_col nav_col_two">
				
				
			</div><!-- nav_col_two -->
			
			
		</div><!-- nav_right -->
		
		
	</nav>
		
		
	</header>
	
	
				


			