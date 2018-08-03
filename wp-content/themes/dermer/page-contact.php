<?php 
	
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div class="inner_main">
	
	<div class="contact_wrapper">
		
		
		<div class="contact_wrapper_inner">
		
		
			<div class="contact_left">
				
				<h1 class="contact_title"><?php the_field( 'contact_header' ); ?></h1>
				
			</div><!-- contact_left -->
			
			<div class="contact_right">
				
				
				<span class="contact_svg"><?php echo file_get_contents("wp-content/themes/dermer/images/new_footer_logo.svg"); ?></span>
				
					<div class="contact_left_col">
				
						<div class="contact_flex_left">
							
							<span class="small_header"><?php the_field( 'small_header_one' ); ?></span><!-- large_header -->
							
							<a class="numbers" href="tel:<?php the_field( 'phone' ); ?>"><span>P</span><?php the_field( 'phone' ); ?></a><!-- numbers -->
							
							<span class="numbers"><span>f</span><?php the_field( 'fax_number' ); ?></span><!-- numbers -->
							
							<a class="address" href="<?php the_field( 'google_maps_link' ); ?>" target="_blank"><?php the_field( 'address' ); ?></a>
							
							<a class="google_maps" href="<?php the_field( 'google_maps_link' ); ?>" target="_blank">Google Maps</a><!-- google_maps -->
							
						</div><!-- contact_flex_left -->
						
						<div class="contact_flex_right">
							
							<span class="small_header right"><?php the_field( 'small_header_two' ); ?></span><!-- large_header -->
							
							<ul class="social">
								
								<?php if(get_field( 'google_plus' )): ?>
								
									<li><a href="<?php the_field( 'google_plus' ); ?>" target="_blank">Google +</a></li>
								
								<?php endif;?>
								
								<?php if(get_field( 'facebook' )): ?>
								
									<li><a href="<?php the_field( 'facebook' ); ?>" target="_blank">Facebook</a></li>
								
								<?php endif;?>
								
								<?php if(get_field( 'linked_in' )): ?>
								
									<li><a href="<?php the_field( 'linked_in' ); ?>" target="_blank">Linked In</a></li>
								
								<?php endif;?>
							</ul>
							
						</div><!-- contact_flex_right -->
				
					</div><!-- contact_left_col -->
				
				
			</div><!-- contact_right -->
			
		</div><!-- contact_wrapper_inner -->
		
		
	</div><!-- contact_wrapper -->
	
	<div class="iframe_wrapper">
		
		
		<?php the_field( 'iframe_map' ); ?>
		
		
	</div><!-- iframe_wrapper -->

	
</div><!-- inner_main -->


<?php get_footer(); ?>






	


