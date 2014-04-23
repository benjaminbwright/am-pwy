<!--Don't forget the header-->
<?php get_header(); ?>		
		<h3>Archive for
			<!--Find out what type of archive to display-->
			<?php if ( is_category() ) :?>
				<?php single_cat_title(); ?>
			<?php elseif ( is_tag() ) :?>
				<?php single_tag_title(); ?>
			<?php elseif ( is_day() ) :?>
				<?php echo get_the_date(); ?>
			<?php elseif ( is_month() ) :?>
				the Month of <?php echo get_the_date('F Y'); ?>
			<?php elseif ( is_year() ) :?>
				the Year <?php echo get_the_date('Y'); ?>
			<?php else :?>
				Selection
			<?php endif; ?>
		</h3>
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
				<!--
				I'm using this small tag to control the styliing of the text,
				but later I'll take that out and just use CSS.
				-->
				<small>
					<section>
						<!--Who's the author?-->
						<strong><?php the_author_link(); ?></strong>
						<br>
						<!--When did they publish this post?-->
						<?php the_date(); ?>
						<br>
						<!--What categories apply to this post?-->
						Categories: <?php the_category(', '); ?>
						<br>
						<!--What are the tags?-->
						<?php the_tags(); ?>
					</section>
				</small>
			</article>
			
			<hr>
		<?php endwhile; ?>		
		
<!--Don't forget the footer.-->
<?php get_footer(); ?>
