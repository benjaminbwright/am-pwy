<!--Don't forget the header-->
<?php get_header(); ?>		

		<!--The loop-->
		<?php while ( have_posts() ) : the_post(); ?>
			
			<!--
			Let the users style their own articles.
			You can add a custom class like this: post_class('custom-class').
			This template uses a different class depending on whether there is a sidebar.
			-->
			<?php if ( is_active_sidebar('page-sidebar') ) : ?>
			<article <?php post_class('col-md-9'); ?> >
			<?php else : ?>
			<article <?php post_class('col-md-12'); ?> >
			<?php endif; ?>
				
				<!--
				The title of the post
				It also links back to this specific post
				-->
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<!--The content of the post-->
				<?php the_content(); ?>
				
				<!--Comments-->
			
			</article>
			<hr>
		<?php endwhile; ?>
		
		<!--Page Sidebar-->		
		<?php dynamic_sidebar('page-sidebar'); ?>
		
<!--Don't forget the footer.-->
<?php get_footer(); ?>
