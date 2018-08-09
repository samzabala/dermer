<footer>
	
	
	<div class="footer_left">
		
		<span class="large_header footer_title"><?php the_field( 'footer_caption','option'); ?></span><!-- large_header -->
		
		<span class="footer_design"><?php echo file_get_contents("wp-content/themes/dermer/images/new_sec_eight_bg.svg"); ?></span><!-- footer_design -->
		
			<div class="footer_left_wrapper">
		
				<span class="footer_svg">
				
					<?php $footer_logo_image = get_field( 'footer_logo_image','option'); ?>

					<img src="<?php echo $footer_logo_image['url']; ?>" alt="<?php echo $footer_logo_image['alt']; ?>" />
					
				</span>
			
				<div class="footer_left_col">
			
					<div class="footer_flex_left">
						
						<span class="small_header"><?php the_field( 'footer_lamfirm_name','option'); ?></span><!-- large_header -->
						
						<a class="numbers" href="tel:<?php the_field( 'phone','option'); ?>"><span>P</span><?php the_field( 'phone','option'); ?></a><!-- numbers -->
						
						<span class="numbers"><span>f</span><?php the_field( 'fax','option'); ?></span><!-- numbers -->
						
						<a class="address" href="<?php the_field( 'google_maps_link','option'); ?>" target="_blank"><?php the_field( 'address','option'); ?></a>
						
						<a class="google_maps" href="<?php the_field( 'google_maps_link','option'); ?>" target="_blank">Google Maps</a><!-- google_maps -->
						
					</div><!-- footer_flex_left -->
					
					<div class="footer_flex_right">
						
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
						
					</div><!-- footer_flex_right -->
			
				</div><!-- footer_left_col -->
			
			</div><!-- footer_left_wrapper -->
		
	</div><!-- footer_left -->
	
	<div id="consultation" class="footer_right">
		
		
		<div class="footer_right_inner">
			
			<span class="free_case"><?php the_field( 'free_consultation_form_verbiage','option'); ?></span><!-- free_case -->
			
			<span class="free_case_excerpt"><?php the_field( 'form_sentence','option'); ?></span><!-- free_case_excerpt -->
			<span class="required">Fields Required</span><!-- required -->
			
			<div class="form">
				
				<?php gravity_form(1, false, false, false, '', true, 124); ?>
				
			</div><!-- form -->
			
		</div><!-- footer_right_inner -->
		
		
	</div><!-- footer_right -->
	
	
</footer>

<div class="copyright">
	
	<ul>
		<li><?php echo date("Y"); ?> <?php the_field( 'copyright','option'); ?></li>
		<li><?php the_field( 'all_rights_reserved','option'); ?></li>
		
		<?php if(get_field( 'google_plus_url','option')): ?>
							
			<li><a href="<?php the_field( 'google_plus_url','option'); ?>" target="_blank">Google +</a></li>
							
		<?php endif;?>
	</ul>
	
	
	<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
		
		<?php echo file_get_contents("wp-content/themes/dermer/images/logo-ilawyer-01.svg"); ?>
		
	</a><!-- ilawyer -->
	
</div><!-- copyright -->

<?php wp_footer();?>

<?php the_field( 'footer_scripts','option'); ?>

</body>
</html>
