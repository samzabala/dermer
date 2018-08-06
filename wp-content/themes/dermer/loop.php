
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="post_feed_wrapper content">
		
		<span class="meta_info">Posted In <?php echo get_the_category_list();?> On <span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span> </span><!-- meta_info -->
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="post_content">
			
			<?php echo wp_trim_words( get_the_content(), 40, '...' );?>
			
		</div><!-- post_content -->
		
		<a class="post_read_more" href="<?php the_permalink();?>">Read More</a><!-- post_read_more -->
		
	</div><!-- post_feed_wrapper -->
	
			
		
<?php endwhile; // end of loop ?>

<?php endif; ?>

