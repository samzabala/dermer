<?php 
	
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div class="inner_main">
	
	<div class="contact_wrapper">
		
		
		<div class="contact_wrapper_inner">
		
		
			<div id="contact_trigger" class="contact_left">
				
				<h1 class="contact_title"><?php the_field( 'contact_header' ); ?></h1>
				
				<span class="contact_design"><?php echo file_get_contents("wp-content/themes/dermer/images/new_sec_eight_bg.svg"); ?></span><!-- footer_design -->
				
			</div><!-- contact_left -->
			
			<div class="contact_right">
				
				
				<span class="contact_svg">
				
					<?php $footer_logo_image = get_field( 'footer_logo_image','option'); ?>

					<img src="<?php echo $footer_logo_image['url']; ?>" alt="<?php echo $footer_logo_image['alt']; ?>" />
				
				</span>
				
					<div class="contact_left_col">
				
						<div class="contact_flex_left">
							
							<span class="small_header"><?php the_field( 'footer_lamfirm_name','option'); ?></span><!-- large_header -->
							
							<a class="numbers" href="tel:<?php the_field( 'phone','option'); ?>"><span>P</span><?php the_field( 'phone','option'); ?></a><!-- numbers -->
							
							<span class="numbers"><span>f</span><?php the_field( 'fax','option'); ?></span><!-- numbers -->
							
							<a class="address" href="<?php the_field( 'google_maps_link','option'); ?>" target="_blank"><?php the_field( 'address' ); ?></a>
							
							<a class="google_maps" href="<?php the_field( 'google_maps_link','option'); ?>" target="_blank">Google Maps</a><!-- google_maps -->
							
						</div><!-- contact_flex_left -->
						
						<div class="contact_flex_right">
							
							<span class="small_header right"><?php the_field( 'social_header','option'); ?></span><!-- large_header -->
							
							<ul class="social">
								
								<?php if(get_field( 'google_plus_url','option')): ?>
								
									<li><a href="<?php the_field( 'google_plus_url','option'); ?>" target="_blank">Google +</a></li>
								
								<?php endif;?>
								
								<?php if(get_field( 'facebook_url','option')): ?>
								
									<li><a href="<?php the_field( 'facebook_url','option'); ?>" target="_blank">Facebook</a></li>
								
								<?php endif;?>
								
								<?php if(get_field( 'linkedin_url','option')): ?>
								
									<li><a href="<?php the_field( 'linkedin_url','option'); ?>" target="_blank">Linked In</a></li>
								
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






	


