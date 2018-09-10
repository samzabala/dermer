<div class="sidebar_blog_wrapper">
	
	<div class="sidebar_blog recent">
		
		<span class="sidebar_blog_title">Recent Posts</span><!-- sidebar_blog_title -->
		
			<?php dynamic_sidebar( 'sidebar' ); ?>
			
			<a class="view_all_sidebar" href="<?php the_permalink(39);?>">View All Posts</a><!-- view_all_sidebar -->
		
	</div><!-- sidebar_blog -->
	
	<div class="sidebar_blog categories">
		
		<span class="sidebar_blog_title">Categories</span><!-- sidebar_blog_title -->
		
			<?php dynamic_sidebar( 'category_sidebar' ); ?>
		
	</div><!-- sidebar_blog -->
	
	<div class="sidebar_blog archive">
		
		<span class="sidebar_blog_title">Archive</span><!-- sidebar_blog_title -->
		
			<?php dynamic_sidebar( 'archive_sidebar' ); ?>
		
	</div><!-- sidebar_blog -->
	
	
</div><!-- sidebar_blog_wrapper -->

