<section id="section_seven">
	
	<div class="sec_seven_inner">
		
		<div class="sec_seven_slider">
			
			
			<?php if(get_field('sec_seven_case_results')): ?>
			 
				<?php while(has_sub_field('sec_seven_case_results')): ?>
			 
					<div class="sec_seven_single_slide <?php the_sub_field( 'slide_class' ); ?>">
						
						
						<?php $crsvg = get_sub_field('svg_file_name');?>
				
						<span class="svg"><?php echo file_get_contents("wp-content/themes/dermer/images/" . $crsvg . ""); ?></span><!-- svg -->
				
						<span class="amount"><?php the_sub_field( 'amount' ); ?></span><!-- amount -->
				
						<span class="small_header"><?php the_sub_field( 'case_results_type' ); ?></span><!-- small_header -->
				
						<span class="sec_seven_arrow"><?php echo file_get_contents("wp-content/themes/dermer/images/new_slide_button.svg"); ?></span><!-- sec_seven_arrow -->
				
						<div class="sec_seven_hover">
					
							<a href="<?php the_field( 'view_all_case_results' ); ?>">
					
							<span class="sec_seven_content"><?php the_sub_field( 'case_result_description' ); ?></span>
					
							<span class="view_results"></span>
					
					</a>
					
					
				</div><!-- sec_seven_hover -->
				
			</div><!-- sec_seven_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
					
		</div><!-- sec_seven_slider -->
		
	</div><!-- sec_seven_inner -->
	
</section><!-- section_seven -->