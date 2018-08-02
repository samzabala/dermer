<?php

/* Template Name: Practice Areas Directory */	
	
 get_header(); ?>


<div class="inner_main pattern">
	
		<h1 class="centered"><?php the_title();?></h1><!-- page_title -->
		
		<div class="pa_page_wrapper">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>

		</div><!-- pa_page_wrapper -->
	
</div><!-- inner_main -->

<?php get_footer(); ?>






	


