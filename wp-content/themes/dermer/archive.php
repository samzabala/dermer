<?php get_header(); ?>


<div class="inner_main two_col">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="inner_content content">
		
		<?php
	
	if ( have_posts() )
		the_post();
?>

			<h1 class="page_title">

				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>

			</h1>
		
		
<?php
	
	rewind_posts();
	get_template_part( 'loop', 'index' );
	
?>

		
	
			
			<?php wpbeginner_numeric_posts_nav(); ?>
			
	
		
		</div><!-- inner_content -->
	
</div><!-- inner_main -->

<?php get_footer(); ?>


		



