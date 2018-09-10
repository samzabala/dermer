<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<span class="meta_info">Posted In <?php echo get_the_category_list();?> On <span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span> </span><!-- meta_info -->
	
	<div class="post_content">
	
		<?php the_content();?>
	
	</div><!-- post_content -->
	
	<?php edit_post_link( __( 'Edit'), '', '' ); ?>

<?php endwhile; // end of loop ?>

<?php endif; ?>