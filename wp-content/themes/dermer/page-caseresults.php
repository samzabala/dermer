<?php
	
	/* Template Name: Case Results */
	
	get_header(); ?>


<div class="inner_main two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="inner_content content">
		
		<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
		
		<div class="case_results_page_wrapper">
			
			<?php if(get_field('case_results_page')): ?>
			 
				<?php while(has_sub_field('case_results_page')): ?>
			 
					<div class="case_results_page_single">
				
						<span class="amount"><?php the_sub_field( 'amount' ); ?></span><!-- amount -->
				
						<span class="small_header"><?php the_sub_field( 'case_results_type' ); ?></span><!-- small_header -->
				
						<span class="description"><?php the_sub_field( 'case_results_description' ); ?></span><!-- description -->
				
			</div><!-- case_results_page_single -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>			
			
		</div><!-- case_results_page_wrapper -->
			
	</div><!-- inner_content -->
	
</div><!-- inner_main -->

<?php get_footer(); ?>






	


