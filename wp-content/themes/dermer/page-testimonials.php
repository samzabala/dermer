<?php

/* Template Name: Testimonials */	
	
 get_header(); ?>


<div class="inner_main pattern">
	
		<h1 class="centered"><?php the_title();?></h1><!-- page_title -->
		
		<div class="testimonial_wrapper">
			
			<div class="testi_col">
				
				
				<?php if(get_field('testimonials_col_one')): ?>
				 
					<?php while(has_sub_field('testimonials_col_one')): ?>
					
						<div class="single_test">
					
							<span class="stars"><?php echo file_get_contents("wp-content/themes/dermer/images/new_icon_stars.svg"); ?></span><!-- stars -->
					
							<span class="testi_intro"><?php the_sub_field( 'testimonial_excerpt' ); ?></span><!-- testi_intro -->
					
							<div class="testi_content">
						
								<?php the_sub_field( 'testimonial_content' ); ?>
						
							</div><!-- testi_content -->
					
						<span class="name"><?php the_sub_field( 'testimonial_name' ); ?></span><!-- name -->
					
					</div><!-- single_test -->
				 
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
			</div><!-- testi_col -->
			
			<div class="testi_col">
				
				<?php if(get_field('testimonials_col_two')): ?>
				 
					<?php while(has_sub_field('testimonials_col_two')): ?>
					
						<div class="single_test">
					
							<span class="stars"><?php echo file_get_contents("wp-content/themes/dermer/images/new_icon_stars.svg"); ?></span><!-- stars -->
					
							<span class="testi_intro"><?php the_sub_field( 'testimonial_excerpt' ); ?></span><!-- testi_intro -->
					
							<div class="testi_content">
						
								<?php the_sub_field( 'testimonial_content' ); ?>
						
							</div><!-- testi_content -->
					
						<span class="name"><?php the_sub_field( 'testimonial_name' ); ?></span><!-- name -->
					
					</div><!-- single_test -->
				 
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
			</div><!-- testi_col -->
			
		</div><!-- testimonial_wrapper -->
	
</div><!-- inner_main -->

<?php get_footer(); ?>






	


