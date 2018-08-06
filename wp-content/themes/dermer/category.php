<?php get_header(); ?>


<div class="inner_main two_col">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="inner_content content">
		
		<h1 class="page_title"><?php single_cat_title();?></h1><!-- page_title -->
		
		<?php get_template_part( 'loop', 'index' );?>
		
		<div class="paged_wrapper">
			
			<?php wpbeginner_numeric_posts_nav(); ?>
			
		</div><!-- paged_wrapper -->
		
		</div><!-- inner_content -->
	
</div><!-- inner_main -->

<?php get_footer(); ?>

