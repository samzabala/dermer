<section id="section_two">
	
	<div class="sec_two_inner">
		
			
		
		<div class="sec_two_slider">
			
			
			<?php if(get_field('selling_points_slider')): ?>
			 
				<?php while(has_sub_field('selling_points_slider')): ?>
			 
				
			    	<div class="single_slide <?php the_sub_field( 'slide_class' ); ?>">
				
							<div class="single_slide_inner">
				
								<span class="small_header"><?php the_sub_field( 'small_header' ); ?></span><!-- small_header -->
				
								<span class="large_header"><?php the_sub_field( 'large_header' ); ?></span><!-- large_header -->
					
								<span class="slide_content"><?php the_sub_field( 'selling_point_description' ); ?></span>
							
					
							</div><!-- single_slide_inner -->
					
							<div class="slide_svg">
						
								<div class="slide_svg_inner">
									
									<?php $mysvg = get_sub_field( 'svg_file_name' );
						
									 echo file_get_contents('wp-content/themes/dermer/images/' . $mysvg . ''); ?>
						
								</div><!-- slide_svg_inner -->
						
					
							</div><!-- slide_svg -->
				
					</div><!-- single_slide -->
			    
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>

			
		</div><!-- sec_two_slider -->
		
		
		
			<div class="back_button slide_button">
				
				<?php echo file_get_contents("wp-content/themes/dermer/images/arrow-left-01.svg"); ?>
				
			</div><!-- back_button -->

		
		
		
		
		<div class="next_button slide_button">
				
				<?php echo file_get_contents("wp-content/themes/dermer/images/arrow-right-01.svg"); ?>
				
			</div><!-- next_button -->
		
		
	</div><!-- sec_two_inner -->
	
	
</section><!-- section_two -->