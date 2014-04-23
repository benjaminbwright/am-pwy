<!-- Are there any comments? -->
<?php if ( have_comments()  ) : ?>
	
	<!--Comments go in this div-->
	<div id="comments" class="well">
		
		<!-- List the comments -->
		<ul class="comment-list">
			<?php wp_list_comments(
				array(
					//Format the comments in HTML5 because progress.
					'format' => 'html5'
				)
			); ?>
		</ul>
		
		<!-- Are there enough comments for navigation? -->
		<?php if ( get_comment_page() > 1 && get_option('page_comments') ) : ?>
			<nav id="comment-navigation">
				<?php previous_comments_link(); ?>
				<?php next_comments_link(); ?>
			</nav>
		<?php endif; ?>
		
	</div>
<?php endif; ?>
<!-- Load the comment form --?
<?php comment_form(); ?>
