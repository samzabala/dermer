<?php 
	
	/* Template Name: Attorney Bio */
	
	get_header(); ?>
	
	
	<div class="top_container content">
		
		<div class="inner_top_container">
		
			<div class="inner_container_left">
				
				<div class="image_inner_wrapper">
					
					<?php $attorney_image = get_field( 'attorney_image' ); ?>
					
					<?php if ( $attorney_image ): ?>
					
					<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
					
					
					<?php else:?>
					
						<img src="<?php bloginfo('template_url');?>/images/placeholder.jpg" alt="placeholder" />
					
					<?php endif; ?>
					
				</div><!-- image_inner_wrapper -->
				
			</div><!-- inner_container_left -->
		
			<div class="inner_container_right">
			
				<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
		
				<span class="position_title"><?php the_field( 'attorney_position' ); ?></span><!-- position_title -->
			
			</div><!-- inner_container_right -->
		
		</div><!-- inner_top_container -->
		
	</div><!-- top_container -->

<!-- spacer -->
<div class="inner_main two_col">
	
	<div class="sidebar_wrapper bio">
	
	<div class="sidebar_image_wrapper"></div><!-- sidebar_image_wrapper -->
	
</div><!-- sidebar_wrapper -->

	
	<div class="inner_content content">
		
		<?php get_template_part( 'loop', 'page' );?>
		
	</div><!-- inner_content -->
	
</div><!-- inner_main -->

<?php get_footer(); ?>






	


