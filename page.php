<?php /* Template Name: Page */ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

	<h1 class="post-title"><?php the_title(); ?></h1>
	
	<div class="meat">
		<?php echo the_content(); ?>
	</div>

	<p class="post-footer">
		<em>Last Updated by <?php the_author(); ?> on <a href="<?php the_permalink(); ?>" title="permanent link"><?php the_modified_time('d.m.y',display); ?></a> @ <?php the_time(); ?></em>&nbsp;
	  |&nbsp;<img class="blogicons" src="<?php echo get_bloginfo('template_directory'); ?>/images/comment.png" alt="Comments" /><em><?php comments_popup_link(__('0 Comments'), __('1 Comment'), __('% Comments')); ?></em>
	  <?php edit_post_link('edit', '|&nbsp;<img class="blogicons" src="'. get_bloginfo('template_directory') . '/images/edit.png" alt="Edit" /><em>', '</em>'); ?>
	</p>
	<p class="post-footer">
		<em><?php the_tags(); ?></em>
	</p>	
	
	<?php if(comments_open()): ?>
		<div id="comments">
			<?php comments_template(); ?>
		</div>
	<?php endif; ?>

<?php endwhile; endif; get_footer(); ?>
