<section id="section_five">
	
	<div class="sec_five_inner_slider">
		
		
		<?php if(get_field('sec_five_practice_areas_slider')): ?>
		 
			<?php while(has_sub_field('sec_five_practice_areas_slider')): ?>
			
			
				
					<div class="sec_five_slide">
			
						<a href="<?php the_sub_field( 'pa_page_link' ); ?>">
				
							<div data-src="<?php the_sub_field( 'background_images' ); ?>" class="sec_five_bg_image <?php the_sub_field( 'pa_slide_class' ); ?>"></div><!-- sec_five_bg_image -->
				
								<div class="sec_five_slide_content">
					
									<span class="practice_areas_title"><?php the_sub_field( 'pa_title' ); ?></span><!-- practice_areas_title -->
				
									<span class="open_arow">
				
									<?php echo file_get_contents("wp-content/themes/dermer/images/open_arrow.svg"); ?>
				
									</span>
					
							</div><!-- sec_five_slide_content -->
				
						</a>
			
					</div><!-- sec_five_slide -->
		 
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		
	
				
	</div><!-- sec_five_inner_slider -->
	
	
	<a class="view_practice_areas_button" href="<?php the_field( 'sec_five_view_all_pas' ); ?>">View All Practice Areas</a><!-- view_practice_areas_button -->
	

</section><!-- section_five -->