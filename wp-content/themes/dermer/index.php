<?php get_header(); ?>


<div class="inner_main two_col">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="inner_content content">
		
		<h1 class="page_title">Our Blog</h1><!-- page_title -->
		
		<?php get_template_part( 'loop', 'index' );?>
		
			
	</div><!-- inner_content -->
	
</div><!-- inner_main -->

<?php get_footer(); ?>







