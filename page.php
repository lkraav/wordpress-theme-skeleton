<?php /* Template Name: Page */ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

	<h1 class="post-title"><?php the_title(); ?></h1>
	
	<div class="meat">
		<?php echo the_content(); ?>
	</div>

	<p class="post-footer">
		<em><?php _e('Author:') ?><?php echo get_avatar(get_the_author_meta('user_email'), $size = '32'); ?><?php the_author(); ?></em>
		<img class="blogicons" src="<?php echo get_bloginfo('template_directory'); ?>/img/icon-comment.png" alt="Comments" /><?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
		<?php edit_post_link(__('Edit'), '<img class="blogicons" src="'.get_bloginfo('template_directory').'/img/icon-edit.png" alt="'.__('Edit').'" /><em>', '</em>'); ?>
	</p>
	<div class="post-datum"><span class="post-footer"><?php printf(__('Last edited by %1$s on %2$s at %3$s'), get_the_author(), get_the_modified_time('d.m.y'), get_the_modified_time('G:i')) ?></span></div>
	<p class="post-footer">
		<em><?php the_tags(); ?></em>
	</p>	
	
	<?php if(comments_open()): ?>
		<?php comments_template(); ?>
	<?php endif; ?>

<?php endwhile; endif; get_footer(); ?>
