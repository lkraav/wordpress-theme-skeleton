<?php /* Template Name: Index */ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

	<h1 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	<div class="post-datum"><?php the_modified_time('d.m.y', display); ?>, <?php the_time('G:i'); ?></div>
	
	<div class="meat">
		<?php echo the_content(); ?>
	</div>

	<p class="post-footer">
		<em><?php _e('Author:') ?><?php echo get_avatar(get_the_author_meta('user_email'), $size = '32'); ?><?php the_author(); ?></em>
		<img class="blogicons" src="<?php echo get_bloginfo('template_directory'); ?>/img/icon-comment.png" alt="Comments" /><?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
		<?php edit_post_link(__('Edit'), '<img class="blogicons" src="'.get_bloginfo('template_directory').'/img/icon-edit.png" alt="'.__('Edit').'" /><em>', '</em>'); ?>
	</p>
	<p class="post-footer">
		<em><?php the_tags(); ?></em>
	</p>	
	
	<?php if(comments_open()): ?>
		<?php comments_template(); ?>
	<?php endif; ?>

<?php endwhile; endif; get_footer(); ?>
