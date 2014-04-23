<!--Don't forget the header-->
<?php get_header(); ?>		

		<!--The loop-->
		<?php while ( have_posts() ) : the_post(); ?>
			
			<!--
			Let the users style their own articles.
			You can add a custom class like this: post_class('custom-class')
			-->
			<article <?php post_class(); ?> >
				<!--
				The title of the post
				It also links back to this specific post
				-->
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<!--The content of the post-->
				<?php the_content(); ?>
			</article>
			
			<hr>
		<?php endwhile; ?>

		<!--Front Page Sidebar-->		
		<?php dynamic_sidebar('front-page-sidebar'); ?>		
		
<!--Don't forget the footer.-->
<?php get_footer(); ?>
