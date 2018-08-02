<?php
	
	/* Template Name: The Team */
	
	get_header(); ?>


<div class="inner_main two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="inner_content content">
		
		<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
		
		<div class="att_page_wrapper">
			
			
			<?php $attorneys = get_field( 'attorneys' ); ?>

			<?php if ( $attorneys ): ?>
	
				<?php foreach ( $attorneys as $post ):  ?>
				
				<?php setup_postdata ( $post ); ?>
				
					<div class="att_page_single">
				
						<a class="" href="<?php the_permalink();?>">
					
							<div class="att_image_wrapper">
					
								<?php $attorney_image = get_field( 'attorney_image' ); ?>
								
								<?php if ( $attorney_image) : ?>
								
									<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
								
									<?php else:?>
								
									<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Placeholder" />
								
								
									<?php endif;?>
								
						
								<div class="att_overlay"></div><!-- att_overlay -->
					
							</div><!-- att_image_wrapper -->
					
							<span class="att_page_title"><?php the_title();?></span><!-- att_page_title -->
					
							<span class="att_page_position">Partner</span><!-- att_page_position -->
					
					</a>
				
				</div><!-- att_page_single -->
	
				<?php endforeach; ?>

			<?php wp_reset_postdata(); ?>
			
			<?php endif; ?>

						
			
		</div><!-- att_page_wrapper -->
		
		
			
	</div><!-- inner_content -->
	
</div><!-- inner_main -->

<?php get_footer(); ?>






	


