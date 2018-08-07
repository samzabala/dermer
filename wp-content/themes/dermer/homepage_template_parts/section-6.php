<section id="section_six">
	
	<div class="sec_six_inner">
	
	<div class="sec_six_left">
		
		<div class="sec_six_slider">
			
			
			<?php if(get_field('sec_six_testimonials_slider')): ?>
			 
				<?php while(has_sub_field('sec_six_testimonials_slider')): ?>
			 
					
					<div class="sec_six_single_slide">
				
						<span class="stars_svg"><?php echo file_get_contents("wp-content/themes/dermer/images/new_icon_stars.svg"); ?></span><!-- stars_svg -->
				
						<span class="sec_six_content"><?php the_sub_field( 'testimonial' ); ?></span><!-- sec_six_content -->
				
						<span class="sec_six_name"><?php the_sub_field( 'name' ); ?></span><!-- sec_six_name -->
				
					</div><!-- sec_six_single_slide -->
				
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
			
			<div class="sec_six_buttons">
				
				<span class="left_button sec_six_button"><?php echo file_get_contents("wp-content/themes/dermer/images/new_slide_button.svg"); ?></span><!-- left_button -->
				
				<span class="right_button sec_six_button"><?php echo file_get_contents("wp-content/themes/dermer/images/new_slide_button.svg"); ?></span><!-- right_button -->
				
			</div><!-- sec_six_buttons -->
			
		</div><!-- sec_six_slider -->
		
			<a class="testi_button mobile" href="<?php the_field( 'view_testimonials_link' ); ?>">View All Testimonials</a><!-- testi_button -->
		
	</div><!-- sec_six_left -->
	
	<div class="sec_six_right">
		
		
		<span class="small_header"><?php the_field( 'sec_six_small_header' ); ?></span><!-- small_header -->
		
		<span class="large_header"><?php the_field( 'sec_six_large_header' ); ?></span><!-- large_header -->


		<a class="testi_button desktop" href="<?php the_field( 'view_testimonials_link' ); ?>">View All Testimonials</a><!-- testi_button -->
		
		
	</div><!-- sec_six_right -->
	
	</div><!-- sec_six_inner -->
	
	
</section><!-- section_six -->