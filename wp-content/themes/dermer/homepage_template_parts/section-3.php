<section id="section_three">
	
	
	<div class="sec_three_inner">
		
		<span class="small_header"><?php the_field( 'sec_three_small_header' ); ?></span><!-- small_header -->
		
		<div class="states_svg"><?php echo file_get_contents("wp-content/themes/dermer/images/icon-georgia.svg"); ?></div><!-- states_svg -->
		
		<h1><?php the_field( 'sec_three_h1_header' ); ?></h1>
		
		<div class="sec_three_content content">
			
			
			<?php the_field( 'sec_three_content' ); ?>
			
		</div><!-- sec_three_content -->
		
	</div><!-- sec_three_inner -->
	
	
</section><!-- section_three -->