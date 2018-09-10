<?php get_header(); ?>

	
<div id="internal_trigger" class="inner_main">
	 
	 <div class="not_found_wrapper">
	 
		 <div class="not_found_content">
		 
		 	<h1 class="not_found">404</h1>
	 
		 	<span class="large_header">The Page you are looking for could not be found</span><!-- large_header -->
	 
		 	<span class="small_header">Click Here to Return to Our <a href="<?php bloginfo('url');?>">Homepage</a></span><!-- small_header -->
		 
		 </div><!-- not_found_content -->
		 
		 <div class="not_found_svg_wrapper">
		
			<span class="not_found_svg"><?php echo file_get_contents("wp-content/themes/dermer/images/new_sp-2bg.svg"); ?></span><!-- not_found_svg -->
		
		</div><!-- not_found_svg_wrapper -->
	 
	 </div><!-- not_found_wrapper -->
	 
	 
 </div><!-- inner_main -->
			
<?php get_footer(); ?>