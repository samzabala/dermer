<section id="section_four">
	
	<div class="sec_four_inner">
		
		<div class="sec_four_left">
			
			<span class="small_header"><?php the_field( 'sec_four_small_header' ); ?></span><!-- small_header -->
			
			<span class="sec_four_intro"><?php the_field( 'sec_four_intro' ); ?></span><!-- sec_four_intro -->
			
			<div class="sec_four_content content">
				
				<?php the_field( 'sec_four_content' ); ?>
				
			</div><!-- sec_four_content -->
			
			<div class="smaller_screen_layout_change">
				
				<img data-src="<?php bloginfo('template_directory');?>/images/content-2-img.jpg" alt="Personal Injury Lawyers at Dermer Appel Ruder" />
			
				<span class="sec_four_caption"><?php the_field( 'sec_four_image_caption' ); ?></span><!-- sec_four_caption -->
				
			</div><!-- smaller_screen_layout_change :( hacky -->
			
		</div><!-- sec_four_left -->
		
		<div class="sec_four_right">
			
			<img data-src="<?php bloginfo('template_directory');?>/images/content-2-img.jpg"/>
			
			<span class="sec_four_caption"><?php the_field( 'sec_four_image_caption' ); ?></span><!-- sec_four_caption -->
			
			
		</div><!-- sec_four_right -->
		
	</div><!-- sec_four_inner -->
	
	
</section><!-- section_four -->