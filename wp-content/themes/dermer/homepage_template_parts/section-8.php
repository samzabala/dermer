<section id="section_eight">
	
	
	<div class="sec_eight_inner">
		
		
		<div class="sec_eight_left">
			
			<img data-src="<?php bloginfo('template_directory');?>/images/content-3-img.jpg" alt="Personal Injury Lawyers at Dermer Appel Ruder" />
			
			<span class="sec_eight_caption"><?php the_field( 'sec_eight_image_caption' ); ?></span><!-- sec_eight_caption -->
			
		</div><!-- sec_eight_left -->
		
		<div class="sec_eight_right">
			
			<span class="large_header"><?php the_field( 'sec_eight_large_header' ); ?></span><!-- large_header -->
			
			<div class="sec_eight_content content">
			
				<?php the_field( 'section_eight_content' ); ?>
			
			</div><!-- sec_eight_content -->
			
		</div><!-- sec_eight_right -->
		
		
	</div><!-- sec_eight_inner -->
	
	<span class="sec_eight_svg"><?php echo file_get_contents("wp-content/themes/dermer/images/new_sec_eight_bg.svg"); ?></span>
	
	
</section><!-- section_eight -->